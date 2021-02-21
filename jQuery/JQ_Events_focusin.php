<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("div").focusin(function(){
    $(this).css("background-color", "#FFFFCC");
  });
  $("div").focusout(function(){
    $(this).css("background-color", "#FFFFFF");
  });
});
</script>
</head>
<body>

<div style="border: 1px solid black;padding:10px;">
  First name: <input type="text"><br>
  Last name: <input type="text">
</div>

<p>Click an input field to get focus. Click outside an input field to lose focus.</p>

</body>
</html>