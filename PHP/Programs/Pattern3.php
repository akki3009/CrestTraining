<?php
echo "<h3>Pattern Program</h3><br>";

for($outer_no=5;$outer_no>=1;$outer_no--)
{
	for($inner_no=5;$inner_no>=$outer_no;$inner_no--)
	{
		echo $inner_no." ";
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

 