<!DOCTYPE html>
<html>
<head>
	<title>Asynchronous example</title>
</head>
<body>
	<b>Asycnchronous example</b>
	<p id="ascn"></p>
	<script type="text/javascript">
		setTimeout(myFunction,3000);
		function myFunction() {
			document.getElementById('ascn').innerHTML=" I Love Business!!";
		}
	</script>
	<script type="text/javascript">
		setTimeout(function(){myFunction("I Love You !!!");},3000);
		function myFunction(value) {
			document.getElementById('ascn').innerHTML=value;
		}
	</script>
</body>
</html>