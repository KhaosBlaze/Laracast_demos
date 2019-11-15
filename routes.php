<?php

$router->define([
	'' => 'controllers/index.php',
	'about' => 'controllers/about.php',
	'about/culture' => 'controllers/about-culture.php',
	'contact'=> 'controllers/contact.php',
	'submit' => 'controllers/submit.php',
	'names' => 'controllers/add-name.php'
]);
