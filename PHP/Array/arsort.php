<?php
echo "<br>";
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Be"=>"45","Jo"=>"10");
arsort($age);

foreach($age as $x=>$x_value)
   {
   echo "Name=" . $x . ", Age=" . $x_value;
   echo "<br>";
   }
?>