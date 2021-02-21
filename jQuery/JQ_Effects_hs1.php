<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $(".ex .hide").click(function(){
    $(this).parents(".ex").hide("slow");
  });
});
</script>
<style> 
div.ex {
  background-color: #e5eecc;
  padding: 7px;
  border: solid 1px #c3c3c3;
}
</style>
</head>
<body>

<h3>Island Trading</h3>

<div class="ex">
  <button class="hide">Hide me</button>
  <p>Contact: Helen Bennett<br> 
  Garden House Crowther Way<br>
  London</p>
</div>

<h3>Paris Specialities</h3>

<div class="ex">
  <button class="hide">Hide me</button>
  <p>Contact: Marie Bertrand<br> 
  265, Boulevard Charonne<br>
  Paris</p>
</div>

</body>
</html>
