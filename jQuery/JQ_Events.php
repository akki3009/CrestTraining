<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			// $("p").dblclick(function(){
			// $("#p1").mouseenter(function(){
			// $("#p2").mouseleave(function(){
			// $("#p3").mousedown(function(){
			$("#p4").mouseup(function(){
				// $(this).hide();
				// alert("You enter P1");
				// alert("Bye, U leave P2");
				// alert("Mouse Down Over P3");
				alert("Mouse Up Over P4");
			});
		});
	</script>

	<!-- Hover Event -->
	<script type="text/javascript">
		$(document).ready(function(){
			$("#hov").hover(function(){
				alert("You Hover P5");
			},
			function(){
				alert("Bye! U leave P5");
			});
		});
	</script>
</head>
<body>
	<p>If you double-click on me, I will disappear.</p>
	<p>Click me away!</p>
	<p>Click me too!</p>
	<p id="p1">Enter This Paragraph</p>
	<p id="p2">Paragraph For Mouse Leave</p>
	<p id="p3">Paragraph For Mouse Down</p>
	<p id="p4">Paragraph For Mouse Up</p>
	<p id="hov">Paragraph For Hover</p>
</body>
</html>