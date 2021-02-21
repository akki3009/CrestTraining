<?php
echo "<h3>Pattern Program</h3><br>";

for($outer_no=1;$outer_no<=5;$outer_no++)
{
	$number=1;
	for($inner_no=$outer_no;$inner_no<=5;$inner_no++)
	{
		echo $number." ";
		$number++;
	}
	echo "<br>";
}


for($outer_no=5;$outer_no>1;$outer_no--)
{
	for($inner_no1=1;$inner_no1<=$outer_no;$inner_no1++)
	{
		echo $inner_no1;
	}
	echo "<br>";
}
?>

<!-- OUTPUT
1 2 3 4 5
1 2 3 4
1 2 3
1 2
1
 -->