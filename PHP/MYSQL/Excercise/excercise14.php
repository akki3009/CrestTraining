<!-- Delete all employees details who's salary is greater than 5000 and less than or equal to
		6000 . -->

<?php
require 'connection.php';
try
{
	$sql="DELETE FROM Salary WHERE Amount >5000 AND Amount <=6000";
	$query=$conn->prepare($sql);
	$query->execute();

	echo $query->rowCount()."  Record Deleted Succesfully";
}
catch(PDOException $e)
{
	echo "Error: ".$e->getMessage(); 
}
?>