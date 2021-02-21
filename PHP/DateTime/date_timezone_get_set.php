<br>
<?php

$date=date_create(null,timezone_open("Europe/Paris"));
$tz=date_timezone_get($date);
echo timezone_name_get($tz);
?>

<br>
<?php
$date=date_create("2013-05-25",timezone_open("Indian/Kerguelen"));
echo date_format($date,"Y-m-d H:i:sP") . "<br>";

date_timezone_set($date,timezone_open("Europe/Paris"));
echo date_format($date,"Y-m-d H:i:sP");
?>