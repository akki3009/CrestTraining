<!-- Limit no of characters in the input field. Also, display remaining characters below the input field. -->
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("input").keyup(function(){
				var maxlength=10;
				$("#char").text(maxlength - $(this).val().length);
			});
		});
	</script>
</head>
<body>
	<p>Enter Character<input type="text" name="keys" maxlength="10"></p>
	<span id="char"> 10 </span> Characters(s) Remaining.
</body>
</html>