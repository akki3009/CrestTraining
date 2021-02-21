<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- <script>
		$(document).ready(function(){
			$("button").click(function(){
				$("h1, h2, p").addClass("blue");
				$("a").addClass("red");
				$("div").addClass("important");
			});
		});
	</script> -->

	<!-- Remove Class -->
	<!-- <script>
		$(document).ready(function(){
			$("button").click(function(){
				$("h1, h2, p").removeClass("blue");
				$("a").removeClass("red");
			});
		});
	</script> -->

	<!-- Toggle Class -->
	<script>
		$(document).ready(function(){
			$("button").click(function(){
				$("h1, h2, p").toggleClass("blue");
				$("a").toggleClass("red");
			});
		});
	</script>

	<style>
	.important {
	  font-weight: bold;
	  font-size: xx-large;
	}
	.blue {
	  color: blue;
	}
	.red{
		color: red;
		font-size: 28px;
	}
	</style>
</head>
<body>
	<!-- <h1>Heading 1st tag</h1>
	<h2>Heading 2nd tag</h2>
	<p>This is new Add class</p>
	<p>This is new Added class</p>
	<a href="#">Hello</a> -->
	
	<!-- <h1 class="blue">Heading 1st tag</h1>
	<h2 class="blue">Heading 2nd tag</h2>
	<p class="blue">This is new Add class</p>
	<p class="blue">This is new Added class</p>
	<a href="#" class="red">Hello</a><br><br>
	<div>This is add classs div tag</div><br> -->

	<h1 >Heading 1st tag</h1>
	<h2 >Heading 2nd tag</h2>
	<p >This is new Add class</p>
	<p>This is new Added class</p>
	<a href="#">Hello</a><br><br>
	<!-- <button>Add classes</button> -->
	<!-- <button>Remove classes</button> -->
	<button>Toggle classes</button>


</body>
</html>
