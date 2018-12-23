<?php

namespace App;

/**
 * Interface HasMagicInterface
 */
interface HasMagicInterface
{
  /**
   * @param $name
   * @param $value
   * @return mixed
   */
  public function __set($name, $value);

  /**
   * @param $name
   * @return mixed
   */
  public function __get($name);

  /**
   * @param $name
   * @return mixed
   */
  public function __isset($name);

}