<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$("textarea,p,span").css("background-color","blue");
			});
		});
	</script>
</head>
<body>
	<textarea>TutoRIAL</textarea>
	<p>jQuery</p>
	<span>Exercises</span><br><br>
	<button>Change Css</button>
</body>
</html>