<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p id="demo"></p>
	<script type="text/javascript">
		var x,y,z;
		x = 10;
		y = 25;
		z = x + y;
		document.getElementById('demo').innerHTML=
		"The value of z is:" + z; 
	</script>
	<button type="button" onclick="myFunction()">Statement</button>
	<p id="demo1"></p>
	<p id="demo2"></p>
	
	<script type="text/javascript">
		function myFunction(){
			document.getElementById('demo1').innerHTML="Hello Dolly";
			document.getElementById('demo2').innerHTML="Hello Akkki";
		}
	</script> 
</body>
</html>