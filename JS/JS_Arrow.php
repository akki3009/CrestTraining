<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Arrow Function</h2>

<p id="demo"></p>
	<script>
		var hello;
		hello = () => {
		  return "Hello World!";
		}
		document.getElementById("demo").innerHTML = hello();
	</script>
	<script>
		var hello;
		hello = (val) => "Hello " + val;
		document.getElementById("demo").innerHTML = hello("Universe!");
	</script>
</body>
</html>
