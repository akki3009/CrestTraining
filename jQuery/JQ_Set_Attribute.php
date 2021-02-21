<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#but1").click(function(){
				$("#test").attr({
					"href" : "https://www.youtube.com/",
					"title" : "Youtube Site"
				});
			});
		});
	</script>
</head>
<body>
	<p>Set Attribute</p>
	<p><a href="https://www.google.com/" title="Google Site" id="test">Google</a></p>
	<button id="but1">Change Href Value</button>
</body>
</html>