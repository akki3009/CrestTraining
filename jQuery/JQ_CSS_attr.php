<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("img").attr("width", "600");
			});
		});
	</script>
</head>
<body>

<img src="img_pulpitrock.jpg" alt="Pulpit Rock" width="284" height="213"><br>

<button>Set the width attribute of the image</button>

</body>
</html>
