<?php

$query = require 'core/bootstrap.php';

$router = new Router;

require 'routes.php';

$uri = trim(str_replace('Laracast/', '', $_SERVER['REQUEST_URI']), '/');

die(var_dump($uri))

require $router->direct($uri);


?>
