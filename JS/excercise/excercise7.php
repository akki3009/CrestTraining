<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p id="maxi"></p>
	<p id="maxi1"></p>
	<script type="text/javascript">
		var number = [-5,-2,-6,0,-1];
		number.sort(function (a,b){return b- a});
		document.getElementById('maxi').innerHTML = "The number is :" +number;
		document.getElementById('maxi1').innerHTML = "The largest number is :" +number[0];
	</script>

</body>
</html>