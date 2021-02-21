<?php
$a1=array("red","green");
$a2=array("blue","yellow","green");
print_r(array_merge($a1,$a2));
?>

<?php
$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge($a1,$a2));
?>

<?php
$a=array(3=>"red",4=>"green");
print_r(array_merge($a));
?>