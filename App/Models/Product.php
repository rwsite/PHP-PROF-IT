<?php

namespace App\Models;

use App\Model;

class Product extends Model implements HasPriceInterface
{

  protected static $table = 'products';

  use HasPriceTrait; // price

  public $name;
  public $weight;
  public $description;
  public $thumbnail;

  public function __construct($name = null, $price = null, $weight = null, $description = null, $thumbnail = null)
  {
    $this->name = $name ?? $this->name;
    $this->price = $price ?? $this->price;
    $this->weight = $weight ?? $this->weight;
    $this->description = $description ?? $this->description;
    $this->thumbnail = $thumbnail ?? $this->thumbnail;
  }

}