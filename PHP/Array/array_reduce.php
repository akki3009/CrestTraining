<?php
echo "<br>";

function myfunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction"));
?>

<?php
echo "<br>";
echo "<br>";

function myfunction1($v1,$v2)
{
return $v1 . "-" . $v2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction1",5));
?>

<?php
echo "<br>";
echo "<br>";
function myfunction2($v1,$v2)
{
return $v1+$v2;
}
$a=array(10,15,20);
print_r(array_reduce($a,"myfunction2",5));
?>