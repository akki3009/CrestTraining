<!DOCTYPE html>
<html>
<body>

<h3>The window.location object</h3>
<br><br>
<b>window.location.href</b>
<p id="loch"></p>
<script>
document.getElementById("loch").innerHTML = 
"The full URL of this page is:<br>" + window.location.href;
</script>

<b>window.location.hostname</b>
<p id="locho"></p>
<script>
document.getElementById("locho").innerHTML = 
"The Hostname of this page is:<br>" + window.location.hostname;
</script>

<b>window.location.pathname</b>
<p id="locp"></p>
<script>
document.getElementById("locp").innerHTML = 
"The Pathname of this page is:<br>" + window.location.pathname;
</script>

<b>window.location.protocol</b>
<p id="locpr"></p>
<script>
document.getElementById("locpr").innerHTML = 
"The Protocol of this page is:<br>" + window.location.protocol;
</script>

<b>window.location.port</b>
<p id="locport"></p>
<script>
document.getElementById("locport").innerHTML = 
"The Port of this page is:<br>" + window.location.port;
</script>

<b>window.location.assign</b><br><br>
<input type="button" value="Load Document New" onclick="newdoc()">
<script>
	function newdoc() {
		window.location.assign("https://www.w3schools.com")
	}
</script>


</body>
</html>
