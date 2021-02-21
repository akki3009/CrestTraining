<!DOCTYPE html>
<html>
<head>
	<title>Math Objet</title>
</head>
<body>
	<p id="math"></p>
	<script type="text/javascript">
		document.getElementById('math').innerHTML = Math.PI;
		document.getElementById('math').innerHTML = Math.round(4.3);//4
		document.getElementById('math').innerHTML = Math.pow(4,4);//256
		document.getElementById('math').innerHTML = parseInt(Math.sqrt(32));//5
		document.getElementById('math').innerHTML = Math.abs(-4.57);//4.57
		document.getElementById('math').innerHTML = Math.ceil(4.4);//5
		document.getElementById('math').innerHTML = Math.floor(4.7);//4
		document.getElementById('math').innerHTML = "The sine value of 180 degree is :"+
		Math.sin(180 * Math.PI / 180);
		document.getElementById('math').innerHTML = "The cose value of 45 degree is :"+
		Math.cos(45 * Math.PI / 180);
		document.getElementById('math').innerHTML = Math.min(0,150,20,255,-20,-35);
		document.getElementById('math').innerHTML = Math.max(0,150,20,255,-20,-35);
		document.getElementById('math').innerHTML = Math.random();
	</script>
</body>
</html>