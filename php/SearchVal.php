<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
	<title> Searching </title>
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
	}
	mysql_close($conn);
?>
	<?php
	if($count <3)
	{
		//$srn =  $_SESSION["SRN"] ;
		$Title = $_GET['Title'] ;
		$Auth = $_GET['Author'] ; 
		$user = 'root' ;
		$pass = '' ;
		$db = 'student';
		$db = new mysqli('localhost' , $user ,$pass , $db) or die("unable to coonect !!");
		#$sql = "SELECT * FROM books where BookTitle = '$Title'  or Author like '%$Auth%'";
		$sql = "SELECT* FROM books where BookTitle = '$Title'  or Author like '%$Auth%'" ;
		mysqli_query($db , $sql) or die("Error while quering");
		$result = mysqli_query($db, $sql);
		while($row = $result->fetch_assoc()){
			if($row["NumberOfCopies"] > 0){
				$BookNo = $row["BookNo"] ;
				$BookTitle = $row["BookTitle"] ;
				$Author = $row["Author"] ;
				
				$c = $row["NumberOfCopies"] - 1 ;
				$sql = "INSERT INTO `issue` (`SRN`, `BookNo`, `BookTitle`, `Author`) VALUES ('$srn','$BookNo', '$BookTitle','$Author')";
				//$sql = "INSERT INTO `Issue` (`SRN`, `BookNo`, `BookTitle` , `Author` ) VALUES ('$_GET['srn']','$BookNo','$BookTitle' , '$Author')" ;
				$stmt=$db->prepare( $sql );
				$result = $stmt->execute();
				echo "Successful Registration !!";
				$db->close();
				
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "student";
				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				//$sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
				$sql = "UPDATE books SET NumberOfCopies = $c  WHERE BookNo = $BookNo";
				if ($conn->query($sql) === TRUE) {
					echo "Record updated successfully";
				} else {
					echo "Error updating record: " . $conn->error;
					}
				$conn->close();

			}
			else{
				echo "ërror" ;
			}
		}
	}
		
	?>
	<?php error_reporting(0); ?>
</body>
</html>