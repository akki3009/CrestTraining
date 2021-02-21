<!DOCTYPE html>
<html>
<body>
  <?php echo "<h3>LCM Program</h3><br>";?>
  <form method="POST">
    <table border="1">
      <tr>
        <td>Enter Number1:</td>
        <td><input type="text" name="number1"></td>
      </tr>
      <tr>
        <td>Enter Number2:</td>
        <td><input type="text" name="number2"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="Find Table"></td>
      </tr>
    </table>
  <br><br>
</form>
<?php
if (isset($_POST['submit'])) {
  $num1=$_POST['number1'];
  $num2=$_POST['number2'];
  $max=($num1>$num2) ? $num1 : $num2;
  while(1)
  {
    if($max%$num1==0 && $max%$num2==0)
    {
      echo "LCM of " .$num1. " and " .$num2. " is: ".$max;
      break;
    }
    $max=$max+1;
  }
}
?>
</body>
</html>


<!-- OUTPUT
LCM of 20 and 25 is: 100
 -->