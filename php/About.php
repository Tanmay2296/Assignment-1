<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>About Page</title>
	<link rel = "icon" href = "pics/icon.jpg" type = "image/jpg"></link>
	<style type = "text/css">
		body{
	background-image: url("pics/bg.jpg");
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
#a{background-color:#0000ff;
			border:2px solid black;
			padding: 15px;
			margin: 20px;
			width:500px;
			height:300px;
			left:650px;
			top:25px;
			position:relative;
			font-family:verdana;
			font-weight:normal;
			font-size:16px;
			color:black;
				}
			
		#b{
			position:absolute;
			
			top:190px;
			background-color:#0000ff; ;
			height:300px;
			width: 500px;
			padding: 25px;
			border: 2px solid black;
			margin: 10px;
			
			
		}
		#c{
			border:2px solid black;
			padding: 15px;
			margin: 20px;
			width:500px;
			height:300px;
			left:650px;
			top:140px;
			position:relative;
			font-weight:bold;
			color:#6B8E23;
			background-color:#0000ff;
				}
			
		#d{
			position:absolute;
			
			top:610px;
			
			height:300px;
			width: 500px;
			padding: 25px;
			border: 2px solid black;
			margin: 30px;
			background-color:#0000ff;
			
		}
		#e{
			position:relative;
			border:2px solid black;
			padding: 15px;
			margin: 20px;
			width:500px;
			height:300px;
			left:650px;
			top:215px;
			color:#663399;
			font-size:16px;
			background-color:white;
		}
		#f{
			position:absolute;
			
			top:1020px;
			
			height:300px;
			width: 500px;
			padding: 25px;
			border: 2px solid black;
			margin: 10px;
			background-image:url("pics/ab.jpg")
		}
		#g{
			position:relative;
			border:2px solid black;
			padding: 15px;
			margin: 20px;
			width:500px;
			height:300px;
			left:650px;
			top:260px;
			font-size:15px;
			color:#2E8B57;
			font-size:15px;
			background-color:white;
		}
		#h{
			position:absolute;
			
			top:1410px;
			
			height:300px;
			width: 500px;
			padding: 25px;
			border: 2px solid black;
			margin: 10px;
			background-image:url("pics/abvirat.jpg")
		}
		#i{
			position:relative;
			border:2px solid black;
			padding: 15px;
			margin: 20px;
			width:500px;
			height:300px;
			left:650px;
			top:290px;
			background-color:white;
		}
		#j{
			position:absolute;
			
			top:1810px;
			
			height:300px;
			width: 500px;
			padding: 25px;
			border: 2px solid black;
			margin: 10px;
			background-image:url("pics/araon.jpg")
			
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
  <!--<li class = "d1" ><a href="">SEARCH</a></li>-->
  <li class = "d1" ><a href="logout.php">Logout</a></li>
</ul>
<br>
<div id ="a"><p align = "center"><b>Collection</b></p>
<p align = "center">Books  ( 97204 ) <br>
E-Books  ( 34833 )<br>
Print Journals  ( 151 )<br>
E-Journals  ( 6197 )<br>
Bound Volumes  ( 3401 )<br>
Project Reports  ( 1576 )<br>
CD-ROM’s  ( 6914 )<br>
</div>
<div id = "b"><p align = "center"><b>SystemsUsed</b></p>
<p align = "center">Classification – Dewy Decimal Classification (DDC)<br>
Cataloguing – Anglo American Cataloguing Rules (AACR 2)<br>
Provision of Web OPAC Information management – Libsoft<br>
Circulation Management - Bar coded user cards & Books<br></p></div>
<div id ="c"><p align="center"><b>RESERVATION & RENEWALS</b></p>
<p align="center">Online Reservation can be done for a book, which is already lent out.<br> Reserved books are kept separately in the circulation counter for 2 days<br> for each member. The Reservation lapses automatically after 2 days<br> and the next person gets the chance.<br> 
<br>
Renewals are allowed only when there is no claim by others. No phone<br> renewal please. Bring the book to be renewed to the Library and get the<br> due date stamped.
</p></div>
<div id ="d">
	<p align = "center"><b>DIGITAL LIBRARY & VIRTUAL LIBRARY</b></p>
	<p align = "center">The available e-material in the PES Digital Library can be accessed by logging into the <br>
	digital library and selecting Material Category Digital Library. Faculty and students who are <br>
	interested to upload the material which are published by them, often used by them can e-<br>
	mail the articles, drawing etc., to the following address librarian@pes.edu <br>
	Has a collection of open source materials available on the Internet which are relevant to the <br>
	courses conducted in our college and other PES Group of Institutions.</p>
</div>
</body>
</html>