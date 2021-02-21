<!-- Remove a link applied to any element using jQuery. -->

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$("[href]").removeAttr("href");
			});
		});
	</script>
</head>
<body>
	<a href="http://www.google.com">Google</a>
	<p>Hello Link is provided</p>
	<button>Remove Link</button>
</body>
</html>