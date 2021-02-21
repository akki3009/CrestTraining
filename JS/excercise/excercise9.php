<!DOCTYPE html>
<html>
<head>
	<title>Multipe of 3 and 5</title>
</head>
<body>
	<b>Multiple of 3 and 5 between 1-1000</b>
	<p id="multi"></p>
	<script type="text/javascript">
		var num=50;
		var sum=0;
		for(var i = 15;i < num;i+=15){
			sum = sum + i;
		}
		document.getElementById('multi').innerHTML = sum;
	</script>
</body>
</html>