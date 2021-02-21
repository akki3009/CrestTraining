<!DOCTYPE html>
<html>
<body>

<h1 id="id01">Old Heading</h1>

<script>
var element = document.getElementById("id01");
element.innerHTML = "New Heading";
</script>

<p>JavaScript changed "Old Heading" to "New Heading".</p>

<b>Image </b><br><br>
<img id="image" src="smiley.gif" width="160" height="120">

<script>
document.getElementById("image").src = "img_car.jpg";
</script>
</body>
</html> 
