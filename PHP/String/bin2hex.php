<?php 
$str = bin2hex("Hello World!");
echo($str); 
?>

<?php
$str = crc32("Hello World!");
printf("%u\n",$str);
?> 