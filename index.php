<?php

require 'functions.php';

// Todo Application

//

// Todo, Comment, User


class Task {

	protected $description
	protected $completed = false;

	public function __construct($description)
	{
			//Automatically Trigger on instantiation
			$this->description = $description;
	}

}

$task = new Task('Go to the store');

require 'index.view.php';

?>
