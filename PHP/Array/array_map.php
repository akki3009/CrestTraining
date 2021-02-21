<?php
function myfunction($v)
{
  return($v*$v);
}

$a=array(1,2,3,4,5);
print_r(array_map("myfunction",$a));
?>

<?php
function myfunction1($v)
{
if ($v==="Dog")
  {
  return "Fido";
  }
return $v;
}

$a=array("Horse","Dog","Cat");
print_r(array_map("myfunction1",$a));
?>

<?php
function myfunction2($v)
{
$v=strtoupper($v);
  return $v;
}

$a=array("Animal" => "horse", "Type" => "mammal");
print_r(array_map("myfunction2",$a));
?>