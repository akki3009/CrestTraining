<?php
echo "<h3>Pattern Program</h3><br>";

for($outer_no=5;$outer_no>=1;$outer_no--)
{
	for($inner_no=5;$inner_no>=$outer_no;$inner_no--)
	{
		echo "* ";
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
 -->

 