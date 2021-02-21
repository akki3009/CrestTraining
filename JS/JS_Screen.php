<!DOCTYPE html>
<html>
<body>

<p id="demow"></p>
<p id="demoh"></p>
<p id="demoaw"></p>
<p id="demoah"></p>
<p id="democ"></p>
<p id="demop"></p>

<script>
document.getElementById("demow").innerHTML = 
"Screen Width is " + screen.width;
document.getElementById("demoh").innerHTML = 
"Screen Height is " + screen.height;
document.getElementById("demoaw").innerHTML = 
"Screen Available Width is " + screen.availWidth;
document.getElementById("demoah").innerHTML = 
"Screen Available Height is " + screen.availHeight;
document.getElementById("democ").innerHTML =
"Screen Color Depth: " + screen.colorDepth;
document.getElementById("demop").innerHTML =
"Screen Pixel Depth: " + screen.pixelDepth;
</script>

</body>
</html>