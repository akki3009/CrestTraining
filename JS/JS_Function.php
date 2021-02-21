<!DOCTYPE html>
<html>
<body>
	
	<h2>JavaScript Functions</h2>
	<b>Function</b>
	<p id="func"></p>
	<script>
		var x = myFunction(4, 3);
		document.getElementById("func").innerHTML = x;
		function myFunction(a, b) {
			return a * b;
		}
		var x = function (a, b) {return a * b};
		document.getElementById("func").innerHTML = x(4, 3);

		function myFunction(a, b) {
			return arguments.length;
		}
		document.getElementById("func").innerHTML = myFunction(4, 3);

		// Arrow Function
		// const x = (x, y) => { return x * y };
		// document.getElementById("func").innerHTML = x(5, 5);
	</script>
	<b>Function Parameters</b>
	<p id="funcp"></p>
	<script type="text/javascript">
		function myFunction(x, y = 2) {
			// if (y === undefined) {
			// 	y = 2;
			// }  
			return x * y;
		}
		document.getElementById("funcp").innerHTML = myFunction(4);
	</script>

	<b>Function Invocation</b>
	<p id="funci"></p>
	<script type="text/javascript">
		function myFunction(x, y) {
			return x * y;
		}
		document.getElementById("funci").innerHTML = myFunction(10,2);

		var myObject = {
			firstName:"John",
		  	lastName: "Doe",
		  	fullName: function() {
		    	return this.firstName + " " + this.lastName;
		  	}
		}
		document.getElementById("funci").innerHTML = myObject.fullName(); 
	</script>
	<b>Function Call</b>
	<p id="funcc"></p>
	<script type="text/javascript">
		var person = {
			fullName: function() {
				return this.firstName + " " + this.lastName;
			}
		}
		var person1 = {
			firstName:"John",
			lastName: "Doe"
		}
		var person2 = {
			firstName:"Mary",
			lastName: "Doe"
		}
		var x = person.fullName.call(person1);
		document.getElementById("funcc").innerHTML = x;
	</script>

	<b>Function Closure</b>
	<p id="funcl"></p>
	<button type="button" onclick="myFunction()">Click Me!</button>
	<script type="text/javascript">
		function myFunction() {
			var a = 4;
			document.getElementById("funcl").innerHTML = a * a;
		} 
	</script>
</body>
</html>
