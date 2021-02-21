<?php
function myFunction($num) {
  throw new Exception("An error occurred");
}

try {
  myFunction(5);
} catch (Exception $e) {
  print_r($e->getTrace());
}
?>