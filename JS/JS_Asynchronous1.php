<!DOCTYPE html>
<html>
<body>

<h2>JavaScript setInterval()</h2>

<p>Using setInterval() to display the time every second (1000 milliseconds).</p>

<h1 id="demo"></h1>

<!-- <script>
setInterval(myFunction, 1000);

function myFunction() {
  let d = new Date();
  document.getElementById("demo").innerHTML=
  d.getHours() + ":" +
  d.getMinutes() + ":" +
  d.getSeconds();
}
</script> -->

<script>
function myDisplayer(some) {
  document.getElementById("demo").innerHTML = some;
}

function getFile(myCallback) {
  let req = new XMLHttpRequest();
  req.open('GET', "mycar.html");
  req.onload = function() {
    if (req.status == 200) {
      myCallback(this.responseText);
    } else {
      myCallback("Error: " + req.status);
    }
  }
  req.send();
}

getFile(myDisplayer); 
</script>

</body>
</html>
