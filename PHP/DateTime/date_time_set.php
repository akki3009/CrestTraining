<?php
echo "<br>";
$date=date_create("2013-05-01");

date_time_set($date,13,24);
echo date_format($date,"Y-m-d H:i:s") . "<br>";

date_time_set($date,12,20,55);
echo date_format($date,"Y-m-d H:i:s");
?>