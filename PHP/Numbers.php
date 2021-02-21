<!-- Check if the type of a variable is integer: -->
<?php
echo "<br>";
$x = 5985;
var_dump(is_int($x));
echo "<br>";
$x = 59.85;
var_dump(is_int($x));
echo "<br>";
?>

<!-- Check if the type of a variable is float: -->
<?php
$x=153.35; 	
var_dump(is_float($x));
echo "<br>";

$x=5.56E-5; 	
var_dump(is_float($x));
echo "<br>";
?>

<!-- Check if a numeric value is finite or infinite: -->
<?php
$x = 1.9e411;
var_dump($x);
echo "<br>";
?>

<!-- Invalid calculation will return a NaN value: -->
<?php
$x = acos(8);
var_dump($x);
echo "<br";
echo "<br>";
echo "<br>";
?>

<?php
// Check if the variable is numeric   
$x = 5985;
var_dump(is_numeric($x));
echo "<br>";
$x = "5985";
var_dump(is_numeric($x));
echo "<br>";
$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>";
$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";
?>

<!-- Cast float and string to integer: -->
<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>