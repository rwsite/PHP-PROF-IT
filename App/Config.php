<?php
/**
 * Use Example https://refactoring.guru/ru/design-patterns/singleton/php/example
 */

namespace App;

/**
 * Class Config
 * @package App
 */
class Config {

  /**
   * @var array|null
   */
  private static $_instance;

  /**
   * @var - Массив с данными для записи ключей + значения
   */
  private $data = [];

  /**
   * Config constructor. Не даем возможности создать экземпляр объекта
   */
  private function __construct()
  {
  }

  /**
   * Ограничивает клонирование объекта
   */
  private function __clone()
  {
  }

  /**
   * Одиночки не должны быть восстанавливаемыми из строк. - не знаю что это значит
   */
  public function __wakeup()
  {
  }

  /**
   * @return Config|array|null
   */
  public static function getInstance()
  {
    if (self::$_instance === null) {
      return new self;
    }
    return self::$_instance;
  }

  /**
   * Функция устанавливает ключи и значения конфига
   *
   * @param $key - ключ
   * @param $val - значение
   */
  public function set_data(string $key, string $val)
  {
    $this->data[$key] = $val;
  }

  /**
   * Функция возвращает значения конфига по ключу
   *
   * @param string $key
   * @return mixed
   */
  public function get_data(string $key)
  {
    return $this->data[$key];
  }

}