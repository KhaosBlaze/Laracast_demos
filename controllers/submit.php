<?php

$names = $app['database']->selectAll('names');

require 'views/submit.view.php';
