<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				var div=$("div");
				div.animate({height : 300},"slow");
				div.animate({width : 300},"slow");
				div.animate({height : 100},"slow");
				div.animate({width : 100},"slow");

				$("span").text(div.queue().length);
			});
		});
	</script>
</head>
<body>
	<button>Start Animation</button>
	<p>The Queue length is :<span></span></p>
	<div style="width: 50px;height: 50px;position: absolute;left: 10px;top: 100px;background-color: red;"></div>
</body>
</html>