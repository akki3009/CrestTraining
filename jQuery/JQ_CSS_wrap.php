<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				// $("p").wrap("<div></div>");
				// $("p").wrapAll("<div></div>");
				$("p").wrapInner("<b></b>");
			});
		});
	</script>
	<style>
		div{
			background-color: yellow;
		}
	</style>
</head>
<body>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>

<button>Wrap element</button>

</body>
</html>
