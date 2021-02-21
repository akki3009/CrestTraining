<!DOCTYPE html>
<html>
<head>
	<title>Arrays Programs</title>
</head>
<body>

	<p id="array"></p>
	<p id="array_1"></p>
	<button onclick="myFunction2()">PUSH !</button><br><br>
	<script>
		var language = ["Square "," PHP "," JAVA "," C++ "," .Net "];
		document.getElementById("array").innerHTML = language;

		var lang=new Array("Bracket "," Comma "," Dot "," Slash ");
		document.getElementById('array').innerHTML = lang;

		var person = {firstName:"John", lastName:"Doe", age:46};
		document.getElementById("array").innerHTML = person["firstName"];

		// //Property Of Array

		document.getElementById('array').innerHTML = language.length + "<br>";

		//Loopping Array
		
		var language = ["Square","PHP","JAVA","C++",".Net"];
		language.forEach(myFunction1);
		function myFunction1(item,index) {
			document.getElementById("array_1").innerHTML += index + ":" + item + "<br>";
		}

		 //Adding Array elements

		var langage = ["Square","PHP","JAVA","C","Hello"];
		document.getElementById('array').innerHTML = langage;
		function myFunction2(){
			langage.push("L");
			document.getElementById('array').innerHTML = langage;
		}
	</script>
	

	<b>Array Methods</b>
	<p id="array1"></p>
	<p id="array2"></p>
	
	<script>
		var language = ["Square "," PHP "," JAVA "," C++ "," .Net "];
		document.getElementById("array1").innerHTML = language.toString();

		var language = ["Square","PHP","JAVA","C++",".Net"];
		document.getElementById("array1").innerHTML = language.join("*");		

		var language = ["Square","PHP","JAVA","C++",".Net"];
		document.getElementById("array1").innerHTML = language.pop();
		document.getElementById("array1").innerHTML = language;

		var langauge=['Mango','Apple','Kiwi','Pinaple'];
		// document.getElementById('array1').innerHTML = langauge;
		document.getElementById('array1').innerHTML = langauge.shift();
		document.getElementById('array2').innerHTML = langauge;

		var langauge=['Mango','Apple','Kiwi','Pinaple'];
		//document.getElementById('array').innerHTML = langauge;
		document.getElementById('array1').innerHTML = langauge.unshift("Lemon","Bananaa");
		document.getElementById('array2').innerHTML = langauge;

		var fruits = ["Banana", "Orange", "Apple", "Mango"];
		document.getElementById("array1").innerHTML = fruits;
		fruits[0] = "Kiwi";
		document.getElementById("array2").innerHTML = fruits;

		var fruits = ["Banana", "Orange", "Apple", "Mango"];
		document.getElementById("array1").innerHTML = "The first fruit is: " + fruits[0];
		delete fruits[0];
		// document.getElementById("array1").innerHTML = "The first fruit is: " + fruits;
		document.getElementById("array2").innerHTML = "The first fruit is: " + fruits[0];

	</script>
	
	<button onclick="myFunction()">Try It..</button>
	<p id="demo"></p>
	<p id="demo1"></p>
	<p id="demo2"></p>
	<script type="text/javascript">
		var fruits = ["Banana", "Orange", "Apple", "Mango"];
		document.getElementById("demo").innerHTML = "Original Array:<br>" + fruits;
		function myFunction() {
			fruits.splice(2, 0, "Lemon", "Kiwi");
			document.getElementById("demo1").innerHTML = "New Array:<br>" + fruits;
		}
		//Concat the strings

		var myGirls = ["Pooja", "Archna"];
		var myBoys = ["Harit", "Dhruvil", "Janmay"];
		var myChildren = myBoys.concat(myGirls);
		document.getElementById("demo2").innerHTML = myChildren;

		//Slice (1,2) 1 is starting point and 2 is ending point which is not included
		var fruits = ["Banana", "Orange", "Lemon", "Apple", "Mango"];
		var citrus = fruits.slice(2);
		document.getElementById("demo2").innerHTML = fruits + "<br><br>" + citrus;
		var citrus = fruits.slice(1,4);
		document.getElementById("demo2").innerHTML = fruits + "<br><br>" + citrus;
	</script>
	
</body>
</html>