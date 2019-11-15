<?php

require 'class.Task.php';
require 'functions.php';

$pdo = connectToDb();

$tasks = fetchAllTasks($pdo)

require 'index.view.php';
?>
