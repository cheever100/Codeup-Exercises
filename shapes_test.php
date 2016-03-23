<?php

require_once 'rectangle.php';
require_once 'square.php';

// create an instance of Rectangle with various heights and widths

// $rectangle = new Rectangle(10, 20);
// echo $rectangle->area() .PHP_EOL;

// $rectangle1 = new Rectangle(9, 3);
// echo $rectangle1->area() .PHP_EOL;

// $rectangle2 = new Rectangle(4, 7);
// echo $rectangle2->area() .PHP_EOL;

// creating an instance of Square with various matching height and width.
    
	$square = new Square(5);
	echo $square->perimeter() . 'test square perimeter' .PHP_EOL;

// test the methods in both your Square class and your Rectangle class.

	$square1 = new Square (6);
	echo $square1->area() . 'test square' .PHP_EOL;

