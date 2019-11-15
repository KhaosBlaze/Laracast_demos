<?php

$router->get('', 'controllers/index.php');
$router->get('', 'controllers/about.php');
$router->get('', 'controllers/about-culture.php');
$router->get('', 'controllers/contact.php');
$router->get('', 'controllers/submit.php');
$router->post('names', 'controllers/add-name.php');
