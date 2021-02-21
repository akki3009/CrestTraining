<?php
$date=date_create();
date_timestamp_set($date,1371803321);
echo date_format($date,"U = Y-m-d H:i:s");
?>