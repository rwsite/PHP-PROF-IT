<?php

namespace App\Models;

use App\Model;

/**
 * Class Authors - Авторы публикаций
 *
 * @package App\Models
 */
class Author extends Model
{
  /**
   * @var string - наименование таблицы в БД
   */
  protected static $table = 'authors';

  /** @var - Имя автора */
  public $LastName;

  /** @var - Фамилия Автора */
  public $FirstName;

}