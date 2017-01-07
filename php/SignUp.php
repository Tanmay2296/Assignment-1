<!DOCTYPE HTML>
<html>
<head>
	<title>form Validation</title>
</head>
<body>
	<?php
		$result = false ;
		$dbhost = 'localhost';
		$username = 'root';
		$password = '';
		$db = 'student';
		if( $_SERVER['REQUEST_METHOD']=='GET' ){
			$conn = new mysqli ( $dbhost,$username, $password, $db );
			if( $conn ){
				$MyName =  $_GET['Name'];
				$MySRN = $_GET['SRN'];
				$MyPassword = $_GET['Password'];
				$sql = "INSERT INTO `Details` (`Name`, `SRN`, `Password`) VALUES ('$MyName','$MySRN','$MyPassword')";
				$stmt=$conn->prepare( $sql );
				$result = $stmt->execute();
				echo "Successful Registration !!";
			}
			else{
				echo "Error";
			}
			$conn->close();
		}
		
		
		
	?>
	
</body>
</html>