<!DOCTYPE html>
<html>
<head>
	<title>Scope Program</title>
</head>
<body>
	<?php
	// Global Scope
		$x=5;
		function myTest(){
			echo "<p>Variable x inside function is: $x</p>";
		}
		myTest();
		echo "<p>Variable x outside function is: $x</p>";


	// Local Scope
		function myTest1() {
			$x = 5;
			echo "<p>Variable x inside function is: $x</p>";
		}
		myTest1();
		echo "<p>Variable x outside function is: $x</p>";
		?>
	<!-- Global Keyword -->
	<?php
		$x = 5;
		$y = 10;

		function myTest2() {
		  global $x, $y;
		  $y = $x + $y;
		}
		myTest2();
		echo $y."<br>";
	?>
	<?php
		$x = 5;
		$y = 10;

		function myTst() {
		  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
		}
		myTst();
		echo $y;
?>

</body>
</html>