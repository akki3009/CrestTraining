<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("<span>Hello World!</span>").appendTo("p");
			});
		});
	</script>
</head>
<body>
	<button>Insert span element at the end of each p element</button>
	<p>This is a paragraph.</p>
	<p>This is another paragraph.</p>
</body>
</html>