<!DOCTYPE html>
<html>
<body>
<?php
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars)."<br>";
foreach ($cars as $key) {
	echo "$key <br>";
}
echo "<br>";
echo "<br>";

?>

<!-- Indexed Array -->
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>


<!-- Associative Array -->
<?php
echo "<br>";
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

echo "<br>";
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $x_value) {
  echo "Name=" . $x . ", Age=" . $x_value;
  echo "<br>";
}
?>

<!-- Multidimensional Array -->
<?php
echo "<br>";
echo "<br>";

$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
  
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

for($row=0;$row <4;$row++){
	echo "<p><b>Row Number $row</b></p>";
	echo "<ul>";
	for ($col=0; $col < 3; $col++) { 
		echo "<li>".$cars[$row][$col]."</li>";
	}
	echo "</ul>";
}
?>

<!-- Sortin Array -->
<?php
echo "<br>";
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
foreach ($cars as $car) {
	echo "$car <br>";
}
?>
<!-- rsort reverse sort -->
<?php
echo "<br>";
echo "<br>";
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
foreach ($cars as $car) {
	echo "$car <br>";
}
?>

<!-- asort Ascending Sort According to value-->
<?php
echo "<br>";
echo "<br>";
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>

<!-- ksort Ascending Sort According to key-->
<?php
echo "<br>";
echo "<br>";
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
</body>
</html>