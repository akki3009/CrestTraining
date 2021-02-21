<!DOCTYPE html>
<html>
<head>
	<title>CLass Demo</title>
</head>
<body>
	<h2>JavaScript Class</h2>

	<p id="demo"></p>

	<script>
		class Car {
			constructor(name, year) {
				this.name = name;
				this.year = year;
			}
		}
		myCar = new Car("Ford", 2014);
		document.getElementById("demo").innerHTML =
		myCar.name + " " + myCar.year;
	</script>

</body>
</html>