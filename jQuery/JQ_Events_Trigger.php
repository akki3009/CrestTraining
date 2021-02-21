<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("input").select(function(){
			$("input").after(" Text marked!");
		});
		$("button").click(function(){
			$("input").trigger("select");
		});
	});
</script>
</head>
<body>

<input type="text" value="Hello World"><br><br>

<button>Trigger the select event for the input field</button>

</body>
</html>
