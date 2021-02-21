<?php
// echo "<h3>Pattern Program</h3><br>";
for ($i = 1; $i <= 5; $i++)
{
	for($k = 5; $k > $i; $k-- )
	{
		echo "  ";
	}
	for($j = 1; $j <= $i; $j++ )
	{
		echo chr(64+$j)." ";
	}
	for($j = $i-1; $j >= 1; $j-- )
	{
		echo chr(64+$j)." ";
	}
echo "\n";
}
?>

