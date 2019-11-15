<?php

$query = require 'bootstrap.php';

require 'class.Task.php';


$tasks = $query->selectAll('todos', 'Task');

require 'index.view.php';
?>
