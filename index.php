<?php

try {
	$pdo = new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'NMHouGAtpRsrsuyim2FR');
} catch(PDException $e) {
	die($e->getMessage());
}

$statement = $pdo->prepare('select * from todos');

$statement-> execute();

$tasks = $statement->fetchALL(PDO::FETCH_OBJ);

require 'index.view.php';
?>
