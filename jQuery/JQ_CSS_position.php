<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				var x = $("p").position();
				alert("Top position: " + x.top + " Left position: " + x.left);
			});
		});
	</script>
</head>
<body>

<p>This is a paragraph.</p>
<button>Return the top and left position of the p element</button>
	
</body>
</html>
