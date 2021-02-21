<!DOCTYPE html>
<html>
<head>
	<title>Events in JS</title>
</head>
<body>
	<button onclick="document.getElementById('demo').innerHTML = Date()">The Time is?</button>
	<p id="demo"></p>
	<button onclick="this.innerHTML=Date()">Click Me!</button><br><br>

	<button onclick="displayDate()">Click!</button>
	<p id="demo1"></p>
	<script type="text/javascript">
		function displayDate() {
				document.getElementById('demo1').innerHTML=Date();
			}	
	</script>


	<p><b>OnChange Event</b></p>
	Enter Your Name:<input type="text" id="fname" onchange="myFunction()"><br><br>
	<script type="text/javascript">
		function myFunction() {
			var x=document.getElementById('fname');
			x.value=x.value.toUpperCase();
		}
	</script>

	Enter some text <input type="text" name="txt" value="Hello" onchange="myFunct(this.value)">
	<script type="text/javascript">
		function myFunct(val){
			alert("The input value has changed.The new value is :" + val);
		}
	</script>

	<p><b>OnMouseOver Event</b></p>
	<p id="mouse">MouseOver Me</p>
	<script type="text/javascript">
		document.getElementById('mouse').onmouseover=function(){mouseOver()};
		document.getElementById('mouse').onmouseout=function(){mouseOut()};

		function mouseOver() {
			document.getElementById('mouse').style.color= "green";
		}
		function mouseOut(){
			document.getElementById('mouse').style.color= "black";
		}
	</script>

	<p><b>OnKey Down</b></p>
	<input type="text" onkeydown="myFunction()">
	<script type="text/javascript">
		function myFunction(){
			alert("You are press key on filed");
		}
	</script>

	<p><b>OnPage Load</b></p>
	<script type="text/javascript">
		function myFunction(){
			alert("Page is Loaded");
		}
	</script>
	<iframe id="myFrame" src="/"></iframe>
	<p id="demo11"></p> 
	<script>
		document.getElementById("myFrame").onload = function() {myFunction()};
		function myFunction() {
		  document.getElementById("demo11").innerHTML = "Iframe is loaded.";
		}
	</script>
</body>
</html>