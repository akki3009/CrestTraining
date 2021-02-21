<!DOCTYPE html>
<html>
<body>

<h2>JavaScript Date Object</h2>
<p id="demo"></p>
<p id="demo1"></p>

<script>
var myDate = new Date();
document.getElementById("demo").innerHTML = isDate(myDate);
function isDate(myDate) {
  return myDate.constructor.toString().indexOf("Date") > -1;
}

var fruits = ["Banana", "Orange", "Apple", "Mango"];
document.getElementById("demo1").innerHTML = isArray(fruits);

function isArray(myArray) {
  return myArray.constructor.toString().indexOf("Array") > -1;
}
</script>

</body>
</html>