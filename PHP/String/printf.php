<br>
<?php
$number = 9;
$str = "Beijing";
printf("There are %u million bicycles in %s.",$number,$str);
?>

<br>
<?php
$number = 123;
printf("%f",$number);
?>

<br>
<!-- quoted_printable_decode -->
<?php
$str = "Hello=0Aworld.";
echo quoted_printable_decode($str);
?>

<br>
<!-- quoted_printable_encode -->
<?php
$str = "Hello world.";
echo quoted_printable_encode($str);
?>
