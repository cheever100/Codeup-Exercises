<?php
// THIS IS THE CHILD
require_once 'rectangle.php';

class Square extends Rectangle

{
// Step #2: Override the parent's constructor; only accept one attribute (height) 
// and use that to set both $width and $height in your class.

	public function __construct($height)
    {
         parent::__construct($height,$height);
    }

// Step #3: Update the constructor to pass height on to the parent's constructor.

    

// Step #4: Add an area() method. 
    
    public function area()
	{
        return $this->height * $this->width;
    }

// Ensure that this is a square (all sides equal)
	public function __construct($side)
	{
	 	parent::__construct($side, $side);
	}

// create a method named perimeter that returns the perimeter of the square
    public function perimeter()
    {
        return $this->height * 4;
    }
}

