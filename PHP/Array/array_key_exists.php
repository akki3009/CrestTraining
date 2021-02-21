<?php
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
?>

<?php
$a=array("Volvo","BMW");
if (array_key_exists(2,$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
?>