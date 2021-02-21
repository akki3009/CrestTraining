<!DOCTYPE html>
<html>
<head>
	<title>Factorial Number</title>
</head>
<body>
	<form method="POST">
		FactNo:
		<input type="number" name="number1"><br>
		<input type="submit" name="submit" value="Factorail Find"><br><br>
	</form>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
	$factNo=$_POST['number1'];
	$fact=1;
	for($number=1;$number<=$factNo;$number++)
	{
		$fact=$fact*$number;
	}
echo "Factorial number is:".$fact;
}
?>