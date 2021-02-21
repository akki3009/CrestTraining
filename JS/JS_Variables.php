<!DOCTYPE html>
<html>
<head>
	<title>Literals Values</title>
</head>
<body>
	<p><b>There can be Two type Values</b></p>
	<p><b>The Fix Value is called Literals </b></p>
	<p id="demo"></p>
	<p id="demo1"></p>
	<script type="text/javascript">
		document.getElementById('demo').innerHTML="The Number Literals :" + 10.50;
		// document.getElementById('demo').innerHTML="The Number Literals :" + 10001;
		document.getElementById('demo1').innerHTML="The String Literals :" + "Hello World";
		document.getElementById('demo1').innerHTML="The String Literals :" + 'Hello World';
	</script>


	<p><b>The Variable Value is called Variables </b></p>
	<p id="demo2"></p>
	<script type="text/javascript">
		var x;
		x=6;
		document.getElementById('demo2').innerHTML=x;
	</script>
</body>
</html>