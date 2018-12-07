<?php

class AdminAction
{

  public function create()
  {

  }

  public function edit()
  {

  }

  public function save()
  {

  }

  public function delete()
  {

  }

  /**
   * @param string $action
   * @param string $type
   * @param int $method
   * @return mixed
   */
  public function validate($action = '', $type = '', $method = INPUT_GET)
  {
    $data = '';
    switch ($type) {
      case 'url':
        $data = filter_input($method, $action, FILTER_SANITIZE_ENCODED);
        break;
      case 'email':
        $data = filter_input($method, $action, FILTER_SANITIZE_EMAIL);
        break;
      case 'int':
        $data = filter_input($method, $action, FILTER_SANITIZE_NUMBER_INT);
        break;
      case 'html':
        $data = filter_input($method, $action, FILTER_SANITIZE_SPECIAL_CHARS);
        break;
    }
    return $data;
  }


  public function normalize($var)
  {

  }

}