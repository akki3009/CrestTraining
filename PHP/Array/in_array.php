<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

if (in_array("Glenn", $people))
  {
  echo "Match found";
  }
else
  {
  echo "Match not found";
  }
?>

<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland", 23);

if (in_array("23", $people, TRUE))
  {
  echo "Match found<br>";
  }
else
  {
  echo "Match not found<br>";
  }
?>