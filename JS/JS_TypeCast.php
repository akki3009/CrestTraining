<!DOCTYPE html>
<html>
<head>
	<title>typecast</title>
</head>
<body>
	<p id="demo"></p>
	<p id="demo1"></p>
	<p id="demo2"></p>
	<script type="text/javascript">
		var x=10;
		document.getElementById('demo').innerHTML=
		String(x) + "<br>"+
		String (10);

		document.getElementById('demo1').innerHTML=
		x.toString() + "<br>" +
		(123).toString();

		document.getElementById('demo2').innerHTML=
		String(false) + "<br>" +
		String (true);
	</script>
</body>
</html>