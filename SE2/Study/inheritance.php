<?php 

	abstract class Shape {

		abstract public function getArea();
	}

	class Circle extends Shape {

		public function getArea(){
			return 'mee';
		}
	}

	$circle = new Circle();