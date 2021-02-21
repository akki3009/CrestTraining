<!DOCTYPE html>
<html>
<head>
	<title>Array Iteration</title>
</head>
<body>
	<p id="arrayit"></p>
	<p id="arrayit1"></p>
	<script type="text/javascript">
		var txt = "";
		var numbers = [45,45,4,9,125,12];
		numbers.forEach(myFunction);
		document.getElementById('arrayit').innerHTML = txt;
		function myFunction(value) {
			txt = txt + value + "<br>";
		}
		//Array.map()
		var numbers1=[40,20,5,55,200];
		var numbers2 =numbers1.map(myFunction);
		document.getElementById('arrayit').innerHTML = numbers1.sort(function(a,b){return a - b});
		document.getElementById('arrayit1').innerHTML = "Using Array.map() :" +
		numbers2.sort(function(a,b){return a - b});
		
		function myFunction (value){
			return value * 2;
		}
		
		//Array.filter()
		var numbers1=[40,20,5,55,25];
		var numbers2 =numbers1.filter(myFunction);
		document.getElementById('arrayit').innerHTML = numbers1.sort(function(a,b){return a - b});
		document.getElementById('arrayit1').innerHTML = "Using Array.filter() : " +
		numbers2.sort(function(a,b){return a - b});
		
		function myFunction (value){
			return value > 18;
		}

		//Array.reduce()
		var numbers1=[40,20,5,55,25];
		var numbers2 =numbers1.reduce(myFunction);
		document.getElementById('arrayit1').innerHTML = "Using Array.reduce() The Sum is :" + numbers2;
		
		function myFunction (total,value){
			return total + value;
		}
		var numbers2 =numbers1.reduce(myFunction,100);
		document.getElementById('arrayit1').innerHTML = "Using Array.reduce() The Sum is :" + numbers2;
		
		function myFunction (total,value){
			return total + value;
		}

		//Array.every()
		var numbers1=[40,20,5,55,25];
		var numbers2 =numbers1.every(myFunction);
		document.getElementById('arrayit1').innerHTML = "Using Array.every() All are above 18 :  " + numbers2;
		function myFunction (value){
			return value > 18;
		}

		//Array.some()
		var numbers1=[40,20,5,55,25];
		var numbers2 =numbers1.some(myFunction);
		document.getElementById('arrayit1').innerHTML ="Using Array.some() Some are above 18 :" + numbers2;
		function myFunction (value){
			return value > 18;
		}

		//indexOf()
		var fruits = ["Apple", "Orange", "Apple", "Mango"];
		var a = fruits.indexOf("Apple");
		document.getElementById("arrayit").innerHTML = fruits;
		document.getElementById("arrayit1").innerHTML = "Apple is found at position " + a;

		document.getElementById("arrayit1").innerHTML = "Apple is found at position " + fruits.lastIndexOf("Apple");

		//Array.find(),Array.findIndex()
		var numbers1=[40,20,5,55,25];
		var numbers2 =numbers1.find(myFunction);
		var numbers3 =numbers1.findIndex(myFunction);
		document.getElementById('arrayit').innerHTML ="Using Array.find() First number above 18 :" + numbers2;
		document.getElementById('arrayit1').innerHTML ="Using Array.findIndex() First number above 18 Index is :" + numbers3;
		function myFunction (value){
			return value > 18;
		}		
	</script>
</body>
</html>