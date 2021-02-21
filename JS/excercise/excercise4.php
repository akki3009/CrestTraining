<!DOCTYPE html>
<html>
<head>
	<title>Sum of Numbers</title>
</head>
<body>
	<p id="sum"></p>
	<script type="text/javascript">
		var num1 = parseInt(prompt("EnterNumber1"));
		var num2 = parseInt(prompt("EnterNumber2"));
		var num3;
		if(num1 == num2)
		{
			num3= Math.pow(num1 + num2,3);
			document.getElementById('sum').innerHTML = "The Sum triiple is :" + num3;
		}
		else
		{
			num3 = num1 + num2;
			document.getElementById('sum').innerHTML = "The Sum is :" + num3
		}
		
	</script>
</body>
</html>