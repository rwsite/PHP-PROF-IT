<?php


namespace App\Models;

use App\Db;
use App\Model;

class Person extends Model
{
  protected static $table = 'persons';

  public $LastName;
  public $FirstName;
  public $Age;

  /** Функция из задания. Урок 1.
  * public static function AddPerson($f_name = 'Вася', $l_name = 'Иванов', $age = '')
  * {
    * $db = new Db;
    * $sql = 'INSERT INTO ' . static::$table . '(`LastName`,`FirstName`,`Age`)' . 'VALUES (:f_name, :l_name, :age)';
    * return $db->execute($sql, [':f_name' => $f_name, ':l_name' => $l_name, ':age' => $age], static::class);
   * }
   */

}