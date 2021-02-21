<!DOCTYPE html>
<html>
<head>
	<title>While Loop Programs</title>
</head>
<body>
	<b>While Program</b>
	<!-- <p id="whle"></p> -->
	<script type="text/javascript">
		var text = "";
		var i=0;
		while(i < 10){
			text += "<br>The Number is :"+i;
			i++;
		}
		document.write(text);

		
		var text = "";
		var i=0;
		do{
			text += "<br> The Number is:" + i ;
			i++;
		}while(i < 10);
		document.write("<br>"+text);
	</script>
</body>
</html>