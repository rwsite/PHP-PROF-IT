<?php
/**
 *
 */

namespace App\Models;


trait HasPriceTrait
{

  public $price;

  public function getPrice(): float
  {
    return $this->price;
    // TODO: Implement getPrice() method.
  }


}