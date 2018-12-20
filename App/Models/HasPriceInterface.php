<?php
/**
 * Интерфейс - обязательство класса имень ПУБЛИЧНЫЙ метод.
 */

namespace App\Models;

/**
 * Interface HasPriceInterface
 * @package App\Models
 */
interface HasPriceInterface
{
  public function getPrice();
}