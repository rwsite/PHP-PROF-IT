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
   * Article constructor.
   *
   * @param string $title - Название записи
   * @param string $content - Текст записи
   * @param string $thumbnail - url изображения записи
   * @param int $author_id - id автора записи
   * public function __construct( string $title , string $content, string $thumbnail , int $author_id )
   * {
   * $this->title = $title ?? $this->title;
   * $this->content = $content ?? $this->content;
   * $this->thumbnail = $thumbnail ?? $this->thumbnail;
   * $this->author_id = $author_id ?? $this->author_id;
   * }
   */


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