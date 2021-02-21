<?php
echo "<h3>Pattern Program</h3><br>";  
for ($i=1; $i<=5; $i++)  
{  
	for ($j=5; $j>$i; $j--)  
	{  
		echo "&nbsp";
	}  
	for($k=1;$k <=$i;$k++)
	{
		echo "* ";
	}
	echo "</br>";  
}  
?>  

<!-- OUTPUT
	*
   * *
  * * *
 * * * *
* * * * *
 -->