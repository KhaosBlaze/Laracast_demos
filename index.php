<?php



$query = require 'bootstrap.php';

require 'functions.php';


$tasks = $query->selectAll('todos');

dd($tasks);

require 'index.view.php';
?>
