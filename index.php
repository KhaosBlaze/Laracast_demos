<?php 

$task = [
	'title' => 'Finish Homework',
	'due' => 'today',
	'assigned_to' => 'Charles',
	'completed' => htmlspecialchars($_GET['comp'])
];


require 'index.view.php';

?>
