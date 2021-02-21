<?php
$dir = "C:/xampp/htdocs/CREST/PHP/Directory";

// Sort in ascending order - this is default
$a = scandir($dir);

// Sort in descending order
$b = scandir($dir,1);

print_r($a);
print_r($b);
?>