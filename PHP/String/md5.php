<br>
<?php
$str = "Hello";
echo "The string: ".$str."<br>";
echo "TRUE - Raw 16 character binary format: ".md5($str, TRUE)."<br>";
echo "FALSE - 32 character hex number: ".md5($str)."<br>";
?>

<br>
<?php
$filename = "test.txt";
$md5file = md5_file($filename);
echo $md5file;
?>