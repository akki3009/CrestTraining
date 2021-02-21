<!-- Select the number of employees in each department (you only need to show the department
        name and the number of employees). -->

<?php
require 'connection.php';
try 
{
	$stmt = $conn->prepare("SELECT COUNT(EmployeeId),departments.DepartmentName FROM employee JOIN departments ON employee.DepartmentId = departments.DepartmentId GROUP BY departments.DepartmentName");
	$stmt->execute();
    // echo "Selected";
}
catch(PDOException $e) {
	echo "Error: " . $e->getMessage();
}
$conn = null;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th>Employee Id</th>
            <th>Department Name</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo $row['COUNT(EmployeeId)'];?></td>
            <td><?php echo $row['DepartmentName'];?></td>
        </tr>
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>