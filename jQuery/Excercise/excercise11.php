<!-- Using jQuery insert some HTML after all paragraphs. -->

<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#btn1").click(function(){
				$("p").append("<b> Hello Good Afternoon </b>");
			});
		});
	</script>
</head>
<body>
	<p>This is Paragraph</p>
	<p>This is Second Paragraph</p>
	
	<button id="btn1">Set HTML</button>
</body>
</html>