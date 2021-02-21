<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("p").unwrap();
			});
		});
	</script>
	<style>
		div{
			background-color: yellow;
		}
		article{
			background-color: pink;
		}
	</style>
</head>
<body>

	<div>
	  <p>This is a paragraph inside a div element.</p>
	</div>

	<article>
	  <p>This is a paragraph inside an article element.</p>
	</article>

	<button>Remove the parent element of each p element</button>

</body>
</html>
