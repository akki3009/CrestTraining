<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$(".test").hide();
			});
		});
	</script>
</head>
<body>
	<h1 class="test">This is New Heading With Class</h1>
	<p class="test">Hello Paragraph With Class</p>
	<p>Hello Paragraph Withuout Class</p>
	<button>Class Hide</button>
</body>
</html>