<?php


require 'class.Task.php'
$query = require 'bootstrap.php';

require 'functions.php';


$tasks = $query->selectAll('todos', 'Task');

require 'index.view.php';
?>
