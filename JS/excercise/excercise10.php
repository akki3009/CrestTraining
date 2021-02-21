<!DOCTYPE html>
<html>
<head>
	<title>Array Program</title>
</head>
<body>
	<p id="arrayde"></p>
	<script type="text/javascript">
		var myColor = ["Red", "Green", "White", "Black"];
		document.getElementById('arrayde').innerHTML = myColor.join(",");
		document.write(myColor.join("+"))
	</script>
</body>
</html>