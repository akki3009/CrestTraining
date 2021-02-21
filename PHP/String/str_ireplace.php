<?php
echo str_ireplace("WORLD","Peter","Hello world!");
?>

<?php
$arr = array("blue","red","green","yellow");
print_r(str_ireplace("RED","pink",$arr,$i)); // This function is case-insensitive
echo "Replacements: $i";
?>

<?php
$find = array("HELLO","WORLD");
$replace = array("B");
$arr = array("Hello","world","!");
print_r(str_ireplace($find,$replace,$arr));
?>