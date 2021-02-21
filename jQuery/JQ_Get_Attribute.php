<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				alert($("#goog").attr("href"));
			});
		});
	</script>
</head>
<body>
	<p>Get Attribute</p>
	<p><a href="https://www.google.com/" id="goog">Google</a></p>
	<button>Show Href Value</button>
</body>
</html>