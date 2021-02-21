<?php
echo "<br>";
// Prints the day
echo gmdate("l") . "<br>";

// Prints the day, date, month, year, time, AM or PM
echo gmdate("l jS \of F Y h:i:s A") . "<br>";

// Prints October 3, 1975 was on a Thursday
echo "Oct 3, 1975 was on a ".gmdate("l", mktime(0,0,0,10,3,1975)) . "<br>";

// Use a constant in the format parameter
echo gmdate(DATE_RFC822) . "<br>";

// prints something like: 1975-10-03T00:00:00+00:00
echo gmdate(DATE_ATOM,mktime(0,0,0,10,3,1975));
echo "<br>";
?>

<?php
// Prints: October 3, 1975 was on a Friday
echo "Oct 3, 1975 was on a ".date("l", gmmktime(0,0,0,10,3,1975));
?>