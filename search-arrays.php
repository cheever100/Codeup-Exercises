<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// Create a function that returns TRUE or FALSE if an array value is found. CORRECT!

// $result = is_array($names);
// var_dump($result);

// Search for Tina in the array CORRECT!

// $result = array_search('Tina', $names);
// var_dump($result);

// Search for Bob in the array CORRECT!

// $result = array_search('Bob', $names);
// var_dump($result);

/* Create a function to compare 2 arrays that returns 
 * the number of values in common between the arrays.
 */
$counter = 0;
foreach($names as $name) {//begin
	$result = array_search($name, $compare);
		if ($result !== false) {
		$counter++;		
		}
}//ends

var_dump($counter);
