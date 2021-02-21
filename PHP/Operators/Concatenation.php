<?php
echo "<br>";
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;

echo "<br>";
echo "<br>";
$txt1 = "Hello";
$txt2 = " world!";
$txt3 = " Good";
$txt4 = " Morning";
echo $txt1 . $txt2 . $txt3 . $txt4;

echo "<br>";
echo "<br>";
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2 . $txt3;
echo $txt1;

echo "<br>";
echo "<br>";
$txt1 = "Hello";
$txt3 = " world!";
$txt1 .= $txt3 . $txt4;
echo $txt1;
?>