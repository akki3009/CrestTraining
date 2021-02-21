<!-- Pi Function -->
<?php
echo "<br>";
echo(pi());
?>

<!-- MIn() and Max() -->
<?php
echo "<br>";
echo "Minimum number : ".(min(-5,10,15,500,25,-50));
echo "<br>";
echo "maximum number : ".(max(-5,10,15,500,5010,25,-50));
echo "<br>";
?>

<!-- Absolute() return absolute positive  -->
<?php
echo "Absolute number : ".(abs(-6.7));
?>

<!-- sqrt() -->
<?php
echo "<br>";
echo "Square root is : ".(sqrt(64));
echo "<br>";
?>

<!-- Round() -->
<?php
echo "Round  is : ".(round(0.60));  // returns 1
echo "Round is : ".(round(0.49));  // returns 0
echo "<br>";
?>

<!-- Random -->
<?php
echo "Random number is : ".(rand());
echo "<br>";
echo "Random number is : ".(rand(10,100));
?>