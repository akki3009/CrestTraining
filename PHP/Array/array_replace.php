<?php
$a1=array("red","green");
$a2=array("blue","yellow");
print_r(array_replace($a1,$a2));
?>

<?php
$a1=array("a"=>"red","b"=>"green");
$a2=array("a"=>"orange","burgundy");
print_r(array_replace($a1,$a2));
?>

<?php
$a1=array("a"=>"red","green");
$a2=array("a"=>"orange","b"=>"burgundy");
print_r(array_replace($a1,$a2));
?>

<?php
$a1=array("red","green");
$a2=array("blue","yellow");
$a3=array("orange","burgundy");
print_r(array_replace($a1,$a2,$a3));
?>

<?php
$a1=array("red","green","blue","yellow");
$a2=array(0=>"orange",3=>"burgundy");
print_r(array_replace($a1,$a2));
?>

<?php
// <!-- array_replace_recursive -->
$a1=array("a"=>array("red"),"b"=>array("green","blue"),);
$a2=array("a"=>array("yellow"),"b"=>array("black"));
print_r(array_replace_recursive($a1,$a2));
?>

<?php
$a1=array("a"=>array("red"),"b"=>array("green","blue"));
$a2=array("a"=>array("yellow"),"b"=>array("black"));
$a3=array("a"=>array("orange"),"b"=>array("burgundy"));
print_r(array_replace_recursive($a1,$a2,$a3));
?>