<?php
function print_pattern($num)
{
	for ($i = $num; $i > 0; $i--)
	{
		for($k = $i; $k < $num; $k++ )
		{
			echo " ";
		}
		for($j = 0; $j < $i; $j++ )
		{
			echo "* ";
		}
		echo "\n";
	}
}
$num = 5;
print_pattern($num);
?>