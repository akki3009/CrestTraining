<!-- Write sql to insert record containing single quoted text as insertion data for the
		FIRST_NAME or LAST_NAME column in EMPLOYEES table. -->

<?php
require 'connection.php';

try
{
	$conn->beginTransaction();
	$conn->exec("INSERT INTO Departments (DepartmentName) VALUES ('Management')");
	$conn->exec("INSERT INTO Departments (DepartmentName) VALUES ('HR')");
	$conn->exec("INSERT INTO Departments (DepartmentName) VALUES ('Developeing')");
	$conn->exec("INSERT INTO Departments (DepartmentName) VALUES ('Sales')");

	$conn->exec("INSERT INTO Employee (First_Name,Last_Name,DepartmentId) VALUES ('Akash', 'Agrawal','1')");
	$conn->exec("INSERT INTO Employee (First_Name,Last_Name,DepartmentId) VALUES ('Yogin', 'Chauhan','1')");
	$conn->exec("INSERT INTO Employee (First_Name,Last_Name,DepartmentId) VALUES ('Vishal', 'Dolera','2')");
	$conn->exec("INSERT INTO Employee (First_Name,Last_Name,DepartmentId) VALUES ('Kamini', 'Jain','2')");
	$conn->exec("INSERT INTO Employee (First_Name,Last_Name,DepartmentId) VALUES ('Jay', 'Mewada','3')");
	$conn->exec("INSERT INTO Employee (First_Name,Last_Name,DepartmentId) VALUES ('Ayush', 'Desai','3')");
	$conn->exec("INSERT INTO employee (First_Name,Last_Name,DepartmentId) VALUES('Jainmay','Patel','4')");
	$conn->exec("INSERT INTO employee (First_Name,Last_Name,DepartmentId) VALUES('Dhaval','Parmar','4')");
	$conn->exec("INSERT INTO employee (First_Name,Last_Name,DepartmentId) VALUES('Yogin','Chauhan','3')");
	$conn->exec("INSERT INTO employee (First_Name,Last_Name,DepartmentId) VALUES('Vishal','Dolera','4')");
	$conn->commit();

	echo "Success Inserted";

}
catch(PDOException $e)
{
	echo "Error :".$e->getMessage();
}
?>