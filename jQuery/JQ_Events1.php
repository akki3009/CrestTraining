<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("input").focus(function(){
				$(this).css("background-color","lightblue");
			});
			$("input").blur(function(){
				$(this).css("background-color","lightgreen");
			});
			$("input").mouseenter(function(){
				alert("You Enter on input");
			});
		});
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$("p").on({
				mouseenter:function(){
					$(this).css("background-color","lightgrey");
				},
				mouseleave:function(){
					$(this).css("background-color","lightblue");
				},
				click:function(){
					$(this).css("background-color","pink");
				}
			});
		});
	</script>
</head>
<body><br>
	FullName : <input type="text" name="fname"><br><br>
	Email : <input type="email" name="email"><br><br>

	<br><br>
	<b>On() Method</b>
	<p>On Method Paragraph</p>
	<p>On Method Paragraph1</p>
	<p>On Method Paragraph2</p>
</body>
</html>