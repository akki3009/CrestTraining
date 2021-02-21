<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- <script> 
$(document).ready(function(){
  $("button").click(function(){
    var div = $("div");
    div.animate({height: '300px', opacity: '0.4'}, "slow");
    div.animate({width: '300px', opacity: '0.8'}, "slow");
    div.animate({height: '100px', opacity: '0.4'}, "slow");
    div.animate({width: '100px', opacity: '0.8'}, "slow");
  });
});
</script>  -->
<script type="text/javascript">
	$(document).ready(function(){
		$("button").click(function(){
			var div=$("div");
			div.animate({left : '100px'},"slow");
			div.animate({fontSize : '3em'},"slow");
		});
	});
</script>
</head>
<body>

<button>Start Animation</button>
<p><b>For Cueue Animating</b></p>
<div style="background:#98bf21;height:100px;width:200px;position:absolute;">HELLO</div>

</body>
</html>
