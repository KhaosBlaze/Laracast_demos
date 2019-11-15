<?php

require 'class.Task.php';
require 'functions.php';

$pdo = connectToDb();

$statement = $pdo->prepare('select * from todos');

$statement-> execute();

$tasks = $statement->fetchALL(PDO::FETCH_CLASS, 'Task');

require 'index.view.php';
?>
