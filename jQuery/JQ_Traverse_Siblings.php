<!DOCTYPE html>
<html>
<head>
	<style>
		.siblings *{
			display: block;
			border: 2px solid lightgray;
			color: lightgray;
			padding: 5px;
			margin: 15px;
		}
	</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("h2").siblings().css({"color":"green","border":"2px solid black"});
		});
	</script> -->

	<!-- siblings() custom -->
<!-- 	<script type="text/javascript">
		$(document).ready(function(){
			$("h3").siblings("p").css({"color":"red","border":"2px solid blue"});
		});
	</script> -->

	<!-- next() and next()custom -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("h3").next("p").css({"color":"red","border":"2px solid blue"});
		});
	</script> -->

	<!-- nextAll() and nextAll() custom -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("h1").nextAll().css({"color":"red","border":"2px solid blue"});
			$("h1").nextAll("h3").css({"color":"red","border":"2px solid blue"});
		});
	</script> -->

	<!-- nextUntil() and nextUntil() custom -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("h1").nextUntil("p").css({"color":"red","border":"2px solid blue"});
			$("h1").nextUntil("p.first").css({"color":"red","border":"2px solid blue"});
		});
	</script> -->

	<!-- prev() and prev() custom -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("h1").prev().css({"color":"red","border":"2px solid blue"});
			$("h1").prev("p").css({"color":"red","border":"2px solid blue"});
		});
	</script> -->

	<!-- prevAll() and prevAll() custom -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			//$("h1").prevAll().css({"color":"red","border":"2px solid blue"});
			$("h1").prevAll("p").css({"color":"red","border":"2px solid blue"});
		});
	</script> -->

	<!-- prevUntil() and prevUntil() custom -->
	<script type="text/javascript">
		$(document).ready(function(){
			//$("h1").prevUntil().css({"color":"red","border":"2px solid blue"});
			$("h1").prevUntil("p").css({"color":"red","border":"2px solid blue"});
		});
	</script>
</head>
<body>
	<div class="siblings">
		<div>Div Parent Tag
			<p class="first">P Tag</p>
			<span>Span</span>
			<h1>H1</h1>
			<h2>H2</h2>
			<h3>H3</h3>
			<h2>H2</h2>
			<p class="second">P</p>
			<p class="first">P new </p>
		</div>
	</div>
</body>
</html>