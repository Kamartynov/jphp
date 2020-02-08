--TEST--
Test gmstrftime() function : usage variation - Checking date related formats which was not supported on Windows before VC14.
--FILE--
<?php
/* Prototype  : string gmstrftime(string format [, int timestamp])
 * Description: Format a GMT/UCT time/date according to locale settings
 * Source code: ext/date/php_date.c
 * Alias to functions:
 */

echo "*** Testing gmstrftime() : usage variation ***\n";

// Initialise function arguments not being substituted (if any)
$timestamp = gmmktime(8, 8, 8, 8, 8, 2008);
date_default_timezone_set("Asia/Calcutta");

//array of values to iterate over
$inputs = array(
	  'Century number' => "%C",
	  'Month Date Year' => "%D",
	  'Year with century' => "%G",
	  'Year without century' => "%g",
);

// loop through each element of the array for timestamp

foreach($inputs as $key =>$value) {
      echo "\n--$key--\n";
      var_dump( gmstrftime($value) );
      var_dump( gmstrftime($value, $timestamp) );
};

?>
===DONE===
--EXPECTF--
*** Testing gmstrftime() : usage variation ***

--Century number--
string(2) "%d"
string(2) "20"

--Month Date Year--
string(%d) "%02d/%02d/%02d"
string(8) "08/08/08"

--Year with century--
string(%d) "%d"
string(4) "2008"

--Year without century--
string(2) "%02d"
string(2) "08"
===DONE===