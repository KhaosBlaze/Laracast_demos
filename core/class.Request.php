<?php

class Request
{

  public static function uri()
  {
    $config = require 'config.php';

    return trim(
      str_replace(
        $config['directory']."/",
        '',
        parse_url($_SERVER['REQUEST_URI'],
          PHP_URL_PATH)
        ),
      '/');
  }
}
