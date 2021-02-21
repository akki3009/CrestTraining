<!DOCTYPE html>
<html>
<head>
	<title>For Loop</title>
</head>
<body>
	<b>For Loop Program</b>
	<p id="forl"></p>
	<p id="for1"></p>
	<script>
		var names = ["Akki", "Pooja", "Dhruvil", "Janmay","Hello"];
		var text="";
		var i;
		for(i = 0;i < names.length; i++){
			text += names[i] + "<br>" ;
		}
		document.getElementById('forl').innerHTML = text;
	</script>
	<script type="text/javascript">
		var num;
		var text = "";
		for (num = 0; num < 5; num++) {
			text += num + "<br>";
		}
		document.getElementById('forl').innerHTML = text;
	</script>
	<!-- //Statement1 -->
	<script type="text/javascript">
		var num = [111,121,140,15,1546,588];
		var text,i;
		for (i = 0,text = "",len =num.length ; i <len ; i++) {
			text += num[i] + "<br>";
		}
		document.getElementById('for1').innerHTML = text;
	</script>
	<!-- Statement3 -->
	<script type="text/javascript">
		var num = [111,121,140,15,1546,588];
		var i=0,len =num.length;
		var text = "";
		for(;i< len;)
		{
			text+= num[i] + "<br>";
			i++;
		}
		document.getElementById('forl').innerHTML = text;
	</script>
	<!-- For/in loop -->
	<script type="text/javascript">
	var txt = "";
	var person = {fname:"John", lname:"Doe", age:25}; 
	var x;
	for (x in person) {
	  txt += person[x] + " ";
	}
	document.getElementById("for1").innerHTML = txt;

	var cars = ['BMW','Volvo','Audi'];
	var x;
	for(x of cars){
		document.write(x + "<br>");
	}

	var text = 'Javascript';
	var x;
	for(x of text){
		document.write(x + "<br>");
	}
</script>
</body>
</html>