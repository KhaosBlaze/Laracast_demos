<?php

require 'functions.php';

class Task {

	public $description;
	protected $completed = false;

	public function __construct($description)
	{
			//Automatically Trigger on instantiation
			$this->description = $description;
	}

	public function complete()
	{
		$this->completed = true;
	}

	public function isComplete()
	{
			return $this->completed;
	}
}

$tasks = [
		new Task('Go to the store'),
		new Task('Finish Laracast vids'),
		new task('Clean my room')
];

$tasks[0]->complete();

require 'index.view.php';

?>
