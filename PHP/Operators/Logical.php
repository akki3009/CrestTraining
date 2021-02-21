<?php
echo "<br>";
echo "<br>";
$x = 100;  
$y = 50;
// AND True if $x AND $y is true
if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
if ($x == 100 and $y == 40) {
    echo "Hello world!";
}
else{
	echo "Both Value are not as assign";
}

echo "<br>";
echo "<br>";
$x = 100;  
$y = 50;
// OR True if either $x or $y is true
if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
if ($x == 50 or $y == 50) {
    echo "Hello world!";
}

echo "<br>";
echo "<br>";
$x = 100;  
$y = 50;
// XOR True if either $x or $y is true, but not both
if ($x == 100 xor $y == 50) {
    echo "Hello world!";
}
else{
	echo "Not Possible";
}

echo "<br>";
echo "<br>";
$x = 100;  
$y = 50;
// && True if both $x and $y are true
if ($x == 100 && $y == 50) {
    echo "Hello world!";
}

echo "<br>";
echo "<br>";
$x = 100;  
$y = 50;
// || True if either $x or $y is true
if ($x == 100 || $y == 50) {
    echo "Hello world!";
}

echo "<br>";
echo "<br>";
$x = 100; 
// || 	True if $x is not true
if ($x !== 10) {
    echo "Hello world!";
}
?>