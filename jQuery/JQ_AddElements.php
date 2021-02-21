<!DOCTYPE html>
<html>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("#btn1").click(function(){
				$("p").append("<b>Append new Text</b>");
			});
			$("#btn2").click(function(){
				$("ol").append("<li>Append new Item</li>");
			});
		});
	</script> -->

	<!-- Prepend -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("#btn1").click(function(){
				$("p").prepend("<b>Prepended Text.</b>");
			});
			$("#btn2").click(function(){
				$("ol").prepend("<li>Prepended Item</li>");
			});
		});
	</script> -->

	<!-- after And Before -->
	<script type="text/javascript">
		$(document).ready(function(){
			$("#btn1").click(function(){
				$("img").before("<b>Before.</b>");
			});
			$("#btn2").click(function(){
				$("img").after("<i>After</i>");
			});
		});
	</script>
</head>
<body>

	<!-- <p>The Old paragraph.</p>
	<p>The oldest paragraph.</p>

	<ol>
	  <li>List item 1</li>
	  <li>List item 2</li>
	  <li>List item 3</li>
	</ol> -->

	<img src="images.jpg" width="180px" height="180px"><br><br>
	<button id="btn1">Before text</button>
	<button id="btn2">After text</button>

</body>
</html>
