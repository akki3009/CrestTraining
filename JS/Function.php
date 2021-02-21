<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
	<script type="text/javascript">
		function myFunction() {
			document.getElementById('demo').innerHTML="Hello1";
		}
	</script>
</head>
<body>
	<p id="demo">Hello2</p>
	<button type="button" onclick="myFunction()">Click Me</button>
	<p id="demo1"></p>
	<script type="text/javascript">
		function myFuntion(a,b) {
			return a*b;
		}
		var x=myFuntion(10,20);
		document.getElementById('demo1').innerHTML=
		"The Multilpication is : " + x;
	</script>
	<p id="demo2"></p>
	<script type="text/javascript">
		var x=toCelcius(77)
		var text="The Temprature is : " + x + " Celcius";
		// document.getElementById("demo2").innerHTML =typeof carName;
		document.getElementById('demo2').innerHTML=text;
		function toCelcius(fahrenhit) {
			/*var carName="BMW";
			document.getElementById("demo2").innerHTML =typeof carName + " " + carName;*/
			return (5/9) * (fahrenhit -32);
		}
	</script>
</body>
</html>