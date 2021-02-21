<?php
$str = "If you divide 4 by 2 you'll get 2";
$format = sscanf($str,"%s %s %s %d %s %d %s %s %c");
print_r($format);
?>