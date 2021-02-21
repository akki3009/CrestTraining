<!DOCTYPE html>
<html>
<head>
	<title>Random Object</title>
</head>
<body>
	<p id="random"></p>
	<button onclick="document.getElementById('random').innerHTML = myFunction(0,10)">Click On</button><br><br>
	<p id="random1"></p>
	<script type="text/javascript">
		document.getElementById("random").innerHTML = Math.floor(Math.random() * 10);//0-9 number
		document.getElementById("random").innerHTML = Math.floor(Math.random() * 10) + 1;//1-10 number
		function myFunction(min,max) {
			return Math.floor(Math.random() * (max - min)) + min;//0-9 number
		}
	</script>
	<button onclick="document.getElementById('random1').innerHTML = myFunction1(1,10)">Click Me</button>
	<script type="text/javascript">
		function myFunction1(min,max) {
			return Math.floor(Math.random() * (max - min) + 1) + min;//1-10 number
		}
		
	</script>
</body>
</html>