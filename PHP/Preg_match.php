<!DOCTYPE html>
<html>
<body>

<?php
echo "<br>";
$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); 
?>


<!-- Pregmatch all -->
<?php
echo "<br>";
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // Outputs 4
?>

<!-- Pregreplace -->
<?php
echo "<br>";
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Outputs "Visit W3Schools!"
?>
</body>
</html>
