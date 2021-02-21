<!DOCTYPE html>
<html>
<head>
	<title>Odd Even</title>
</head>
<body>
	<form method="post">
		Enter Number:
		<input type="number" name="number">
		<input type="submit" name="submit" value="Find">
	</form>
</body>
</html>
<?php
if($_POST)
{
	$number=$_POST['number'];
	if(($number %2)==0)
	{
		echo "$number is Even Number";
	}
	else
	{
		echo "$number is Odd Number";
	}
}
?>