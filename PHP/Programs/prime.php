<!DOCTYPE html>
<html>
<body>

<form method="post">  
Enter a Number: <input type="number" name="number"><br><br>  
<input type="submit" name="submit" value="Submit">  
</form>  
<?php  
if($_POST)  
{  
    $num=$_POST['number'];  
    for ($i = 2; $i <= $num-1; $i++) {  
    	if ($num % $i == 0)
    	{
	       	$value= True;  
	    }  
}  
if (isset($value) && $value) {
	// print_r(isset($value));
     echo 'The Number '. $num . ' is not prime';  
}  else {  
   echo 'The Number '. $num . ' is prime';  
   }   
}  
?>  

</body>
</html>