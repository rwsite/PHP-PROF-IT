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
   *
   * @return array|bool|string - возвращает объект или массив объектов нужного класса, если ошибка false
   */
  public function query( string $sql, $class = null, $params = [] )
  {
    $sth = $this->dbh->prepare($sql); // подготовка запроса
    $sth->execute($params); // запуск подготовленного запроса, true -если ок
    if ($class === null) {
      return $sth->fetchAll();
    }
    return $sth->fetchAll(\PDO::FETCH_CLASS, $class); // Возвращает все объекты
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
    return $sth->execute($params); // запуск подготовленного запроса
  }

}