<!DOCTYPE html>
<html>
<body>

	<h2>JavaScript Objects Variables</h2>

	<p id="demo"></p>

	<script>
		var person = "John Doe";
		document.getElementById("demo").innerHTML = person;
	</script>

	<script type="text/javascript">
		var person = {
			firstName : "John",
			lastName  : "Doe",
			age     : 50,
			eyeColor  : "blue"
		};
		document.getElementById("demo").innerHTML = person.firstName + " " + person.lastName;
	</script>

	<b>JS OBJECT Properties</b>
	<p id="objp"></p>
	<script>
		var person = {
			firstname:"John",
			lastname:"Doe",
			age:50,
			eyecolor:"blue"
		};
		delete person.age;
		document.getElementById("objp").innerHTML = person.firstname + " is " + person.age + " years old.";
		document.getElementById("objp").innerHTML = person["firstname"] + " is " + person["age"] + " years old.";
	</script>
	<script>
		var txt = "";
		var person = {fname:"John", lname:"Doe", age:25}; 
		person.nationality = "English";

		var x;
		for (x in person) {
			txt += person[x] + " ";
		}
		// document.getElementById("objp").innerHTML = txt;
	</script>
	<b>JS OBJECT Method</b>
	<p id="objm"></p>
	<script type="text/javascript">
		var person = {
			firstName: "John",
			lastName : "Doe",
			id     : 5566,
			fullName : function() {
				return this.firstName + " " + this.lastName;
			}
		};
		person.name = function() {
			return this.firstName + " " + this.lastName;
		};
		document.getElementById("objm").innerHTML = "My father is " + person.name(); 
		document.getElementById("objm").innerHTML = person.fullName();
	</script>

	<b>JS OBJECT Display</b>
	<p id="objd"></p>
	<script type="text/javascript">
		var person = {name:"John", age:50, city:"New York"};
		document.getElementById("objd").innerHTML = person.name + "," + person.age + "," + person.city;
	</script>

	<b>JS OBJECT Constructor</b>
	<p id="objc"></p>
	<script type="text/javascript">
		function Person(first, last, age, eye) {
			this.firstName = first;
			this.lastName = last;
			this.age = age;
			this.eyeColor = eye;
		}
		var myFather = new Person("John", "Doe", 50, "blue");

		document.getElementById("objc").innerHTML = "My father is " + myFather.age + ".";
	</script>

	<b>JS OBJECT Prototype</b>
	<p id="objpr"></p>
	<script type="text/javascript">
		function Person(first, last, age, eye) {
			this.firstName = first;
		  	this.lastName = last;
		  	this.age = age;
		  	this.eyeColor = eye;
		}
		Person.prototype.nationality = "English";
		var myFather = new Person("John", "Doe", 50, "blue");
		document.getElementById("objpr").innerHTML = "The nationality of my father is " + myFather.nationality;
	</script>
</body>
</html>
