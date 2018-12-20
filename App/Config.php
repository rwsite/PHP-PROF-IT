<?php

namespace App;


use App\Models\HasRead;
use App\Models\HasSave;

/**
 * Class Config
 * @package App
 */
class Config {
  private static $_instance = null;

  private static $db;
  private static $host;
  private static $user;
  private static $password;

  public $data;

  private function __construct()
  {
    self::$_instance = $this->get_data();
  }

  private function __clone()
  {
    // ограничивает клонирование объекта
  }

  public function __wakeup()
  {
    // Одиночки не должны быть восстанавливаемыми из строк.
  }

  public static function getInstance()
  {
    if (self::$_instance != null) {
      return self::$_instance;
    }
    return new self;
  }

  public function get_data()
  {

    $this->data = [
      self::$db,
      self::$host,
      self::$user,
      self::$password
    ];

    return $this->data;
  }

}