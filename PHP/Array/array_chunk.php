<?php
echo "<br>";
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,3));
?>

<?php
echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
print_r(array_chunk($age,2,true));

echo "<br>";
print_r(array_chunk($age,2));
?>