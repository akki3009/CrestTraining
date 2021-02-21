<?php
echo "<h3>Pattern Program</h3><br>";  
$number=1;
for ($i=1; $i<=5; $i++)  
{  
 for ($j=1; $j<=$i; $j++)  
  {  
   echo $number . " ";
   $number++;  
  }  
   echo "</br>";  
}  
?>  

<!-- OUTPUT
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15
 -->