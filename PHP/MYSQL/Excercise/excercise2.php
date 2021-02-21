<!-- Select the last name of all employees. -->

<?php
require 'connection.php';
try 
{
	$stmt = $conn->prepare("SELECT Last_Name FROM Employee");
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
            <th>LastName</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo $row['Last_Name'];?></td>
        </tr> 
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>