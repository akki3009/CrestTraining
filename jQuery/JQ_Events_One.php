<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("p").one("click", function(){
    $(this).animate({fontSize: "+=6px"});
  });
});
</script>
</head>
<body>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<p>Click any p element to increase its text size. The event will only trigger once for each p element.</p>

</body>
</html>