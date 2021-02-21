<!-- Border around all list items that are children of a specified class of an unordered list. -->

<!DOCTYPE html>
<html>
<head>
	<style>
		.import{
			display: block;
			border: 1px solid;
		}
	</style>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("ul.test li").addClass("import");
		});
	</script>
</head>
<body>
	<ul class="test">
		<li>Java</li>
		<li>PHP</li>
		<li>Bootstrap</li>
	</ul>
	<ul>
		<li>Php</li>
		<li>JS</li>
		<li>Jquery</li>
	</ul>
</body>
</html>