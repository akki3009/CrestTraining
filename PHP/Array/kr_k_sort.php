<?php
echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
krsort($age);
foreach ($age as $key => $value) {
	echo "Name :" .$key .", Value :".$value;
	echo "<br>";
}
?>
<br>
<?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
ksort($age);

foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>