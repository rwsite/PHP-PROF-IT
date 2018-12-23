<?php

namespace App;

/**
 * Class Db
 * @package App
 */
class Db
{

  /** @var \PDO  */
  protected $dbh;

  public function __construct()
  {
    $dsn = 'mysql:dbname=profit;host=localhost';
    $user = 'mysql';
    $password = 'mysql';

    $this->dbh = new \PDO ($dsn, $user, $password); // Новое подключение к mysql
    /**
     *  https://habr.com/post/137664/
     */
  }

  /**
   * Выполняет запрос к БД
   *
   * @param string $sql - запрос sql
   * @param \stdClass $class - имя класса, для класса котороый нужно вернуть
   * @param array $params - массив данных для подстановки
   * @return array|bool|string - возвращает объект или массив объектов нужного класса, если ошибка false
   */
  public function query(string $sql, $class = null, $params = [], $constructorArguments = [])
  {
    $this->dbh->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
    $sth = $this->dbh->prepare($sql); // подготовка запроса
    $res = $sth->execute($params); // запуск подготовленного запроса, true -если ок
    $obj = $sth->fetchAll(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, $class, $constructorArguments); // Возвращает все объекты
    //$obj = $sth->fetchObject( $class ); // возвращает 1 объект
    if(empty($class)) {
      return false;
    }

    return $obj;
  }

  /**
   * Выполняет запрос к БД
   *
   * @param $query
   * @param array $params
   * @return bool - true - успех, false - ошибка
   */
  public function execute( string $query, $params = [])
  {
    $sth = $this->dbh->prepare($query);
    $sth->execute($params); // запуск подготовленного запроса
    if (assert($this->dbh->errorCode() === '00000')) {
      return true;
    }
    return false;
  }


}