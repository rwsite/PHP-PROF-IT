<?php

namespace App;


use App\Models\HasRead;
use App\Models\HasSave;

class Config implements HasRead, HasSave
{
  private static $_instance = null;

  private static $db = 'sdf';
  private static $host = 'sdf';
  private static $user = 'sdf';
  private static $password = 'sdf';
  private static $data;

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
    self::$data = [self::$db, self::$host, self::$user, self::$password];
    return self::$data;
  }

}