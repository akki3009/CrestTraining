<!-- Select the data of employees whose last name begins with an "S" -->

<?php
require 'connection.php';
try 
{
	$stmt = $conn->prepare("SELECT * FROM Employee WHERE Last_Name LIKE 'S%'");
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
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo $row['EmployeeId'];?></td>
            <td><?php echo $row['First_Name'];?></td>
            <td><?php echo $row['Last_Name'];?></td>
        </tr>
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>