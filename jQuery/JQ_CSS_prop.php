<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				var $x = $("div");
				$x.prop("color", "FF0000");
				$x.append("The color property has the following value: " + $x.prop("color"));
				$x.removeProp("color");
				$x.append("<br>Now the color property has the following value: " + $x.prop("color"));
			});
		});
	</script>
</head>
<body>
<button>Add and remove a property</button><br><br>
<div></div>

</body>
</html>
