<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				// $("<h2>Hello world!</h2>").replaceAll("p");
				$("p:first").replaceWith("<b>Hello Friends</b>");
			});
		});
	</script>
</head>
<body>

<button>Replace all p elements with h2 elements</button><br>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<p>This is another paragraph.</p>

</body>
</html>
