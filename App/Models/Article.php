<?php

namespace App\Models;


use App\Model;

class Article extends Model
{

  protected static $table = 'articles';

  //public $id; - уже объявлено в модели
  public $content;
  public $title;
  public $thumbnail;

  /**
   * @return mixed
   */
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * @return mixed
   */
  public function getContent()
  {
    return $this->content;
  }
}