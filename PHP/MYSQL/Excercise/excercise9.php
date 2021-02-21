<!-- Fetch employee record having highest paid salaryof all time. (only single record). -->

<?php
require 'connection.php';
try 
{
	$stmt = $conn->prepare("SELECT * FROM employee WHERE EmployeeId =(SELECT EmployeeId FROM Salary ORDER BY Amount DESC LIMIT 1)");
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
            <th>First Name</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo $row['EmployeeId'];?></td>
            <td><?php echo $row['First_Name'];?></td>
        </tr>
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>