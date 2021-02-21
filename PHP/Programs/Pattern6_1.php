<?php
echo "<h3>Pattern Program</h3><br>";
for($outer_astr=1;$outer_astr<=10;$outer_astr++)
{
	if($outer_astr<=5){
		for($inner_astr=1;$inner_astr<=$outer_astr;$inner_astr++){
			echo "* ";
		}
	}
	else{
		for($inner_astr=$outer_astr;$inner_astr<=10;$inner_astr++){
			echo "* ";
		}
	}
	echo "<br>";
}
?>

<!-- OUTPUT
*
* *
* * *
* * * *
* * * * *
* * * * *
* * * *
* * *
* *
*
 -->