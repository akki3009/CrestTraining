<?php
echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
foreach($age as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>