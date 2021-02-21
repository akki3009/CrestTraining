<?php
echo "<h3>GCD Program</h3><br>";  
  $p = $x = 30;
  $q = $y = 36;
  while ($x != $y)
  {
    if ($x > $y)
      $x = $x - $y;
    else
      $y = $y - $x;
  }

  echo "GCD of $p and $q is: $x";
?>

<!-- OUTPUT
	GCD of 20 and 25 is: 5
 -->