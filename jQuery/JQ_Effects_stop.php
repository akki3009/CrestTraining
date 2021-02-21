<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("#flip").click(function(){
				$("#panel").slideDown(5000);
			});
			$("#stop").click(function(){
				$("#panel").stop();
			});
		});
	</script> -->

	<!-- Start stop and all -->
	<script type="text/javascript">
		$(document).ready(function(){
			$("#start").click(function(){
				$("div").animate({left:'100px'},5000);
				$("div").animate({fontSize:'3em'},5000);
			});
			$("#stop").click(function(){
				$("div").stop();
			});
			$("#stop1").click(function(){
				$("div").stop(true);
			});
			$("#stop2").click(function(){
				$("div").stop(true,true);
			});
		});
	</script>
	<!-- <style type="text/css">
		#panel,#flip{
			padding: 5px;
		  	font-size: 18px;
		  	text-align: center;
		  	background-color: #555;
		  	color: white;
		  	border: solid 1px #666;
		  	border-radius: 3px;
		}
		#panel{
			padding: 50px;
			display: none;
		}
	</style> -->
</head>
<body>
	<!-- <button id="stop">Stop sliding</button>
	<div id="flip">Click to slide down panel</div>
	<div id="panel">Hello world!</div> -->

	<button id="start">Start </button>
	<button id="stop">Stop </button>
	<button id="stop1">Stop All</button>
	<button id="stop2">Stop but finish</button><br><br>
	<div style="background-color: #98bf21 ;height: 100px;width: 200px;position: absolute;">Hello</div>
</body>
</html>