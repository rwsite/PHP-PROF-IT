<?php

namespace App;


abstract class Model
{
  protected static $table = '';//защищенное статическое свойсво, можно заменить на константу

  public $id;

  /**
   * Нельзя использовать $this.
   * Вызов статического метода
   * Model::FindAll();
   */
  public static function FindAll()
  {
    $db = new Db;
    $sql = 'SELECT * FROM ' . static::$table ;
    return $db->query($sql, [], static::class);
    // self - Имя текущего класа.
    // Static - имя класса, где вызывается во время выполнения
  }

  public static function findById(int $id)
  {
    $db = new Db;
    $sql = 'SELECT * FROM ' . static::$table . ' WHERE id=:id';
    return $db->query($sql, [':id' => $id], static::class)[0];
  }

}