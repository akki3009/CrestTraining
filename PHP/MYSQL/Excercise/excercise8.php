<!-- Select the sum of salary paid for “XXX” month and year. -->

<?php
require 'connection.php';
try 
{
	$stmt = $conn->prepare("SELECT SUM(Amount) FROM Salary WHERE Month='2020-08'");
	$stmt->execute();
    echo "Selected";
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
            <th>Amount</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo $row['SUM(Amount)'];?></td>
        </tr>
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>