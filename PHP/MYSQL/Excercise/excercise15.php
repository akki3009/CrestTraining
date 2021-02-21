<?php
require 'connection.php';
try {
    
    // Pattern For WILDCARD
    $stmt = $conn->prepare("SELECT * FROM employee WHERE Last_Name LIKE 'S%'");
    $stmt = $conn->prepare("SELECT * FROM employee WHERE First_Name LIKE '%a%'");
    $stmt = $conn->prepare("SELECT * FROM employee WHERE First_Name LIKE 'A__%'");
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
    <title>WILDCARD Pattern</title>
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
        <?php } ?>   
    </table>    
</body>
</html>