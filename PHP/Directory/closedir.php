<br>
<?php
   $dir = opendir("C:/xampp/htdocs/CREST/PHP/Directory/html");
   while (($file = readdir($dir)) !== false) {
      echo "filename: " . $file . "<br />";
   }
   
   closedir($dir);
?>