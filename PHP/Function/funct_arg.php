<?php
echo "<br>";
function familyName($fname) {
  echo "Hello $fname friend.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>

<?php
echo "<br>";
echo "<br>";
echo "<br>";
function familyName1($fname, $year) {
  echo "$fname Refsnes. Born in $year <br>";
}

familyName1("Hege", "1975");
familyName1("Stale", "1978");
familyName1("Kai Jim", "1983");
?>