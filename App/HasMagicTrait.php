<?php
/**
 * Трейт для использования магических методов
 */

namespace App;

/**
 * Trait HasMagicTrait
 * @package App
 */
trait HasMagicTrait
{

  protected $data = [];

  /**
   * Setter - позволяет устанавливать любые свойства объекта
   *
   * @param $name
   * @param $value
   */
  public function __set($name, $value)
  {
    $this->data[$name] = $value;
  }

  /**
   * Getter - позволяет получчать любые свойства объекта, заданные через Setter.
   *
   * @param $name
   * @return mixed|null
   */
  public function __get($name)
  {
    return $this->data[$name] ?? null;
  }

  /**
   * Магический метод позволяющий делать проверкау существования свойст объекта, Заданных через setter.
   *
   * @param $name
   * @return bool
   */
  public function __isset($name)
  {
    // TODO: Implement __isset() method.
    return isset($this->data[$name]);
  }
}