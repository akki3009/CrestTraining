<!-- Blink text using jQuery -->

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			var txt =$(window).width();
			for(i=0;i<txt;i++)
				$("p").fadeOut(500).fadeIn(500);
				// $("p").fadeTo(100,0.1).fadeTo(100,0.8);
		});
	</script>
</head>
<body>
	<p>Hello</p>
	<!-- <button>Blink</button> -->
</body>
</html>