<?php

namespace App;

/**
 * Class Model
 * @package App
 */
abstract class Model
{
  /**
   * @var string - имя таблицы в БД
   */
  protected static $table = '';//защищенное статическое свойсво, можно заменить на константу

  /**
   * @var - каждый объект должен именть id, для работы с базой
   */
  public $id;

  /**
   * Поиск всех элементов из таблицы
   *
   * Нельзя использовать $this.
   * Вызов статического метода
   * Model::FindAll();
   */
  public static function FindAll()
  {
    $db = new Db;
    $sql = 'SELECT * FROM ' . static::$table;
    return $db->query($sql, static::class, []);
    // self - Имя текущего класа.
    // Static - имя класса, где вызывается во время выполнения
  }

  /**
   * Поиск в таблице по ID
   *
   * @param int $id -
   * @return bool - true найдено/false - нет
   */
  public static function findById(int $id)
  {
    $db = new Db;
    $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
    $result = $db->query($sql, static::class, [':id' => $id]);
    if (!empty($result)) {
      return $result[0];
    }
    return false;
  }

  /**
   * Обновить записи объекта в БД.
   *
   * @return bool
   */
  public function update()
  {
    $fields = get_object_vars($this);// array - получаем свойства объекта
    // name=:name
    $sets = $data = [];
    foreach ($fields as $key => $val) {
      $data[':' . $key] = $val;
      if ($key === 'id')
        continue;
      $sets[] = $key . '=:' . $key;
    }
    $sql = '
      UPDATE ' . static::$table . '
      SET ' . implode(', ', $sets) . '
      WHERE id=:id';
    $db = new Db;
    $result = $db->execute($sql, $data);
    return $result;
  }


  /**
   * Создать объект в БД
   *
   * @return bool
   */
  public function insert()
  {
    $fields = get_object_vars($this);// Получим свойства объекта в виде полей
    $data = $table = [];
    foreach ($fields as $key => $val) {
      if ($key === 'id') {
        continue;
      }
      $data[':' . $key] = $val;
      $table[] = $key;
    }
    $sql = '
      INSERT INTO ' .
      static::$table .
      ' ( ' . implode(', ', $table) . ' ) ' .
      ' VALUES ( ' . implode(', ', array_keys($data)) . ' )';
    $db = new Db;
    $result = $db->execute($sql, $data);
    return $result;
    /*
    $sql = 'SELECT * FROM ' . static::$table .' ORDER BY id DESC LIMIT 1';
    return $db->query($sql, [], static::class)[0];
    */
  }


  /**
   * Удалить запись из БД.
   * DELETE FROM table_name WHERE condition;
   *
   * @return bool
   */
  public function delete()
  {
    $sql = '
      DELETE FROM ' .
      static::$table . '
      WHERE id=:id';
    $db = new Db;
    $result = $db->execute($sql, [':id' => $this->id]);
    return $result;
  }


  /**
   * Сохранить объект в БД. Если нету - создать новую запись.
   *
   * @return bool
   */
  public function save()
  {
    $fields = get_object_vars($this);
    if ($fields['id']) {
      $node = $this::findById($this->id);
      if ($node)
        return $this::update();
    }
    return $this::insert();
  }

}