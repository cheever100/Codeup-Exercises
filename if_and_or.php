<?php
// TODO #1:
// If $x < $y < $z then echo "{$x} < {$y} < {$z}\n";
$x = 0;
$y = 5;
$z = 10;
if ($x < $y && $y < $z) {
	echo "{$x} "<" {$y} "<" {$z}\n";
}

// TODO #2:
// If 0 is less than $x OR $x is less than 10
// then echo the result as a sentence "0 is less than {$x} OR {$x} is less than 10".
$x = 0;
$y = 5;
$z = 10;
if (0 < $x || $x < 10) {
	echo "0 is less than {$x} OR 0 is less than 10";
}

// TODO #3 & #4:
// repeat the if statement for $y and $z.
$x = 0;
$y = 5;
$z = 10;
if (0 < $y || $y < 10) {
	echo "0 is less than {$y} OR 0 is less than 10";
}
$x = 0;
$y = 5;
$z = 10;
if (0 < $z || $z < 10) {
	echo "0 is less than {$z} OR 0 is less than 10";
}

// TODO #5:
// If 0 is less than $x AND $x is less than 10
// then echo the result as a sentence "0 is less than {$x} AND {$x} is less than 10".
$x = 0;
$y = 5;
$z = 10;
if ((0 < $x) && ($x < 10)) {
	echo "0 is less than {$x} AND {$x} is less than 10";
}

// TODO #6 & #7:
// repeat the if statement for $y and $z.
$x = 0;
$y = 5;
$z = 10;
if ((0 < $y) && ($y < 10)) {
	echo "0 is less than {$y} AND {$y} is less than 10";
}
$x = 0;
$y = 5;
$z = 10;
if ((0 < $z) && ($z< 10)) {
	echo "0 is less than {$z} AND {$z} is less than 10";
}