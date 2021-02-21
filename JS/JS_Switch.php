<!DOCTYPE html>
<html>
<head>
	<title>Switch Statement</title>
</head>
<body>
	<b>Switch Statement</b>
	<p id="swtch"></p>
	<p id="swtch1"></p>
	<script type="text/javascript">
		var day;
		switch(new Date().getDay()){
			case 0:
				day ="Sunday";
				break;
			case 1:
				day = "Monday";
				break;
			case 2:
				day = "Tuesday";
				break;
			case 3:
				day = "Wednesday";
				break;
			case 4:
				day = "Thursday";
				break;
			case 5:
				day = "Friday";
				break;
			case 6:
				day = "Saturday";
		}
		document.getElementById('swtch').innerHTML = "Today is :" + day; 
	</script>
	<!-- Default Keyword -->
	<script type="text/javascript">
		var text;
		switch(new Date().getDay()){
			case 6:
				text= "Today is Saturday";
				break;
			case 0:
				text = "Today is Sunday";
				break;
			default :
				text = "Looking forward to the weekend";
		}
		document.getElementById('swtch1').innerHTML = text;
	</script>
	<script type="text/javascript">
		var text;
		switch(new Date().getDay()){
			default :
				text = "Looking forward to the weekend";
				break;
			case 3:
				text= "Today is Wednesday";
				break;
			case 0:
				text = "Today is Sunday";
				break;
		}
		document.getElementById('swtch1').innerHTML = text;
	</script>
	<!-- Common Code Block -->
	<script type="text/javascript">
		var text;
		switch(new Date().getDay()){
			case 4:
			case 5:
				text= "Soon it is weekend";
				break;
			case 0:
			case 6:
				text = "It is weekend";
				break;
			default :
				text = "Looking forward to the weekend";
			}
			document.getElementById('swtch1').innerHTML = text;
	</script>
</body>
</html>