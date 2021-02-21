<!DOCTYPE html>
<html>
<head>
	<title>Conditional</title>
</head>
<body>
	<b>If Statement</b>
	<p id="ifs">Good Hello</p>
	<script type="text/javascript">
		if(new Date().getHours() > 18){
			document.getElementById('ifs').innerHTML = "GOOD DAY";
		}
	</script>

	<b>Else Statement</b>
	<p id="elses">Good</p>
	<script type="text/javascript">
		if(new Date().getHours() > 18){
			document.getElementById('elses').innerHTML = "GOOD DAY";
		}
		else{
			document.getElementById('elses').innerHTML = "Good Night";
		}
	</script>

	<b>If ElseIf Statement</b>
	<p id="elifs">Good</p>
	<script type="text/javascript">
		var time=new Date().getHours();

		if(time < 12){
			document.getElementById('elifs').innerHTML = "Good Morning";
		}
		else if (time >12 && time < 16) {
			document.getElementById('elifs').innerHTML = "Good afternoon";
		}
		else if (time >16 && time < 18) {
			document.getElementById('elifs').innerHTML = "Good Evening";
		}
		else{
			document.getElementById('elifs').innerHTML = "Good Night";
		}
	</script>

</body>
</html>