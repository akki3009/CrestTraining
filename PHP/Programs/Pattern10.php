<!-- <?php
echo "<h3>Pattern Program</h3><br>";
for($outer_astr=1;$outer_astr<=10;$outer_astr+=2)
{
	if($outer_astr<=5){
		for($inner_astr=1;$inner_astr<=$outer_astr;$inner_astr++){
			echo "* ";
		}
	}
	else{
		$outer_astr++;
		for($inner_astr=$outer_astr;$inner_astr<=10	;$inner_astr++){
			echo "* ";
		}
	}
	echo "<br>";
}
?> -->

<!-- OUTPUT
*
* * *
* * * * *
* * *
 -->

 <?php
 echo "<h3>Pattern Program</h3><br>";  
for($i=5; $i>=1; $i--)  
{  
if($i%2 != 0)  
{  
for($j=5; $j>=$i; $j--)  
{  
echo "* ";  
}  
echo "<br>";  
}  
}  
for($i=2; $i<=5; $i++)  
{  
 if($i%2 != 0)  
{  
 for($j=5; $j>=$i; $j--)  
{
echo "* ";  
}  
echo "<br>";  
}  
}  
?>

<!-- OUTPUT
*
* * *
* * * * *
* * *
*
 -->