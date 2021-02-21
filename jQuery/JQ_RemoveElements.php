<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$("p").remove();
			});
		});
	</script>

	<!-- empty -->
<!-- 	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$("#div1").empty();
			});
		});
	</script> -->
</head>
<body>
	<div id="div1" style="height: 100px;width :300px;border: 1px solid black;background-color: lightblue">
		This is some text in the div.
		<p>This is a new Paragraph</p>
		<p>This is a old Paragraph</p>
	</div><br>
	<!-- <button>Remove elements</button> -->
	<button>Empty elements</button>
</body>
</html>