<?php
// read in the statues.csv file
// write an array of associative arrays where each states's abbreaviations as a
 //key
 // output should look like
// $states = [
// [AL => Alabama],
// [AK => Alaska],
// etc....
// ]; 

echo "Please input a filename \n";

// set the filename
$filename = 'states.csv';

// ope the file, 'r' means for reading only
$handle = fopen($filename, 'r');

// read contents from the handle to the end of the file
// contents come i as a single string
$contentString = fread($handle, filesize($filename));
$contentString = trim($contentString);
// we need to close the file
fclose($handle);

// convert the single string into an array of strings 
$arrayOfStrings = explode(PHP_EOL, $contentString);

$arrayOfStates = [];

foreach($arrayOfStrings as $string) {
	$stateAssociativeArray = [];
	
	$stateInfo = explode(",", $string);

	// $stateInfo[0] is the abbreviation as string
	// $stateInfo[1]is the state name as string
	$abbreviation = $stateInfo[0];
	$stateName = $stateInfo[1];

	$stateAssociativeArray[$abbreviation] = $stateName;
	
	$arrayOfStates[] = $stateAssociativeArray;

	print_r($stateAssociativeArray);
}

var_dump($arrayOfStates);






