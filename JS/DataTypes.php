<!DOCTYPE html>
<html>
<head>
	<title>DataTypes</title>
</head>
<body>
	<h2>DataTypes</h2>
	<p id="demo"></p>
	<p id="demo1"></p>
	<p id="demo2"></p>
	<script type="text/javascript">
		var x = 16 + "Volvo";
		document.write(x + "<br>");
		x = "16" + "Volvo";
		document.write(x + "<br>");
		x = "Volvo" + 16;
		document.write(x + "<br>");
		x = 16 + 4 + "Volvo" ;
		document.write(x + "<br>");
		x="Volvo" + 16 + 4;
		document.write(x + "<br>");
		x=10;
		document.write(x);
		var st1="Volvo";
		var st2='Volvo';
		document.getElementById('demo').innerHTML=(st1==st2);
		var cars = ["Saab", "Volvo", "BMW"];
		document.getElementById('demo1').innerHTML=(cars[2]);
		var car;
		var Person={
			name : 'Akash',
			age : 25,
			height : 5.2,
			salary : 20000
		};
		// Person = null;
		document.getElementById('demo2').innerHTML= Person.name + " age is : " + Person.age;
		document.getElementById('demo2').innerHTML=typeof Person;
		document.getElementById('demo2').innerHTML= car + "<br>"+ typeof car;

		document.getElementById('demo2').innerHTML=
		typeof undefined + "<br>" +
		typeof null + "<br> <br>" +
		(null === undefined) + "<br>" +
		(null == undefined) + "<br> <br>" +
		typeof {name : 'Akkk',age : 35} + "<br>" +
		typeof [1,2,3,4];
	</script>
</body>
</html>