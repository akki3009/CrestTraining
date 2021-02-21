<br>
<?php

$number = 9;
$str = "Beijing";
$file = fopen("test.txt","w");
echo vfprintf($file,"There are %u million bicycles in %s.",array($number,$str));
?>

<?php
$num1 = 123;
$num2 = 456;
$file = fopen("test.txt","w");
vfprintf($file,"%f%f",array($num1,$num2));
?>

<!-- vprintf -->
<br>
<?php
$num1 = 123;
$num2 = 456;
vprintf("%f%f",array($num1,$num2));
?>

<!-- vsprintf -->
<br>
<?php
$number = 9;
$str = "Beijing";
$txt = vsprintf("There are %u million bicycles in %s.",array($number,$str));
echo $txt;
?>