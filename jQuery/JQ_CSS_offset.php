<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				var x = $("p").offset();
				alert("Top: " + x.top + " Left: " + x.left);
			});
		});
	</script>
</head>
<body>

<p>This is a paragraph.</p>

<button>Return the offset coordinates of the p element</button>

</body>
</html>
