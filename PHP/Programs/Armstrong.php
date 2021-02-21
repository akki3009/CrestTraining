<!DOCTYPE html>
<html>
<body>
<form method="post">
	<table border="1">
		<tr>
			<td>Enter Number:</td>
			<td><input type="text" name="number"></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Find Armstrong"></td>
		</tr>
	</table>
	<br><br>
</form>
<?php
if(isset($_POST['submit']))
{  
// $num=407;  
	$num=$_POST['number'];
	$total=0;  
	$x=$num;  
	while($x!=0)  
	{  
		$rem=$x%10;  
		$total=$total+$rem*$rem*$rem;  
		$x=$x/10;  
	}  
	if($num==$total)  
	{  
		echo "<b>Yes it is an Armstrong number</b>";  
	}  
	else  
	{  
		echo "<b>No it is not an armstrong number</b>";  
	}
}  
?> 
</body>
</html>