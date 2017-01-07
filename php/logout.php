<!DOCTYPE HTML>
<?php
session_start();
?>
<html>
<head>
	<title>LogOut</title>
</head>
<body>
	<?php
		session_destroy();
	?>
	<p>LoggedOut</p>
	<a href="LoginPage.php">Login</a><br>
	
	</body>
</html>