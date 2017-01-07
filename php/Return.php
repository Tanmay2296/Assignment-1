<?php
// Start the session
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>ReturnBook</title>
	<link rel = "icon" href = "pics/icon.jpg" type = "image/jpg"></link>
	<style type = "text/css">
		#nav {
width:750px;
margin:0 auto;
list-style:none;
color : black ;
}
#nav li {

float:left;
}
#nav a {
display:block;
text-align:center;
width:150px; /* fixed width */
text-decoration:none;
}
input[type=text] , input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
}
input[type=text] , input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input[type=text] :focus , input[type = password]:focus {
    border: 3px solid #555;
}
form { 
margin: 0 auto; 
width:250px;
}
.container{
	border-style: solid;
	 border-color: green;
	 position: absolute;
  width: 300px;
  height: 340px;
  z-index: 15;
  top: 50%;
  left: 50%;
  margin: -100px 0 0 -150px;
}
label{
	color :blue;
}
#rst1{
    display: block;
    
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
	width: 115px;  height: 45px;
}
a{
    display: block;
    width: 115px;
    height: 25px;
    background: #4E9CAF;
    padding: 10px;
    text-align: center;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}
#top{
   position:absolute;
   top:0;
   right:0;
}
body{
	background-image: url("pics/bg.jpg");
}
</style>

</head>
<body>
	<?php
			$href="Search.php?srn=".$_SESSION["SRN"];
			//echo "----------------------------->$href";
		
		?>
	
	<div align = 'center' id = "i1"><img  src = "pics/pes.jpg" width = "800px" height="100px"></img></div>
	<br>
		<ul id="nav">
  <li class = "d1" id "d11" ><a href="main.php">HOME</a></li>
  <li class = "d1" ><a href="About.php">ABOUT US</a></li>
  <li class = "d1" id ="s" ><?php    
  echo "<a href=".$href.">";
  ?>SEARCH</a></li>
  <li class = "d1" ><a href="logout.php">logout</a></li>
  
</ul>
<br>
<div id ='top'><a href ="BookList.php">BooksList</a></div>
<!--<div id ='top'><a href ="BooksList.php">BooksList</a></div> -->
<div  align = "center" class = "container">

	<form method = "GET" id ="register" action = "ReturnBook.php">
		<label> BookTitle</label>
		<input type="text" name="Title" />
		 <label>AuthorName</label>
		 <input type = "text" name = "Author"/>   
		<input type = "submit" value = "submit" id = "rst1"/>
		<br/>
		<input type = "reset" id = "rst1" value = "reset" /></br>
		
		
		
		
	</form>
	

	
</div>
<br>




</body>
</html>

		
