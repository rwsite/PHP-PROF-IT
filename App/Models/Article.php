<?php

namespace App\Models;


use App\Model;

/**
 * Class Article
 * @package App\Models
 */
class Article extends Model
{

  protected static $table = 'articles';

  //public $id; - уже объявлено в модели
  public $content;
  public $title;
  public $thumbnail;
  public $author_id;

  /**
   * Получаем Название записи блога
   *
   * @return mixed
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Получаем текст поста
   *
   * @return mixed
   */
  public function getContent()
  {
    return $this->content;
  }
}