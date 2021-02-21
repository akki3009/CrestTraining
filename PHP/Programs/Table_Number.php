<!DOCTYPE html>
<html>
<body>
	<form method="POST">
		<table border="1">
			<tr>
				<td>Enter Number:</td>
				<td><input type="text" name="number"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="submit" value="Find Table"></td>
			</tr>
		</table>
	<br><br>
</form>
<?php
if(isset($_POST['submit']))
{
	$number=$_POST['number'];
	for($i=1;$i<=10;$i++)
	{
		$value=$number * $i ;
		echo "$number * $i = $value<br>";
	}
}
?>
</body>
</html>