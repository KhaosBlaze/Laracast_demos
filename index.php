<?php

try {
new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root', 'NMHouGAtpRsrsuyim2FR');
} catch(PDException $e) {
	die('Could not connect.');
}

require 'index.view.php';
?>
