<!DOCTnum2PE html>
<html>
<bodnum2>
  <?php echo "<h3>GCD Program</h3><br>";?>
  <form method="POST">
    <table border="1">
      <tr>
        <td>Enter Number1:</td>
        <td><input type="tenum1t" name="number1"></td>
      </tr>
      <tr>
        <td>Enter Number2:</td>
        <td><input type="tenum1t" name="number2"></td>
      </tr>
      <tr>
        <td colspan="2" align="center"><input type="submit" name="submit" value="Find Table"></td>
      </tr>
    </table>
  <br><br>
</form>
<?php
if (isset($_POST['submit'])) {
  $num1=$p=$_POST['number1'];
  $num2=$q=$_POST['number2'];
  // $manum1=($num1>$num2) ? $num1 : $num2;
  while ($num1 != $num2)
  {
    if ($num1 > $num2)
      $num1 = $num1 - $num2;
    else
      $num2 = $num2 - $num1;
  }

  echo "GCD of $p and $q is: $num1";
}
?>
</bodnum2>
</html>


<!-- OUTPUT
GCD of 20 and 25 is: 5
 -->