<!DOCTYPE html>
<html>
<head>
	<title>OUTPUT JavaScript</title>
</head>
<body>
	<h2>Using InnerHTML</h2>
	<p id="demo"></p>
	<script type="text/javascript">
		document.getElementById('demo').innerHTML=10+20;
	</script>

	<h3>Using Document Write</h3>
	<script type="text/javascript">
		document.write(10+20);
	</script>
	<!-- <button type="button" onclick="document.write(5 + 6)">Try it</button> -->

	<h4>Using Window Alert</h4>
	<script type="text/javascript">
		// window.alert("The Sum is :"+(10+20+30));
		alert("The Substraction is :" + (30-20-5));
	</script>

	<h4>Using Console log</h4>
	<script type="text/javascript">
		console.log("The Addition is :" + (30+20+5));
	</script>
</body>
</html>