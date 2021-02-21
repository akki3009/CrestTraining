<?php
$date=date_create("2013-03-15 23:40:00",timezone_open("Europe/Oslo"));
echo date_format($date,"Y/m/d H:iP");
?>