<?php
echo "<br>";
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
echo "<br>";
?>


<!-- Arrays -->
<?php
echo "<br>";
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>

<!-- Globals -->
<?php
echo "<br>";
define("GRETING", "Welcome to W3Schools.com!");

function myTest() {
  echo GRETING;
}
 
myTest();
?>
