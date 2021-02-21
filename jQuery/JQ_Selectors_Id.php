<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$("#test").hide();
			});
		});
	</script>
</head>
<body>
	<h1>This is New Heading</h1>
	<p id="test">Hello Paragraph With Id</p>
	<p>Hello Paragraph Withuout Id</p>
	<button>Id Hide</button>
</body>
</html>