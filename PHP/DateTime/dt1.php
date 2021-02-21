<!DOCTYPE html>
<html>
<body>

<?php
echo "<br>";
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l"). "<br><br>";

// Time is display
echo "The time is " . date("h:i:sa"). "<br><br>";
?>

&copy; 2010-<?php echo date('Y');?>

<!-- Create date with mktime -->
<?php
	echo "<br>";
	$d=mktime(28,12,10,5,31,20);
	echo "Created date is : ".date("Y-m-d h:i:sa",$d);

	// strtotime
	echo "<br>";
	$d=strtotime("10:30pm April 15 2014");
	echo "Created date is " . date("Y-m-d h:i:sa", $d);
	
	echo "<br>";
	$d=strtotime("next Saturday");
	echo date("Y-m-d h:i:sa", $d) . "<br>";
?>
</body>
</html>
