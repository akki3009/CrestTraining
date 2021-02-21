<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Scope</h2>

<p id="demo1"></p>
<p id="demo2"></p>

<script>
myFunction();

function myFunction() {
  var carName = "Volvo";
  document.getElementById("demo1").innerHTML = typeof carName + " " + carName;
}
document.getElementById("demo2").innerHTML = typeof carName;
</script>

<p id="demo"></p>
<script>
var carName = "Volvo";
myFunction();

function myFunction() {
  document.getElementById("demo").innerHTML = "I can display " + carName;
}
</script>
</body>
</html>
