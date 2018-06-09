<?php 
 	
 	class Person {

 		public $name;

 		public function __construct($name)
 		{
 			$this -> name = $name;
 		}

 		public function setName($name)
 		{
 			if($name == ''){
 				throw new Exception("Name is not valid");
 			}
 			$this -> name = $name; 
 		}
 	}

 	$john = new Person('John Doe');
 	$john -> setName('');
	
