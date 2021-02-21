<?php
echo "<h3>Pattern Program</h3><br>";  
for ($row=1; $row<=3; $row++)
{
	for($column=1;$column<=3;$column++)
	{
		echo $row * $column ." ";
	}
	echo "</br>";
}  
?>  

<!-- OUTPUT
1 2 3
2 4 6
3 6 9
 -->