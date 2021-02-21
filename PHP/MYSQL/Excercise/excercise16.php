<?php
require 'connection.php';
try 
{
    // IN Program
    $stmt = $conn->prepare("SELECT * FROM employee WHERE First_Name IN ('Akash','Yogin','Vishal')");
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
    <title>IN Operator Data</title>
</head>
<body>
    <h3 align="center">Wildcard Data Pattern</h3>
    <table border="1" align="center">
        <tr>
            <th>EmployeeId</th>
            <th>First Name</th>
            <th>Last Name</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo ($row['EmployeeId']);?></td>
            <td><?php echo ($row['First_Name']);?></td>
            <td><?php echo ($row['Last_Name']);?></td>
        </tr> 
        <?php 
            }
            ?>   
    </table>
</body>
</html>