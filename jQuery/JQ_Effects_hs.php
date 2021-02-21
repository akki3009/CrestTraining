<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#hide").click(function(){
				$("p").hide();
			});
			$("#show").click(function(){
				$("p").show();
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".button1").click(function(){
				$("p#th").hide(1000);
			});
			$(".button1").click(function(){
				$("p#th").show(1000);
			});
		});
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".button2").click(function(){
				$("p.tg").toggle();
			});
		});
	</script>
</head>
<body>
	<p>Hide and Show the Effect</p>
	<button id="hide">Hide</button>
	<button id="show">Show</button>
	<br><br>
	<button class="button1">Hide With Time</button>
	<p id="th">Hide the Paragraph</p>

	<button class="button2">Toggle to hide and Display</button>
	<p class="tg">The Content is Display.</p>
</body>
</html>