<!-- Select the FIRST name of all employees, without duplicates -->

<?php
require 'connection.php';
try 
{
	$stmt = $conn->prepare("SELECT DISTINCT First_Name FROM Employee ORDER BY First_Name ASC");
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
            <th>First Name</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo $row['First_Name'];?></td>
        </tr> 
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>