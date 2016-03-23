<?php
// THIS IS THE PARENT


class Rectangle

{
    public $height;
    public $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width  = $width;
    }

// add a method named area() that returns the area based on the height and width.

    public function area()
    {
        return $this->height * $this->width;
    }

// add a method named perimeter() that returns the perimeter

    public function perimeter()
    {
        return $this->height * 2 + $this->width * 2;
    }
}