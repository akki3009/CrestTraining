<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT id, firstname, lastname, reg_date FROM Person WHERE firstname='Akash'");
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
    <title>Select Where</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th>Id</th>
            <th>FirstName</th>
            <th>LastName</th>
            <th>Registration Date</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo ($row['id']);?></td>
            <td><?php echo ($row['firstname']);?></td>
            <td><?php echo ($row['lastname']);?></td>
            <td><?php echo ($row['reg_date']);?></td>
        </tr> 
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>