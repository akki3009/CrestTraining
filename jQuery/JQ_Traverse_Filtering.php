<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- first() -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("div").first().css("background-color", "yellow");
		});
	</script> -->

	<!-- last() -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("div").last().css("background-color", "pink");
		});
	</script> -->

	<!-- eq() -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("p").eq(2).css("background-color", "blue");
		});
	</script> -->

	<!-- filter() -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("p").filter(".intro").css("background-color", "lightgreen");
		});
	</script> -->

	<!-- not() -->
	<script type="text/javascript">
		$(document).ready(function(){
			$("p").not(".intro").css("background-color", "lightgreen");
		});
	</script>
</head>
<body>
<!-- 	<h1>Welcome to Filtering</h1>
	<div style="border: 1px solid green">
		<p>A first Paragraph of div tag</p>
		<p>A second Paragraph of div tag</p>
	</div><br><br>
	<div style="border: 2px solid black">
		<p>A Third Paragraph of div tag</p>
		<p>A Fourth Paragraph of div tag</p>
	</div><br><br>
	<div style="border: 2px solid blue">
		<p>A Fifth Paragraph of div tag</p>
		<p>A Sixth Paragraph of div tag</p>
	</div><br><br> -->
	<p id="intro">First P tag in program</p>
	<p class="intro">Second P tag in program</p>
	<p class="intro">Third P tag in program</p>
	<p id="intro">Fourth P tag in program</p>
</body>
</html>