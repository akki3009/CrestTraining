<!-- String -->
<?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
echo "<br>";
?>

<!-- Integer -->
<?php
$x=52425;
echo "<br>";
var_dump($x);
echo "<br>";
?>

<!-- float-->
<?php
$x = 10.365;
var_dump($x);
echo "<br>";
?>

<!-- Array -->
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";
print_r($cars);
echo "<br>";
?>

<!-- Object -->
<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
  	// print($this->color);exit();
  	// print($this->model);exit();
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>

<!-- NUll -->
<?php
echo "<br>";
$x = "Hello world!";
$x = null;
var_dump($x);
?>