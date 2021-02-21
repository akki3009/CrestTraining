<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $("#start").click(function(){
        $("div").animate({height : 300},3000);
        $("div").animate({width : 300},3000);
      });
      $("#complete").click(function(){
        $("div").finish();
      });
    });
  </script> 
</head>
<body>
<p></p>
<button id="start">Start Animation</button>
<button id="complete">Finish Animation</button>

<div style="background:#98bf21;height:100px;width:100px;"></div>
</body>
</html>
