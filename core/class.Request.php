<?php

$cofig = require 'config.php';

class Request
{

  public static function uri()
  {
    return trim(str_replace($config['directory']."/", '', $_SERVER['REQUEST_URI']), '/');
  }
}
