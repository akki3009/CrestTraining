<br>
<?php 
$str = "Hello"; 
echo "The string: ".$str."<br>"; 
echo "TRUE - Raw 20 character binary format: ".sha1($str, TRUE)."<br>"; 
echo "FALSE - 40 character hex number: ".sha1($str)."<br>"; 
?>

<br>
<!-- sha1 file -->
<?php
$filename = "test.txt";
$sha1file = sha1_file($filename);
echo $sha1file;
?>