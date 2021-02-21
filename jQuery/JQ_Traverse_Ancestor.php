<!DOCTYPE html>
<html>
<head>
	<style>
		.ancestors *{
			display: block;
			border: 2px solid lightgray;
			color: lightgray;
			padding: 5px;
			margin: 15px;
		}
	</style>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	
	<!-- parent() -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("span").parent().css({"color":"red","border":"1px solid blue"});
		});
	</script> -->

	<!-- parents() -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("span").parents().css({"color":"red","border":"1.5px solid red"});
		});
	</script>
 -->
	<!-- parents() custom -->
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("span").parents("ul").css({"color":"blue","border":"1.5px solid blue"});
		});
	</script> -->

	<!-- parentsUntil() -->
	<script type="text/javascript">
		$(document).ready(function(){
			$("span").parentsUntil("div").css({"color":"blue","border":"1.5px solid blue"});
		});
	</script>

</head>
<body>
<!-- <body class="ancestors"> -->
	<div class="ancestors">
		<div style="width: 500px;">Div tag (Great-Grand parent)
			<ul>Ul tag (Grand parent)
				<li>li (Direct Parent)
					<span>span</span>
				</li>
			</ul>
		</div>

		<div style="width: 500px;">Div Tag2
			<p>P Direct Parent
				<span>span</span>
			</p>
		</div>
		<!-- <div style="width: 500px;">Div Tag3
			<ul>ul (Grand Parent)
				<li>Li tag (Direct-parent)
					<span>span</span>
				</li>
			</ul>
		</div> -->
	</div>
</body>
</html>