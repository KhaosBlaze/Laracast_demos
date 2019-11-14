<?php

$animals = ['dog','cat'];

function dd($variable){

			echo 'pre';
			die(var_dump($variable));
			echo 'pre';

}

dd($animals)

// echo '<pre>';
// die (var_dump($animals));
// echo '</pre>';

require 'index.view.php';

?>
