<?php
echo "<br>";
$x = 10;  
echo "Assign value : ". $x;
echo "<br>";
$x = 10;
$x+=120;  
echo "Addition is : ".$x;
echo "<br>";
$x = 100;
$x-=20;  
echo "Substraction is : ".$x;
echo "<br>";
$x = 100;
$x*=20;  
echo "Multipication is : ".$x;
echo "<br>";
$x = 100;
$x/=20;  
echo "Division is : ".$x;
echo "<br>";
$x = 100;
$x%=20;  
echo "Modulous is : ".$x;
echo "<br>";
?> 

<?php 
  
// simple assign operator 
$y = 75; 
echo $y."<br>"; 
  
// add then assign operator 
$y = 100; 
$y += 200; 
echo $y."<br>"; 
  
// subtract then assign operator 
$y = 70; 
$y -= 10; 
echo $y."<br>"; 
  
// multiply then assign operator 
$y = 30; 
$y *= 20; 
echo $y."<br>"; 
  
// Divide then assign(quotient) operator 
$y = 100; 
$y /= 5; 
echo $y."<br>"; 
  
// Divide then assign(remainder) operator 
$y = 50; 
$y %= 5; 
echo $y; 
  
?>