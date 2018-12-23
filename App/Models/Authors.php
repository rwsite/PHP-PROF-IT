<?php
/**
 * Автор публикации
 */

namespace App\Models;

use App\Model;

class Authors extends Model
{
  protected static $table = 'authors';

  public $LastName;
  public $FirstName;

}