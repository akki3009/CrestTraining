<?php
try {
  throw new Exception("An error occurred", 120);
} catch(Exception $e) {
  echo "Error code: " . $e->getCode();
}
?>