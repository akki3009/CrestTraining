<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script> 
    $(document).ready(function(){
      $("#start").click(function(){
        var div = $("div");  
        div.animate({height: 300}, "slow");
        div.animate({width: 300}, "slow");
        div.queue(function(){
          div.css("background-color", "red");  
          div.dequeue();
        });
        div.animate({height: 100}, "slow");
        div.animate({width: 100}, "slow");
    });
  });
  </script> 
</head>
<body>
<p>The dequeue() method executes them in order. </p>

<p><button id="start">Start Animation</button></p>

<div style="background:blue;height:100px;width:100px;">
</div>
</body>
</html>
