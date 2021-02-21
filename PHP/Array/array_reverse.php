<?php
echo "<br>";

$a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
print_r(array_reverse($a));
?>

<?php
echo "<br>";

$a=array("Volvo","XC90",array("BMW","Toyota"));
$reverse=array_reverse($a);
$preserve=array_reverse($a,true);

print_r($a);
echo "<br>";
print_r($reverse);
echo "<br>";
print_r($preserve);
echo "<br>";
?>