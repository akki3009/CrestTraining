<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p id="demo"></p>
	<p id="demo1"></p>
	<script>
		var person = {
		  firstName: "John",
		  lastName : "Doe",
		  id     : 5566,
		  fullName : function() {
		    return this.firstName + " " + this.lastName;
		  }
		};
		document.getElementById("demo").innerHTML = person.fullName();

		var x = this;
		document.getElementById("demo1").innerHTML = x;
	</script>

</body>
</html>