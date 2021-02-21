<!DOCTYPE html>
<html>
<head>
	<title>JS String</title>
</head>
<body>
	<p id="demo"></p>
	<script type="text/javascript">
		var x="Akash";
		var y="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		document.getElementById('demo').innerHTML=y.length;
	</script>

	<p id='demo1'></p>
	<script type="text/javascript">
		var x="We are good in \"javascript\" And helping to \"others\".";
		var y='We are good in \'JAVA\' And helping to \'All\'.';
		var z="We are good in PHP And helping to myfriends.";
		document.getElementById('demo1').innerHTML = x + "<br>" + y + "<br>" + z;
		document.getElementById('demo1').innerHTML = "Hello \
		Friends!";
		document.getElementById('demo1').innerHTML = "Hello " + 
		"Friends!";
		document.getElementById('demo1').innerHTML = \
		"Hello";
	</script>

	<b><i>String Methods</i></b>
	<p id="method"></p>
	<script>
		var str="Please find the objects in 'objects' Directory objects";
		document.getElementById("method").innerHTML = "The First Occurance is : " + str.indexOf('objects') + "<br>" + "The Last Occurance is : " + str.lastIndexOf('objects');

		document.getElementById('method').innerHTML = 
		"The First occurance is :" + str.indexOf('objects',18);
		document.getElementById('method').innerHTML = 
		"The last occurance is :" + str.lastIndexOf('objects',50);

		// Search
		document.getElementById('method').innerHTML = str.search('objects');

		var str="Appple,Banana,Mango,Banana";
		document.getElementById('method').innerHTML = str.slice(-12,-6);

		// substring
		document.getElementById('method').innerHTML=str.substring(7,13);

		//substr
		document.getElementById('method').innerHTML = str.substr(8,13);
		document.getElementById('method').innerHTML = str.substr(-4);

		//replace
		document.getElementById('method').innerHTML = str.replace('Banana','Kiwi');
		document.getElementById('method').innerHTML = str.replace(/KIWI/i,'Banana');
		document.getElementById('method').innerHTML = str.replace(/Banana/g,'Kiwi');

		//Uppercase And Lowercase,Concat

		var str="Hello good morning";
		var str1="HIIIIIIII";
		var trim="            HELLO            ";
		document.getElementById('method').innerHTML = str.toUpperCase();
		document.getElementById('method').innerHTML = str.toLowerCase();
		document.getElementById('method').innerHTML = str.concat(" , ",str1);
		alert(trim.trim());
		// alert(str);

		//Extract Character from String 
		var str="HeLLO JAVASCRIPT";
		document.getElementById('method').innerHTML = str.charAt(0);
		document.getElementById('method').innerHTML = str.charCodeAt(1);

		//Property Access
		var str="HII JANUARY WELCOME";
		str[0] ="A"
		document.getElementById('method').innerHTML = str[0] ="A";
		document.getElementById('method').innerHTML = str[0];

		//Split to convert String to array
		var str="WELCOME JANUARY";
		document.getElementById('method').innerHTML = str.split(",");
		document.getElementById('method').innerHTML = str.split("")+"<br>";
	</script>
</body>
</html>