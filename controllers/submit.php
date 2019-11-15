<?php

$names = $app['database']->selectAll('users');

require 'views/submit.view.php';
