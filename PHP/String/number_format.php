<br>
<?php
echo number_format("1000000")."<br>";
echo number_format("1000000",2)."<br>";
echo number_format("1000000",2,",",".");
?>

<br>
<br>
<?php
$num = 1999.9;
$formattedNum = number_format($num)."<br>";
echo $formattedNum;
$formattedNum = number_format($num, 2);
echo $formattedNum;
?>