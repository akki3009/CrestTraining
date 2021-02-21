<!DOCTYPE html>
<html>
<head>
	<title>Example 1</title>
</head>
<body>
	<b>Check Two Numbers</b>
	<p id="check"></p>
	<script type="text/javascript">
		function checkTwo(num1,num2) {
			return (num1 == 50 || num2 == 50 || (num1 + num2 == 50));
		}
		var num1 = parseInt(prompt("Enter Number1"));
		var num2 = parseInt(prompt("Enter Number2"));
		document.getElementById('check').innerHTML=
		"The Number is 50 or Sum is 50 :" + 
		checkTwo(num1,num2) + "<br>" + 
		num1 + "<br>" +
		num2 + "<br>";
	</script>
</body>
</html>