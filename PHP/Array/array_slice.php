<?php
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,3));
?>

<?php
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,1,2));
?>

<?php
$a=array("red","green","blue","yellow","brown");
print_r(array_slice($a,-2,2));
?>

<?php
$a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
print_r(array_slice($a,1,3));

$a=array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"brown");
print_r(array_slice($a,1,3));
?>