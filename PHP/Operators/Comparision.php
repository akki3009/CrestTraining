<?php
echo "<br>";
$x = 100;  
$y = "100";

var_dump($x == $y);

echo "<br>";
$x = 100;  
$y = "100";

var_dump($x === $y);

echo "<br>";
$x = 100;  
$y = "100";

var_dump($x != $y);

echo "<br>";
$x = 100;  
$y = "200";

var_dump($x <> $y);

echo "<br>";
$x = 100;  
$y = "100";

var_dump($x !== $y);

echo "<br>";
$x = 100;  
$y = "100";

var_dump($x > $y);

echo "<br>";
$x = 100;  
$y = "100";

var_dump($x < $y);

echo "<br>";
$x = 300;  
$y = "200";

var_dump($x >= $y);

echo "<br>";
$x = 200;  
$y = "300";

var_dump($x <= $y);


$x = 5;  
$y = 10;
echo "<br>";
echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
?>  