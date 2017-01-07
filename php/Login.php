<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<?php
	$MyName =  $_GET['Name'];
	$MySRN = $_GET['SRN'];
	$MyPassword = $_GET['Password'];
	$user = 'root' ;
	$pass = '' ;
	$db = 'student';
	$db = new mysqli('localhost' , $user ,$pass , $db) or die("unable to coonect !!");
	$sql = "SELECT * FROM `details`";
	mysqli_query($db , $sql) or die("Error while quering");
	$result = mysqli_query($db, $sql);
	
	while($row = $result->fetch_assoc()) {
		$name = $row["Name"] ;
		$srn = $row["SRN"] ;
		if(strcmp($row["Name"] , $MyName ) ==0 and strcmp($row["SRN"] ,$MySRN) == 0 and strcmp($row["Password"] , $MyPassword ) ==0){
			header("Location: main.php?name=$name&&srn=$srn");
			$_SESSION["SRN"] = $srn ;
			$_SESSION["Name"] = $name ;
			//header('Location: main.php');
			//echo "DONE" ;
			break ;
		}
		
	}
	?>
	