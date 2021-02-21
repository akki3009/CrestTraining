<!-- Change the color of any paragraph to red on mouseover event. -->

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("p").mouseover(function(){
				$(this).css("color","red");
			});
			$("p").mouseleave(function(){
				$(this).css("color","green");
			});
		});
	</script>
</head>
<body>
	<p>Hello</p>
	<p>Good MouseEnter</p>
</body>
</html>