<?php
	echo "<br>";
   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo "<br>";

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";

	//Null coalescing 
   echo "<br>";
   echo "<br>";
   echo "<br>";
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
?>  


<?php
	echo "<br>";
	echo "<br>";
    $a = 10;
    $b = 20;
        
    $result = ($a > $b ) ? $a :$b;
    echo "TEST1 : Value of result is $result<br/>";
        
    /* If condition is true then assign a to result otheriwse b */
    $result = ($a < $b ) ? $a :$b; 
    echo "TEST2 : Value of result is $result<br/>";
?>