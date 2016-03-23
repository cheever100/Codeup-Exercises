<?php

require_once 'person.php';
require_once 'SuperHero.php';

// person (parent)
$person = new Person('John', 'Doe');
echo $person->fullName() .PHP_EOL; // "John Doe"

// superhero (child)
$superman = new SuperHero('Clark', 'Kent');
$superman->pseudonym = 'Superman';
// echo $superman->alterEgo() .PHP_EOL;
echo $superman->fullName() .PHP_EOL;

// cape color
$superman->capeColor = 'red';
var_dump($superman->hasCape()) .PHP_EOL; // "bool(true)"





// overriding parent:
// $superman = new Superhero('Clark', 'Kent', 'Superman');
// echo $superman->fullName();
// echo $superman->alterEgo();

