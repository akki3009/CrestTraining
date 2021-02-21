<!-- Given a paragraph and a button. Add some css to paragraph using class. On click of button,remove all CSS classes of paragraph using jQuery. -->

<!DOCTYPE html>
<html>
<head>
	<style>
		.p {
			background-color: blue;
			padding: 7px;
			color: white;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("button").click(function(){
				$("p").removeClass("p");
			});
		});
	</script>
</head>
<body>
	<p class="p">If the limit is set to 10, then the user should be allowed to add only 10 characters</p>
	<button>Remove Css</button>
</body>
</html>