<html>
<head>
	<title> BookList </title>
	<style type ="text/css">
		table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
	</style>
</head>
<body>
		<?php
		$user = 'root' ;
		$pass = '' ;
		$db = 'student';
		$conn = new mysqli('localhost' , $user ,$pass , $db) or die("unable to coonect !!");
		$sql = "SELECT * FROM books";
		mysqli_query($conn , $sql) or die("Error while quering");
		$result = mysqli_query($conn, $sql);
		echo "<table id = 'list'>";
		echo "<tr>" ;
			echo "<th>BookNo</th>";
			echo "<th>BookTitle</th>" ;
			echo "<th>Author</th>";
			echo "<th>NoOfCopies</th>" ; 
		echo "</tr>" ;
		while($row = $result->fetch_assoc()) {
			//echo "BookNo: " . $row["BookNo"]. " - BookTitle: " . $row["Author"]. " " . $row["NumberOfCopies"]. "<br>";
			$BkNo = $row["BookNo"] ; $BkTitle = $row["BookTitle"] ; $Auth = $row["Author"] ; $NoCopies = $row["NumberOfCopies"];
			echo "<tr>" ;
				echo "<td>$BkNo</td>" ;
				echo "<td>$BkTitle</td>" ;
				echo "<td>$Auth</td>" ;
				echo "<td>$NoCopies</td>" ;
			echo "</tr>";
		}
				
		
		//conn->close();
	?>
	</body>
</html>
