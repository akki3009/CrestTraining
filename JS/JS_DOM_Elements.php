<!DOCTYPE html>
<html>
<body>

<h2>Finding HTML Elements by Id</h2>

<p id="intro">Hello World!</p>
<p>This example demonstrates the <b>getElementsById</b> method.</p>

<p id="demo"></p>

<script>
var myElement = document.getElementById("intro");
document.getElementById("demo").innerHTML = 
"The text from the intro paragraph is " + myElement.innerHTML;
</script>
<b>Tag Name</b>
<p>Hello World!</p>
<p>This example demonstrates the <b>getElementsByTagName</b> method.</p>
<p id="demo1"></p>
<script>
var x = document.getElementsByTagName("p");
document.getElementById("demo1").innerHTML = 
'The text in first paragraph (index 0) is: ' + x[0].innerHTML;
</script>


<b>Class Name</b>
<p class="intro">The DOM is very useful.</p>
<p class="intro">This example demonstrates the <b>getElementsByClassName</b> method.</p>

<p id="demo2"></p>

<script>
var x = document.getElementsByClassName("intro");
document.getElementById("demo2").innerHTML = 
'The first paragraph (index 0) with class="intro": ' + x[0].innerHTML;
</script>
</body>
</html>
