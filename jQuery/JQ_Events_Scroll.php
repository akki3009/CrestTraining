<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
var x = 0;
$(document).ready(function(){
  $("div").scroll(function(){
    $("span").text( x+= 1);
  });
});
</script>
</head>
<body>

<p>Try the scrollbar in the div</p>

<div style="border:1px solid black;width:200px;height:100px;overflow:scroll;">In my younger and more vulnerable years my father gave me some advice that I've been turning over in my mind ever since.
<br><br>
'Whenever you feel like criticizing anyone,' he told me, just remember that all the people in this world haven't had the advantages that you've had.'
</div>

<p>Scrolled <span>0</span> times.</p>

</body>
</html>
