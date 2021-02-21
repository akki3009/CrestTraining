<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Pattern For LIKE

    // $stmt = $conn->prepare("SELECT * FROM Customer WHERE CustomerName LIKE 'a%'");
    // $stmt = $conn->prepare("SELECT * FROM Customer WHERE CustomerName LIKE '%a'");
    // $stmt = $conn->prepare("SELECT * FROM Customer WHERE CustomerName LIKE '%or%'");
    // $stmt = $conn->prepare("SELECT * FROM Customer WHERE CustomerName LIKE '_r%'");
    // $stmt = $conn->prepare("SELECT * FROM Customer WHERE CustomerName LIKE 'a__%'");
    // $stmt = $conn->prepare("SELECT * FROM Customer WHERE ContactName LIKE 'a%o'");
    $stmt = $conn->prepare("SELECT * FROM Customer WHERE ContactName NOT LIKE 'a%'");
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
    <title>LIKE Pattern Data</title>
</head>
<body>
    <h3 align="center">Like Data Pattern</h3>
    <table border="1" align="center">
        <tr>
            <th>CustomerId</th>
            <th>CustomerName</th>
            <th>ContactName</th>
            <th>Address</th>
            <th>City</th>
            <th>PostalCode</th>
            <th>Country</th>
        </tr>
        <?php while($row=$stmt->fetch()){?>
        <tr>
            <td><?php echo ($row['CustomerId']);?></td>
            <td><?php echo ($row['CustomerName']);?></td>
            <td><?php echo ($row['ContactName']);?></td>
            <td><?php echo ($row['Address']);?></td>
            <td><?php echo ($row['City']);?></td>
            <td><?php echo ($row['PostalCode']);?></td>
            <td><?php echo ($row['Country']);?></td>
        </tr> 
        <?php 
            }
            ?>   
    </table>
    
</body>
</html>