<?php
function dd($variable){

			echo 'pre';
			die(var_dump($variable));
			echo 'pre';

}

function bouncer($age){
		//Bouncer function for Laracast 10
    if ($age >= 21){
      return 'Come on in!';
    } elseif ($age > 7) {
      return "You're too young kid";
    } else {
    	return "How did you get out of your crib";
    }
}

function connectToDb(){

	try {
		return $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'NMHouGAtpRsrsuyim2FR');
	} catch(PDException $e) {
		die($e->getMessage());
	}
}
