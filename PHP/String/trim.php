<br>
<!-- ltrim -->
<?php
$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");
?>

<br>
<?php
$str = "    Hello World!";
echo "Without ltrim: " . $str;
echo "<br>";
echo "With ltrim: " . ltrim($str);
?>

<br>
<?php
$str = "\n\n\nHello World!";
echo "Without ltrim: " . $str;
echo "<br>";
echo "With ltrim: " . ltrim($str);
?>


<!-- rtrim -->
<br>
<br>
<br>
<?php
$str = "Hello World!";
echo $str . "<br>";
echo rtrim($str,"World!");
?>
<br>
<br>
<?php
$str = "Hello World!\n\n\n";
echo "Without rtrim: " . $str;
echo "<br>";
echo "With rtrim: " . rtrim($str);
?>

<!-- trim -->
<br>
<br>
<br>
<?php
$str = "Hello World!";
echo $str . "<br>";
echo trim($str,"Hed!");
?>