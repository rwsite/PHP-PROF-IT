<?php
/**
 *
 */

namespace App\Models;

/**
 * Trait HasPriceTrait
 * @package App\Models
 */
trait HasPriceTrait
{
  /**
   * @var - float. Цена товара или услуги
   */
  public $price;

  /**
   * Получим цену услуги
   *
   * @return float
   */
  public function getPrice(): float
  {
    return $this->price;
    // TODO: Implement getPrice() method.
  }


}