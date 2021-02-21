<!DOCTYPE html>
<html>
<head>
	<title>JavaScript CallBack</title>
</head>
<body>
	<b>JS Callbck</b>
	<p id="calb"></p>
	<p id="calba"></p>
	<script type="text/javascript">
		function myDisplayer(some) {
			document.getElementById('calb').innerHTML=some;
		}
		function myFirst(){
			myDisplayer('Hello');
		}
		function mySecond(){
			myDisplayer("Goood Morning")
		}
		mySecond();
		myFirst();
	</script>
	<script type="text/javascript">
		function myDisplayer(some) {
			document.getElementById("calba").innerHTML = some;
		}
		function myCalculator(num1, num2) {
			let sum = num1 + num2;
			return sum;
		}

		let result = myCalculator(5, 5);
		myDisplayer(result);

	</script>
</body>
</html>