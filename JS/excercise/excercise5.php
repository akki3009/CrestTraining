<!DOCTYPE html>
<html>
<head>
	<title>Example 5</title>
</head>
<body>
	<p id="strpos"></p>
	<script type="text/javascript">
		var string=prompt("Enter String");
		if(string.indexOf("Java") == 0){
			document.getElementById('strpos').innerHTML = 
			"The String Starting with Java : " + string;
		}
		else{
			document.getElementById('strpos').innerHTML = 
			"The String Not Starting with Java : " + string;	
		}
	</script>
</body>
</html>