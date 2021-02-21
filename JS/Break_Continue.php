<!DOCTYPE html>
<html>
<head>
	<title>Break And Continue</title>
</head>
<body>
	<b>Break Statement</b>
	<script type="text/javascript">
		var text = "";
		var i=0;
		for(;i < 10 ; i++){
			if(i===3){
				break;
			}
			text += "<br>The Number is :"+i;
		}
		document.write(text);
	</script>

	<br><br><b>Continue Statement</b>
	<script type="text/javascript">
		var text = "";
		var i=0;
		for(;i < 10;i++){
			if(i === 5){
				continue;
			}
			text += "<br>The number is :" + i;
		}
		document.write("<br>"+text);
	</script>
</body>
</html>