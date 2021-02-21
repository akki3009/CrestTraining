<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				var text="";
				text+="Width of Div :"+$("#div1").width()+"<br>";
				text += "Height of Div :"+$("#div1").height()+"<br>";
				$("#div1").html(text);
			});
		});
	</script> -->

	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				var text="";
				text+="Width of Div :"+$("#div1").width()+"<br>";
				text += "Height of Div :"+$("#div1").height()+"<br>";
				text+="Inner Width of Div :"+$("#div1").innerWidth()+"<br>";
				text+="Inner Height of Div :"+$("#div1").innerHeight()+"<br>";
				$("#div1").html(text);
			});
		});
	</script> -->

	<!-- Outer Width -->

	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				var text="";
				text+="Width of Div :"+$("#div1").width()+"<br>";
				text += "Height of Div :"+$("#div1").height()+"<br>";
				text+="Outer Width of Div :"+$("#div1").outerWidth()+"<br>";
				text+="Outer Height of Div :"+$("#div1").outerHeight()+"<br>";
				$("#div1").html(text);
			});
		});
	</script> -->

	<!-- outerHeight with margin-->
	<!-- <script>
		$(document).ready(function(){
			$("button").click(function(){
				var txt = "";
	    		txt += "Width of div: " + $("#div1").width() + "</br>";
			    txt += "Height of div: " + $("#div1").height() + "</br>";
			    txt += "Outer width of div (margin included): " + $("#div1").outerWidth(true) + "</br>";
			    txt += "Outer height of div (margin included): " + $("#div1").outerHeight(true);
			    $("#div1").html(txt);
			});
		});
	</script> -->

	<!-- Check document and window dimension -->
	<!-- <script>
		$(document).ready(function(){
			$("button").click(function(){
				var txt = "";
				txt += "Document width/height: " + $(document).width();
			    txt += "x" + $(document).height() + "\n";
			    txt += "Window width/height: " + $(window).width();
			    txt += "x" + $(window).height();
			    alert(txt);
			});
		});
	</script> -->

	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$("#div1").width(500).height(500);
				var txt="";
				txt += "The New Width is :" + $("#div1").width() +"<br>";
				txt += "The New Height is :" + $("#div1").height() +"<br>";
				$("#div1").html(txt);
			})
		})
	</script>
	<style>
		#div1{
			height: 125px;
			width: 400px;
			padding: 10px;
			margin: 3px;
			border: 1px solid blue;
			background-color: skyblue;
		}
	</style>
</head>
<body>
	<div id="div1"></div>
	<button>Display width and height</button>
</body>
</html>