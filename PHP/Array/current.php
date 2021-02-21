<?php
echo "<br>";
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>";
echo "<br>";

?>


<?php
$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . "<br>"; 
echo next($people) . "<br>";
echo current($people) . "<br>";
echo prev($people) . "<br>";
echo end($people) . "<br>";
echo prev($people) . "<br>";
echo current($people) . "<br>";
echo reset($people) . "<br>";
echo next($people) . "<br>";
echo end($people) . "<br>";

print_r (each($people)); 
?>