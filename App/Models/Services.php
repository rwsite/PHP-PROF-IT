<?php

namespace App\Models;


use App\Model;

class Services extends Model implements HasPriceInterface
{
  protected static $table = 'services';


  public $description;
  public $period;

  use HasPriceTrait;

  public function __construct()
  {
  }

}