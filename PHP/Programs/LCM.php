<?php
echo "<h3>LCM Program</h3><br>";  
  $p = $x = 20;
  $q = $y = 25;
  while ($x != $y)
  {
    if ($x > $y)
      $x = $x - $y;
    else
      $y = $y - $x;
  }

  $lcm = ($p*$q)/$x;
  echo "LCM of $p and $q is: $lcm";
?>

<!-- OUTPUT
LCM of 20 and 25 is: 100
 -->