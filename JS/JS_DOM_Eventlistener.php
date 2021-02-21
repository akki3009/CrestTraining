<!DOCTYPE html>
<html>
<body>

<h2>JavaScript addEventListener()</h2>

<button id="myBtn">Try it</button>
<p id="demo"></p>
<script>
document.getElementById("myBtn").addEventListener("click", displayDate);

function displayDate() {
  document.getElementById("demo").innerHTML = Date();
}
</script>
<button id="btn1">Click</button>
<script type="text/javascript">
	document.getElementById('btn1').addEventListener('click',function(){
		alert("Hello Good Friends");
	});
</script>
<br><br>

<button id="myBtn1">Event</button>

<p id="demo1"></p>

<script>
var x = document.getElementById("myBtn1");
x.addEventListener("mouseover", myFunction);
x.addEventListener("click", mySecondFunction);
x.addEventListener("mouseout", myThirdFunction);

function myFunction() {
  document.getElementById("demo1").innerHTML += "Moused over!<br>";
}

function mySecondFunction() {
  document.getElementById("demo1").innerHTML += "Clicked!<br>";
}

function myThirdFunction() {
  document.getElementById("demo1").innerHTML += "Moused out!<br>";
}
</script>

<p id="demo2"></p>

<script>
window.addEventListener("resize", function(){
  document.getElementById("demo2").innerHTML = Math.random();
});
</script>

<button id="myBtn2">Try it</button>
<p id="demo3"></p>
<script>
var p1 = 5;
var p2 = 7;

document.getElementById("myBtn2").addEventListener("click", function() {
  myFunction(p1, p2);
});

function myFunction(a, b) {
  var result = a * b;
  document.getElementById("demo3").innerHTML = result;
}
</script>
</body>
</html> 
