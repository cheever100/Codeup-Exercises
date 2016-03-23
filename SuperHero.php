<?php

require_once 'person.php';

class SuperHero extends Person
{
    public $pseudonym;
    public $capeColor;

// override parent's function
// By redefining fullName() we are overriding the inherited behavior.
    public function fullName()
    {
         return $this->pseudonym;
    }
    
    public function alterEgo()
    {
         return 'Top Secret Alternate Ego: ' . $this->fullName();
    }

    public function hasCape()
    {
        return !empty($this->capeColor);
    }

}
// We can override our parent's constructor, while using parent::
// to keep the functionality from the parent class. 
	// public function __construct($firstName, $lastName, $pseudonym)
	// {
	//     parent::__construct($firstName, $lastName);
	//     $this->pseudonym = $pseudonym;
	// }