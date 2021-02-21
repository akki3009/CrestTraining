<!-- Select all the data of employees that work in department “XXX” or department “YYY”  -->

<?php
require 'connection.php';
try 
{
	$stmt = $conn->prepare("SELECT employee.EmployeeId, employee.First_Name,employee.Last_Name,departments.DepartmentName FROM Employee JOIN departments ON employee.DepartmentId = departments.DepartmentId WHERE DepartmentName='HR' OR DepartmentName='Sales'");
	$stmt->execute();
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
            <th>First Name</th>
            <th>Last Name</th>
            <th>Department Name</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo $row['EmployeeId'];?></td>
            <td><?php echo $row['First_Name'];?></td>
            <td><?php echo $row['Last_Name'];?></td>
            <td><?php echo $row['DepartmentName'];?></td>
        </tr>
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>