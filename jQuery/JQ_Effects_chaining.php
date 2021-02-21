<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script>
$(document).ready(function(){
  $("button").click(function(){
    $("#p1").css("color", "red").slideUp(2000).slideDown(2000);
  });
});
</script> -->
<script type="text/javascript">
	$(document).ready(function(){
		$("button").click(function(){
			$("#p1").css('color','red')
			.slideToggle(2000);
		});
	});
</script>
</head>
<body>

<p id="p1">The New Content</p>
<button>Jquery Func!!</button>

</body>
</html>