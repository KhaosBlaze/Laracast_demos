<?php

try {
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'NMHouGAtpRsrsuyim2FR');
} catch(PDException $e) {
	die('Could not connect.');
}

$statement = $pdo->prepare('select * from todos');

$statement-> execute();

var_dump($statement->fetchALL())

require 'index.view.php';
?>
