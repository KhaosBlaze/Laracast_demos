<?php

try {
	$pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'NMHouGAtpRsrsuyim2FR');
} catch(PDException $e) {
	die($e->getMessage());
}

$statement = $pdo->prepare('select * from todos');

$statement-> execute();

$tasks = $statement->fetchALL(PDO::FETCH_OBJ);

require 'index.view.php';
?>
