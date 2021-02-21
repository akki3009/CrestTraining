<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		i=0;
		$(document).ready(function(){
			$("input").keydown(function(){
				$("input").css("background-color", "yellow");
			});
			$("input").keyup(function(){
				$("input").css("background-color", "pink");
			});
			$('input').keypress(function(){
				$('span').text(i+=1);
			});
		});
	</script>
</head>
<body>
<br>
Enter your name: <input type="text">
<p>KeyPress: <span>0</span></p>
</body>
</html>
