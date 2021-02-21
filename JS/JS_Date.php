<!DOCTYPE html>
<html>
<body>

<h2>JavaScript new Date()</h2>

<p id="demo"></p>

<script>
	var d = new Date();
	document.getElementById("demo").innerHTML = d;
	d = new Date(2018, 11, 24, 10, 33, 30, 0);
	document.getElementById("demo").innerHTML = d;
	d = new Date("October 13, 2014 11:13:00");
	document.getElementById("demo").innerHTML = d;
	var d = new Date(0);
	document.getElementById("demo").innerHTML = d;
	var d = new Date(100000000000);
	document.getElementById("demo").innerHTML = d;
	var d = new Date(86400000);
	document.getElementById("demo").innerHTML = d;
</script>

	<b>Date Methods</b>
	<p id="date1"></p>
	<p id="date2"></p>
	<script type="text/javascript">
		var d = new Date();
		document.getElementById("date1").innerHTML = d.toUTCString();
		var d = new Date();
		document.getElementById("date1").innerHTML = d.toDateString();
		var d = new Date();
		document.getElementById("date2").innerHTML = d.toISOString();

		// Get Method
		var d = new Date();
		document.getElementById("date1").innerHTML = d.getTime();
		document.getElementById("date2").innerHTML = d.getFullYear();
		document.getElementById("date2").innerHTML = d.getMonth();

		var d = new Date();
		var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
		document.getElementById("date2").innerHTML = months[d.getMonth()];

		document.getElementById("date2").innerHTML = d.getDate();
		document.getElementById("date2").innerHTML = d.getHours();
		document.getElementById("date2").innerHTML = d.getMinutes();
		document.getElementById("date2").innerHTML = d.getSeconds();
		document.getElementById("date2").innerHTML = d.getMilliseconds();
		document.getElementById("date2").innerHTML = d.getDay();

	</script>

	<b>Date Set Methods</b>
	<p id="dates1"></p>
	<p id="dates2"></p>
	<script type="text/javascript">
		var d = new Date();
		d.setFullYear(2020);
		document.getElementById("dates1").innerHTML = d;
		d.setMonth(11);
		document.getElementById("dates1").innerHTML = d;
		d.setDate(15);
		document.getElementById("dates1").innerHTML = d;
		d.setDate(d.getDate()+15);
		document.getElementById("dates1").innerHTML = d;
		d.setHours(22);
		document.getElementById("dates1").innerHTML = d;
		d.setMinutes(30);
		document.getElementById("dates1").innerHTML = d;
		d.setSeconds(30);
		document.getElementById("dates1").innerHTML = d;
	</script>.
</body>
</html>
