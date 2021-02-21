<?php  
echo "<h3>Pattern Program</h3><br>";
$alpha = range('A', 'Z');  
for($i=0; $i<5; $i++){   
  for($j=5; $j>$i; $j--){  
    echo $alpha[$i];  
    }  
    echo "<br>";  
}  
?> 


<!-- OUTPUT
5
5 4
5 4 3
5 4 3 2
5 4 3 2 1
 -->