<?php
echo "<br>";
$cars=array("Volvo","BMW","Toyota");
echo count($cars);
echo "<br>";
echo sizeof($cars);
echo "<br>";
?>

<?php
$cars=array
   (
   "Volvo"=>array
   (
   "XC60",
   "XC90"
   ),
   "BMW"=>array
   (
   "X3",
   "X5"
   ),
   "Toyota"=>array
   (
   "Highlander"
   )
   ); 
echo "Normal count: " . count($cars)."<br>";
echo "Recursive count: " . count($cars,1);
echo "<br>";
echo "Normal count: " . sizeof($cars)."<br>";
echo "Recursive count: " . sizeof($cars,1);
?>