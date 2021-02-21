<?php
echo "<h3>Pattern Program</h3><br><br>";
for($outer_no=1;$outer_no<=4;$outer_no++)
{
	for($inner_no=$outer_no;$inner_no>=1;$inner_no--)
	{
		echo $inner_no." ";
	}
	echo "<br>";
}
?>

<!-- OUTPUT
1
2 1
3 2 1
4 3 2 1
 -->