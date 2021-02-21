<?php

echo "<h3>Date: 1st January, 2013</h3>";
$sun_info=date_sun_info(strtotime("2013-01-01"),31.7667,35.2333);
foreach ($sun_info as $key=>$val)
  {
  echo "$key: " . date("H:i:s",$val) . "<br>";
  }

echo "<h3>Date: 1st June, 2013</h3>";
$sun_info=date_sun_info(strtotime("2013-06-01"),31.7667,35.2333);
foreach ($sun_info as $key=>$val)
  {
  echo "$key: " . date("H:i:s",$val) . "<br>";
  }

?>