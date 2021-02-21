<!DOCTYPE html>
<html>
<head>
	<style>
		.descendants * { 
			display: block;
			border: 2px solid lightgrey;
			color: lightgrey;
			padding: 5px;
			margin: 15px;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- <script> 
		$(document).ready(function(){
			$("div").children().css({"color":"red","border":"2px solid green"});
		});
	</script> -->

	<!-- child() custom -->
	<!-- <script>
		$(document).ready(function(){
			$("div").children("p.first").css({"color":"red","border":"2px solid blue"});
		});
	</script> -->

	<!-- find() -->
	<!-- <script>
		$(document).ready(function(){
			$("div").find("span").css({"color":"red","border":"2px solid yellow"});
		});
	</script> -->

	<!-- find(*) -->
	<script>
		$(document).ready(function(){
			$("div").find("*").css({"color":"red","border":"2px solid red"});
		});
	</script>
	
</head>
<body>
	<div class="descendants">
		<div style="width: 500px;">Div Elements
			<p class="first">P Child
				<span>Span(grand child)</span>
			</p>
			<p>P Child2
				<span>Span(grand child)</span>
			</p>
		</div>
	</div>
</body>
</html>