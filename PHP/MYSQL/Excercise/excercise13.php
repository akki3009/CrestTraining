<!-- Delete from the table all employees in the IT department (DEPARTMENT_ID = XXX). -->

<?php
require 'connection.php';
try
{
	$sql="DELETE FROM employee WHERE DepartmentId = '5'";
	$query=$conn->prepare($sql);
	$query->execute();
	echo $query->rowCount()."  Record Deleted Succesfully";
}
catch(PDOException $e)
{
	echo "Error: ".$e->getMessage(); 
}

?>