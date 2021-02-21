<br>
<?php
$str = "Hello World!\n\n";
echo $str;
echo "<br>";
echo chop($str);
echo "<br>";
echo "<br>";

?>

<?php
$str = "Hello World!";
echo $str . "<br>";
echo chop($str,"World!");
?>