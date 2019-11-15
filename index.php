<?php

$query = require 'core/bootstrap.php';


$uri = trim(str_replace('Laracast/', '', $_SERVER['REQUEST_URI']), '/');

require Router::load('routes.php')
	->direct($uri);

?>
