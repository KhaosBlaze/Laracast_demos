<?php

$tasks = $app['config']->selectAll('todos', 'Task');

require 'views/index.view.php';
