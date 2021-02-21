<!DOCTYPE html>
<html>
<head>
	<title>String Operation</title>
</head>
<body>
	<p id= "str"></p>
	<script type="text/javascript">
		var str1="Python";
		// var substr = str1.indexOf("Py");
		if(str1.indexOf("Py") == 0){
			document.getElementById('str').innerHTML =
			"The Original String is :" + str1;
		}
		else{
			var str2 = "Py";
			var str3 = str2.concat("",str1);
			document.getElementById('str').innerHTML = "Py is added :<br>"+
			"The Original String is :" + str1 +
			"<br>" +"The new String is : "+ str3;
		}
	</script>
</body>
</html>