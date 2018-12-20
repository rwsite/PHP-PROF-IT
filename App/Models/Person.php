<?php

namespace App\Models;

use App\Model;

/**
 * Class Person
 * @package App\Models
 */
class Person extends Model
{
  /**
   * @var string - Table name
   */
  protected static $table = 'persons';

  public $LastName;
  public $FirstName;
  public $Age;

}