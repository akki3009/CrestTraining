<?php
try {
  throw new Exception("An error occurred");
} catch(Exception $e) {
  echo "Error in this file: " . $e->getFile();
}
?>