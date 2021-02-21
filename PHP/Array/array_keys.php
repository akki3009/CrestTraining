<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
print_r(array_keys($a));
?>

<?php
$a=array(10,20,30,"10");
print_r(array_keys($a,"10",false));
?>

<?php
$a=array(10,20,30,"10");
print_r(array_keys($a,"10",true));
?>