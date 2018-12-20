<?php


namespace App\Models;

use App\Model;

/**
 * Class User
 * @package App\Models
 */
class User extends Model
{
  /**
   * @var string - Table name
   */
    protected static $table = 'users';

    public $login;
    public $email;
    public $password;

}