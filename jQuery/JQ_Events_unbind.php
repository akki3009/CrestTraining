<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("p").click(function(){
    $(this).slideToggle();
  });
  $("button").click(function(){
    $("p").unbind();
  });
});
</script>
</head>
<body>

<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
<p>Click any p element to make it disappear.</p>

<button>Remove all event handlers for all p elements</button>

</body>
</html>
