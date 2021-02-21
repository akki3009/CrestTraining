<!-- Select the names of departments with more than two employees -->

<?php
require 'connection.php';
try
{
	$sql="SELECT COUNT(EmployeeId),departments.DepartmentName  FROM employee JOIN departments ON employee.DepartmentId = departments.DepartmentId GROUP BY departments.DepartmentName HAVING COUNT(EmployeeId) >2 ";
	$query=$conn->prepare($sql);
	$query->execute();
	// echo "Display Data ";
}
catch(PDOException $e)
{
	echo "Error: ".$e->getMessage(); 
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Count DATA</title>
</head>
<body>
	<table border="1" align="center">
		<tr>
			<th>EmployeeId</th>
			<th>DepartmentName</th>
		</tr>
		<?php while($row=$query->fetch()){?>
			<tr>
				<td><?php echo $row['COUNT(EmployeeId)'];?></td>
				<td><?php echo $row['DepartmentName'];?></td>
			</tr>
		<?php } ?>		
	</table>
</body>
</html>