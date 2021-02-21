<!-- Finds every paragraph element on the page and add red border to all paragraph. -->

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("p").css("border","2px solid red")
		});
	</script>
</head>
<body>
	<div>
		<div>The Div tag</div>
		<p>Hello Friends</p>
		<p>Good Morning</p>
	</div>
</body>
</html>