<!DOCTYPE html>
<html>
<head>
	<title>Type Of</title>
</head>
<body>
	<p id="demo"></p>
	<script type="text/javascript">
		document.getElementById("demo").innerHTML=
		typeof "Aki" + "<br>" +
		typeof 3.14 + "<br>" +
		typeof NaN + "<br>" +
		typeof false + "<br>" +
		typeof [1,2,3,4] + "<br>" +
		typeof {name:'Akki',age:30,salary:25000} + "<br>" +
		typeof new Date()+ "<br>" +
		typeof function(){}+ "<br>" +
		typeof null;
</script>
</body>
</html>