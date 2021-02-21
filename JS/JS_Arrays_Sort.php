	<!DOCTYPE html>
<html>
<head>
	<title>Array Sorting</title>
</head>
<body>
	<p id="demo"></p>
	<p id="demo1"></p>
	<script>
		var fruits = ["Banana", "Orange", "Apple", "Mango"];
		document.getElementById("demo").innerHTML = fruits.sort();
		document.getElementById('demo1').innerHTML = fruits.reverse();

		//Numeric Sort using Compare function=(function(a,b){return a - b})
		var points=[1,40,10,20,500,58];
		document.getElementById('demo').innerHTML = "The Number in Asending orders :" +
		points.sort(function (a,b){return a - b});
		document.getElementById('demo1').innerHTML = "The Number in Decending orders :" +
		points.sort(function (a,b){return b - a});

		points.sort(function (a,b){return a - b});
		document.getElementById('demo1').innerHTML = "The Lowest number is :" +points[0];
		
		points.sort(function (a,b){return b - a});
		document.getElementById('demo1').innerHTML = "The Highest number is :" +points[0];

		//Find the Highest Value 
		
		document.getElementById('demo1').innerHTML = "The Highest Number is :"+ Math.max.apply(null,points);
		document.getElementById('demo1').innerHTML = "The Lowest Number is :"+ Math.min.apply(null,points);
	</script>
	<button onclick="myFunction()">Order</button>
	<script type="text/javascript">
		var cars = [
		{type:"Volvo", year:2016},
		{type:"Saab", year:2001},
		{type:"BMW", year:2010}
		];

		displayCars();
		function myFunction() {
			cars.sort(function(a, b){
				var x = a.type.toUpperCase();
		    	var y = b.type.toUpperCase();
		    	if (x < y) {return -1;}
		    	if (x > y) {return 1;}
		    	return 0;
		    });
		    displayCars();
		}
		function displayCars() {
			document.getElementById("demo1").innerHTML =
			cars[0].type + " " + cars[0].year + "<br>" +
			cars[1].type + " " + cars[1].year + "<br>" +
			cars[2].type + " " + cars[2].year;
		}
</script>
</body>
</html>