<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Alert</h2>

<button onclick="myFunction()">Alert</button>

<script>
function myFunction() {
  alert("I am an alert box!");
}
</script>

<br><br>
<button onclick="myFunction1()">Press</button>

<p id="demo"></p>

<script>
function myFunction1() {
  var txt;
  if (confirm("Press a button!")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

<button onclick="myFunction2()">Prompt</button>
<p id="prompt"></p>
<script>
function myFunction2() {
  var txt;
  var person = prompt("Please enter your name:", "Harry Potter");
  if (person == null || person == "") {
    txt = "User cancelled the prompt.";
  } else {
    txt = "Hello " + person + "! How are you today?";
  }
  document.getElementById("prompt").innerHTML = txt;
}
</script>

</body>
</html>
