<?php
echo "<h3>Pattern Program</h3><br>";
for($outer_astr=1;$outer_astr<=5;$outer_astr++)
{
	for($inner_astr=5;$inner_astr>=$outer_astr;$inner_astr--)
	{
		echo "* ";
	}
	echo "<br>";
}
?>

<!-- OUTPUT
* * * * *
* * * *
* * *
* *
*
 -->