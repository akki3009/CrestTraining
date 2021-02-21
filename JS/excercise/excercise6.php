<!DOCTYPE html>
<html>
<head>
	<title>Example 6</title>
</head>
<body>
	<b>Longest String </b>
	<p id="strlong"></p>
	<script type="text/javascript">
		var str = "Web Development Tutorial";
		var sppl = str.split(" ");
		var longestword = 0;
		document.getElementById('strlong').innerHTML = sppl;
		for(var i =0;i<sppl.length;i++)
		{
			if(sppl[i].length > longestword){
				longestword = sppl[i].length;
				var word = sppl[i];
			}
		}
		document.getElementById('strlong').innerHTML = "The Longest Word is :" + word+ " " +longestword;
	</script>
</body>
</html>