<?php
  echo "<br>";
$cars=array("Volvo","BMW","Toyota");
rsort($cars);

$clength=count($cars);
for($x=0;$x<$clength;$x++)
  {
  echo $cars[$x];
  echo "<br>";
  }
?>

<?php
$numbers=array(4,6,2,22,11);
rsort($numbers,SORT_NUMERIC);
$arrlength=count($numbers);
for($x=0;$x<$arrlength;$x++)
  {
  echo $numbers[$x];
  echo "<br>";
  }
?>