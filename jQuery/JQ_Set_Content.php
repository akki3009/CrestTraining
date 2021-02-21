<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#but1").click(function(){
				$("#test").text("Hello Text");
			});
			$("#but2").click(function(){
				$("#test1").html("<b>Hello HTML</b>");
			});
			$("#but3").click(function(){
				$("#test2").val("Akash Agrawal");
			});
		});
	</script>
</head>
<body>
	<p id="test">This is bold Text in Page</p>
	<p id="test1">This is bold HTML in Page</p>
	<p>Name:<input type="text" id="test2" value="Mick Tisan"></p><br>
	<button id="but1">Set Text</button>
	<button id="but2">Set HTML</button>
	<button id="but3">Set Value</button>
</body>
</html>