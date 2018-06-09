<?php
	
	namespace Acme;

	class Task {

		public $description;
		public $title;
		public $completed = false;

		public function __construct($description, $title)
		{
			$this -> description = $description;
			$this -> title = $title;
		}

		public function complete(){
			$this -> completed = true;
		}
	}

	