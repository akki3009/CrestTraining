<!-- Change button text using jQuery. -->
<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$(this).html("<b>Hello!</b>");
			});
		});
	</script>
</head>
<body>
	<button>Click Me</button>
</body>
</html>