<?php

namespace App\Models;


use App\Model;

/**
 * Class Service
 * @package App\Models
 */
class Service extends Model implements HasPriceInterface
{

  /**
   * @var string - Table name
   */
  protected static $table = 'services';

  public $description;
  public $period;

  use HasPriceTrait;

  public function __construct()
  {

  }

}