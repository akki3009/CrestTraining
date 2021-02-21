<html>
<head>
	<style>
		p {
			margin: 8px; 
			font-size: 16px; 
		}
		.w3r_font_color{
			color: red; 
		}
		.w3r_background { 
			background: yellow; 
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("p").last().addClass("w3r_font_color");
		});
	</script>
</head>
<body>
	<p>PHP</p>
	<p>Java</p>
	<p>Python</p>
</body>
</html>