<?php

class Connection{

  public static function make()
  {
    try {
  		return $pdo = new PDO('mysql:host=localhost;dbname=mytodo', 'root', 'NMHouGAtpRsrsuyim2FR');
  	} catch(PDException $e) {
  		die($e->getMessage());
  	}
  }
}
