<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
<head>
	<title>Return Book </title>
</head>
<body>
<?php
	
	$srn =  $_SESSION["SRN"] ;
	$conn = mysql_connect("127.0.0.1","root","");
	if(!$conn)
	{
		die("Could not establish connection to MYSQL");
	}
	else
	{
		$db=mysql_select_db("student", $conn);
		//echo "hi";
		$sql = "SELECT * FROM issue where SRN = '$srn'";
		//$sql = "SELECT count(*) FROM `issue` where SRN =\'01FB14ECS152\'";
		$results=mysql_query($sql, $conn);
		$count =  mysql_num_rows($results);
		//print("$count");
		//$conn->close();
	}
?>
<?php
		if($count>0)
		{
			$Title = $_GET['Title'] ;
			$Auth = $_GET['Author'] ; 
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "student";
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$sql = "DELETE FROM issue WHERE BookTitle = '$Title' and SRN = '$srn'" ;
			if ($conn->query($sql) === TRUE) {
				echo "Record deleted successfully";
			} else {
				echo "Error deleting record: " . $conn->error;
					}
			$conn->close();
			
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "student";
			$conn = new mysqli($servername, $username, $password, $dbname);
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			$sql = "UPDATE books SET NumberOfCopies = NumberOfCopies + 1 WHERE BookTitle = '$Title'";
			if ($conn->query($sql) === TRUE) {
				echo "Record updated successfully";
			} 		else {
		echo "Error updating record: " . $conn->error;
		}

			$conn->close();

			
			
		}
?>
</body>
</html>