<!DOCTYPE html>
<html>
<body>

<h2>JavaScript HTML DOM</h2>

<p>Hello World!</p>
<p>Hello Norway!</p>

<p id="demo"></p>
<script>
var myCollection = document.getElementsByTagName("p");
document.getElementById("demo").innerHTML =
"The innerHTML of the second paragraph is: " +
myCollection[1].innerHTML;
</script>

<p id="demo1"></p>
<script>
var myCollection = document.getElementsByTagName("p");
document.getElementById("demo1").innerHTML = 
"This document contains " + myCollection.length + " paragraphs.";
</script>

</body>
</html>