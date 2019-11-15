<?php

$query = require 'core/bootstrap.php';


$uri = trim(str_replace('Laracast/', '', $_SERVER['REQUEST_URI']), '/');

$router = Router::load('routes.php');
$router->direct($uri);

?>
