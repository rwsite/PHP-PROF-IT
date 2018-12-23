<?php

namespace App\Views;

use App\HasMagicInterface;
use App\HasMagicTrait;

/**
 * Class View - Подключение шаблонов вывода
 *
 * @package App\Views
 */
class View implements HasMagicInterface
{

  use HasMagicTrait;

  /**
   * @deprecated
   * @param string $name
   * @param $value
   */
  public function assign(string $name, $value)
  {
    $this->data[$name] = $value;
  }

  /**
   * Функция подключает шаблоны и записывает поток вывода в переменную для дальнейшего использования
   *
   * @param string $template
   * @return string
   */
  public function render(string $template)
  {
    foreach ($this->data as $key => $value) {
      /** переменная, чье имя содержится в переменной $key */
      $$key = $value;
    }

    ob_start();
    include $template;
    $content = ob_get_contents();
    ob_end_clean();

    return $content;
  }

  /**
   * Подключаем шаблон
   *
   * @param $template - имя шаблона
   */
  public function display(string $template)
  {
    // $this->data[]
    foreach ($this->data as $key => $value) {
      $$key = $value;
    }
    include $template;
  }

}