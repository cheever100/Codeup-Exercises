<?php

// Log to a file named log-YYYY-MM-DD.log where the Y, M, and D values are the 4-digit year, 2-digit month, and 2-digit day that the log is taking place.
// If the log file for a given day does not yet exist, it should be created. If it already exists, it should be appended to.
// Newer logs should appear at the end of the log file.
// Log entries should match the format:

function logMessage($logLevel, $message) {
    // todo - complete this function
}

logMessage("INFO", "This is an info message.");
logMessage("ERROR", "This is an info message.");


$newCities = ['Changhua County, Taiwan', 'Hamina, Finland', 'St Ghislain, Belgium', 'Dublin, Ireland'];

$filename = 'txt/cities.txt';
$handle = fopen($filename, 'a');
foreach ($newCities as $city) {
    fwrite($handle, PHP_EOL . $city);
}
fclose($handle);

$filename = 'log-YYYY-MM-DD.log';
