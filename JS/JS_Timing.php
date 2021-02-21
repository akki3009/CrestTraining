<!DOCTYPE html>
<html>
<body>

<button onclick="setTimeout(myFunction, 3000);">Try it</button>

<script>
function myFunction() {
  alert('Hello');
}
</script>

<br><br>
<button onclick="myVar = setTimeout(myFunction1, 3000)">Try it</button>

<button onclick="clearTimeout(myVar)">Stop it</button>

<script>
function myFunction1() {
  alert("Hello");
}
</script>

<br><br>
<p id="time"></p>
<script>
var myVar = setInterval(myTimer, 1000);

function myTimer() {
	var d = new Date();
	document.getElementById("time").innerHTML = d.toLocaleTimeString();
}
</script>

<br><br>
<p id="timee"></p>

<button onclick="clearInterval(myVar)">Stop time</button>

<script>
var myVar = setInterval(myTimer ,1000);
function myTimer() {
	var d = new Date();
	document.getElementById("timee").innerHTML = d.toLocaleTimeString();
}
</script>

</body>
</html>