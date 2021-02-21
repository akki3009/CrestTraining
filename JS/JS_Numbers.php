<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Number operator</p>
	<p id="Number"></p>
	<script type="text/javascript">
		var x,y;
		x = 0.2+0.1;
		x=1234e-4;
		var y = 9999999999999999;
		document.getElementById('Number').innerHTML = x + "<br>" + y;
		document.getElementById('Number').innerHTML = 0.2 + 0.1;
		var num=0.2+0.1;
		var num2=(0.2*10 + 0.1*10) /10;
		document.getElementById('Number').innerHTML = num + "<br>" + num2; 

		var num=10//10
		var num2=20;//20
		document.getElementById('Number').innerHTML = 
		"The Result is :"+ (num + num2);

		var x = 100 / "Apple";
		document.getElementById('Number').innerHTML = x;

		var myNumber = 2; 
		var txt = "";
		while (myNumber != Infinity) {
  			myNumber = myNumber * myNumber;
   			txt = txt + myNumber + "<br>";
   		}
		document.getElementById('Number').innerHTML = txt;

		var x = 0xFF;
		document.getElementById('Number').innerHTML = x;

	</script>
	<b>Number Methods</b>
	<p id="numberm"></p>
	<script type="text/javascript">
		var x=11;
		document.getElementById('numberm').innerHTML = 
		x.toString() + "<br>" +
		(11).toString() + "<br>" +
		(10+1).toString();

		var x = 9.62555;
		document.getElementById("numberm").innerHTML =
		x.toExponential() + "<br>" + 
		x.toExponential(2) + "<br>" + 
		x.toExponential(4) + "<br>" + 
		x.toExponential(6);

		var x = 9.444;
		document.getElementById("numberm").innerHTML =
		x.toFixed(0) + "<br>" +
		x.toFixed(2) + "<br>" +
		x.toFixed(3) + "<br>" +
		x.toFixed(6);

		var x = 9.6567;
		document.getElementById("numberm").innerHTML = 
		x.toPrecision() + "<br>" +
		x.toPrecision(2) + "<br>" +
		x.toPrecision(4) + "<br>" +
		x.toPrecision(6);

		var x = 123;
		document.getElementById("numberm").innerHTML = 
		x.valueOf() + "<br>" +
		(123).valueOf() + "<br>" +
		(100 + 23).valueOf();

		//Convert variables to Numbers
		document.getElementById("numberm").innerHTML = 
		Number(true) + "<br>" +
		Number(false) + "<br>" +
		Number("10") + "<br>" + 
		Number(" 10  ") + "<br>" +
		Number("10.33") + "<br>" + 
		Number("John");

		//Number () method
		var x= new Date('2019-2-29');
		document.getElementById('numberm').innerHTML = Number(x);

		//ParseInt Number
		document.getElementById("numberm").innerHTML = 
		parseInt("10") + "<br>" +
		parseInt("10.33") + "<br>" +
		parseInt("10 6") + "<br>" +  
		parseInt("10 years") + "<br>" +  
		parseInt("years 10");

		document.getElementById("numberm").innerHTML = 
		parseFloat("10") + "<br>" +
		parseFloat("10.33") + "<br>" +
		parseFloat("10.06") + "<br>" +  
		parseFloat("10 years") + "<br>" +
		parseFloat("years 10");
	</script>

	<b>Number Properties</b>
	<p id="numberp"></p>
	<script>
		var x = Number.MAX_VALUE;
		document.getElementById("numberp").innerHTML = x;

		var x = Number.MIN_VALUE;
		document.getElementById("numberp").innerHTML = x;

		var x = Number.POSITIVE_INFINITY;
		document.getElementById("numberp").innerHTML = typeof x + " " + x ;

		var x = Number.NEGATIVE_INFINITY;
		document.getElementById("numberp").innerHTML = typeof x + " " + x ;

		document.getElementById("numberp").innerHTML = Number.NaN;
	</script>
</body>
</html>