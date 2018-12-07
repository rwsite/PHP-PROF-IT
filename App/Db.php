<?php

namespace App;

class Db
{

  protected static $dbh;

  public function __construct()
  {
    $dsn = 'mysql:dbname=profit;host=localhost';
    $user = 'mysql';
    $password = 'mysql';

    self::$dbh = new \PDO ($dsn, $user, $password); // Новое подключение к mysql
    /**
     * Вывод ошибок везде делают через try catch.. при создании подключения?
     * https://habr.com/post/137664/
     */
  }

  /**
   * Выполняет запрос к БД
   * 
   * @param $sql
   * @param array $data
   * @param string $class
   * @return array|bool|string - возвращает объект или массив объектов нужного класса
   */
  public function query($sql, $data = [], $class = '')
  {

    self::$dbh->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
    $sth = self::$dbh->prepare($sql); // подготовка запроса

    // Проверка на корректность запроса
    if (false === $sth) {
      echo '<p class="warning"> Error occurred:' . implode(":", self::$dbh->errorInfo()) . '<p>';
      return false;
    }

    $sth->execute($data); // запуск подготовленного запроса
    $class = $sth->fetchAll(\PDO::FETCH_CLASS); // возвращает результат
    // Если нет результата
    if(empty($class))
      return false;
    return $class;
  }

  /**
   * Выполняет запрос к БД
   *
   * @param $query
   * @param array $params
   * @return bool - true - успех, false - ошибка
   */
  public function execute($query, $params = [])
  {
    $sth = self::$dbh->prepare($query);
    $sth->execute($params); // запуск подготовленного запроса
    if (assert(self::$dbh->errorCode() === '00000')) {
      return true;
    }
    return false;
  }


}