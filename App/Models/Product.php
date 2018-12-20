<?php

namespace App\Models;

use App\Model;

/**
 * Class Product
 * @package App\Models
 */
class Product extends Model implements HasPriceInterface
{
  /**
   * @var string - Table name
   */
  protected static $table = 'products';

  use HasPriceTrait; // price + price func

  public $name;
  public $weight;
  public $description;
  public $thumbnail;

  /**
   * Product constructor.
   * @param string $name
   * @param float $price
   * @param float $weight
   * @param string $description
   * @param string $thumbnail
   */
  public function __construct( string $name, float $price, float $weight, string $description, string $thumbnail)
  {
    $this->name = $name;
    $this->price = $price;
    $this->weight = $weight;
    $this->description = $description;
    $this->thumbnail = $thumbnail;
  }

}