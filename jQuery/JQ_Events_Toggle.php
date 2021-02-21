<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js">
</script>
<script>
	$(document).ready(function(){
		$("p").toggle(
			function(){$("p").css({"color": "red"});},
			function(){$("p").css({"color": "blue"});},
			function(){$("p").css({"color": "green"});
		});
	});
</script>
</head>
<body>

<p style="font-size:40px">Click me.</p>

<div><b>Note:</b> The toggle() method was deprecated in jQuery version 1.8, and removed in version 1.9. We have used an earlier version of jQuery (1.8 in the script tag), for this example to work.</div> 

</body>
</html>
