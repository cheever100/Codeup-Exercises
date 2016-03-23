<?php





// take in two array values as parameters 
// return a new array with values from both
// If the arrays have the same value at the same index, then it should only be added once.
// If the values differ, then the value from the first array should be added and then the second.
// array_shift(), array_unshift(), array_push(), and array_pop().

// FIRST TRY
// 	$combinedArray = $compare;
	
// 	foreach($names as $name) {
// 		$result = array_search($name, $compare);
//  		if ($result === false) {
// 			array_unshift($combinedArray, $name);		
//  		}
//  	}
// 	var_dump($combinedArray);

// SECOND TRY

	// $names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

	// $compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
	
	// $combinedArray = [];

	// foreach($names as $name) {
	// 	if($names[$name] == $compare[$names]) {
	// 		$combinedArray[] = $names[$name];
	// 		} elseif ($names[$name] != $compare[$names]){
	// 		array_unshift($combinedArray, $names[$name]);
	// 		array_unshift($combinedArray, $compare[$name]);
	// 	}
	// }
	
	// var_dump($combinedArray);

// CORRECT ANSWER
$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
	
// make a fuction that takes two arrays and returns a combined array
function mergeArrays($firstArray, $secondArray){
	$combinedArray = [];

	foreach($firstArray as $key => $value) {
		if($firstArray[$key] == $secondArray[$key]) {
			$combinedArray[] = array_shift($firstArray);
			$array_shift($secondArray);
		} else {
			$combinedArray[] = $firstArray[$key];
			$combinedArray[] = $secondArray[$key];
		}
	}

	return $combinedArray;
}
$result = mergeArrays($names, $compare);

print_r($result);


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
// $counter = 0;
// foreach($names as $name) {//begin
// 	$result = array_search($name, $compare);
// 		if ($result !== false) {
// 		$counter++;		
// 		}
// }//ends

// var_dump($counter);
