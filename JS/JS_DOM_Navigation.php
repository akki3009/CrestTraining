<!DOCTYPE html>
<html>
<body>

<p>Hello World!</p>

<div>
<p>The DOM is very useful!</p>
<p>This example demonstrates the <b>document.body</b> property.</p>
</div>

<script>
alert(document.body.innerHTML);
alert(document.documentElement.innerHTML);
</script>

<h1 id="id01">My First Page</h1>
<p id="id02"></p>

<script>
document.getElementById("id01").innerHTML = document.getElementById("id02").nodeName;
</script>

</body>
</html>