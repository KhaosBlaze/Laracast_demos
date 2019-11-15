<?php

class Request
{

  public static function uri()
  {
    $config = require 'config.php';
    return trim(str_replace($config['directory']."/", '', $_SERVER['REQUEST_URI']), '/');
  }
}
