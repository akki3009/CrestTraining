<br>
<?php
$number = 9;
$str = "Beijing";
$file = fopen("test.txt","w");
echo fprintf($file,"There are %u million bicycles in %s.",$number,$str);
?>

<br>
<?php
$number = 123;
$file = fopen("test.txt","w");
fprintf($file,"%f",$number);
?>
<br>

<?php
$number = 123;
$file = fopen("test.txt","w");
fprintf($file,"With 2 decimals: %1\$.2f
\nWith no decimals: %1\$u",$number);
?>