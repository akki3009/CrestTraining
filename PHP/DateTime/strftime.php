<br>
<?php
echo(strftime("%B %d %Y, %X %Z",mktime(20,0,0,12,31,98))."<br>");

setlocale(LC_ALL,"hu_HU.UTF8");
echo(strftime("%Y. %B %d. %A. %X %Z"));
?>

<!-- <?php
$format="%d/%m/%Y %H:%M:%S";
$strf=strftime($format);
echo($strf);
print_r(strptime($strf,$format));
?> -->