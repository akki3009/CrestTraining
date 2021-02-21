<!DOCTYPE html>
<html>
<body>

<?php
echo "<br>";
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

echo divide(5, 2);
?>

<?php
echo "<br>";
function dividee($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo dividee(5, 0);
} catch(Exception $e) {
  echo "Unable to divide.";
  echo "<br>";
}finally {
  echo "Process complete.";
}
?>
</body>
</html>
