<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crestDB";
try {
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$stmt = $conn->prepare("SELECT DISTINCT lastname FROM Person");
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
	<title>Select Distinct</title>
</head>
<body>
	<table border="1">
		<tr>
			<th>LastName</th>
		</tr>
		<?php while ($row = $stmt->fetch()) {?>
		<tr>
			<td><?php echo ($row['lastname']);?></td>
		</tr>
		<?php
			}
			?>
	</table>
</body>
</html>