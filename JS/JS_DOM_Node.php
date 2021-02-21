<!DOCTYPE html>
<html>
<body>

<div id="div1">
<p id="p1">This is a paragraph.</p>
<p id="p2">This is another paragraph.</p>
</div>

<script>
var para = document.createElement("p");
var node = document.createTextNode("This is new.");
para.appendChild(node);
var element = document.getElementById("div1");
element.appendChild(para);
</script>

<b>Remove Element</b>
<div>
<p id="p">This is a paragraph.</p>
<p id="p_1">This is another paragraph.</p>
</div>

<button onclick="myFunction()">Remove Element</button><br><br>
<script>
function myFunction() {
  var elmnt = document.getElementById("p");
  elmnt.remove();
}
</script>

<b>Remove Child Node</b>
<div id="div2">
<p id="p11">This is a paragraph.</p>
<p id="p2">This is another paragraph.</p>
</div>

<script>
var parent = document.getElementById("div2");
var child = document.getElementById("p11");
parent.removeChild(child);
</script>

</body>
</html>
