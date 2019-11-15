<?php

$names = $app['dataabse']->selectAll('users', 'string');

require 'views/submit.view.php';
