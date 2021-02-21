<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#but1").click(function(){
				alert("Text :" +$("#test").text());
			});
			$("#but2").click(function(){
				alert("HTML :" + $("#test").html());
			});
			$("#but3").click(function(){
				alert("Value :" + $("#test1").val());
			});
		});
	</script>
</head>
<body>
	<p id="test">This is <b> bold </b> Text in Page</p><br>
	<p>Name:<input type="text" id="test1"></p><br><br>
	<button id="but1">Show Text</button>
	<button id="but2">Show HTML</button>
	<button id="but3">Show Value</button>
</body>
</html>