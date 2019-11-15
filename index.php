<?php

$query = require 'bootstrap.php';

require 'class.Task.php';
require 'functions.php';


$tasks = $query->selectAll('todos', 'Task');

dd($tasks);

require 'index.view.php';
?>
