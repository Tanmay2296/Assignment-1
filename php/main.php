<?php
session_start();
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title> PES Library </title>
		<link rel = "icon" href = "pics/icon.jpg" type = "image/jpg"></link>
		<style>
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
#top{
   position:absolute;
   top:0;
   right:0;
}
.d1{background-color: #8B0000;
	}
	
	
	#side {
    position:absolute;
    left:30px; top:210px; bottom: 0;
    width: 170px;
	height :320px;
	border-style: solid;
    border-width: 5px;
	font-family: "Times New Roman", Georgia, Serif;
	
}
#right {
    position:absolute;
    left:1100px; top:0px; bottom: 0;
    width: 230px;
	height :320px;
	border-style: solid;
    border-width: 5px;
	font-family: "Times New Roman", Georgia, Serif;
	
}
.thumbnail:hover {
    position:relative;
    top:-25px;
    left:-35px;
    width:500px;
    height:auto;
    display:block;
    z-index:999;
}
#id{
	font-size: 250%;
	color :green ;
}
.topcorner{
   position:absolute;
   top:0;
   left:5;
   color :green ;
  }
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
		</style>
		
	</head>
	<body>
	<!--<div id ='top'><a href ="logout.php">Logout</a></div>-->
	<script type = "text/javascript">
			
		</script>
		<?php
			$href="Search.php?srn=".$_SESSION["SRN"];
			//echo "----------------------------->$href";
		
		?>
		<?php
			$n = $_SESSION["Name"] ;
		?>
		<input type = "hidden" id = "hide" value = <?php echo '$n' ?> />
		<!--<input type = "hidden" id = "hide" value = <?php echo $_GET["srn"]?> />-->
	<p class = "topcorner"><?php echo "Welcome " . $n; ?></p>
	
	<div align = 'center' id = "i1"><img  src = "pics/pes.jpg" width = "800px" height="100px"></img></div>
	<br>
		<ul id="nav">
  <li class = "d1" id "d11" ><a href="#">HOME</a></li>
  <li class = "d1" ><a href="About.php">ABOUT US</a></li>
  <li class = "d1" id ="s" ><?php    
  echo "<a href=".$href.">";
  ?>SEARCH</a></li>
  <!--<li class = "d1" id ="s" ><a onclick = "Go()" href="#">SEARCH</a></li>-->
  <li class = "d1" ><a href="logout.php">Logout</a></li>
  <br> <br><br><br><br>
  <div style="background-color:black;color:white;padding:20px; border-style: solid;border-width: 5px;border-color: green; " width="170px" height="250px">
  <p align = "center" style = "color :red;"><b> Library and Technology</b></p>
  <p style = "font-family: 'Times New Roman', Georgia, Serif;"> The intent of PES library is to support and enhance the learning, teaching, research, and service activities of the PES Institutes by providing organized access to quality information. The information is facilitated in different media like all the recommended books for the courses, including periodicals, many databases that are available for searching by internet. The e-journals and e-books are handy resources that are accessible to all official beneficiaries like Students, teachers and researchers. Multiple copies ensure that resources are easily available for reference in the library. Trained staff is always at hand to assist students. In addition to these resources, faculty members dynamically upload all their lecture and research notes on the PES Intranet. 
We strive to make learning more creative, interactive and information driven by using sophisticated delivery techniques. At PES, 40 different computer laboratories across the campuses house over a thousand computers for use by students and staff. High-end, sophisticated computing facilities are available to meet project requirements and encourage research.
	</p>
	<div id ="side" style="background-color:green;color:black;padding:20px;" >
	<p align = "center" style = "color :#6E300D;"><b> Library Mission</b></p>
	<p style = "color :#1a0000;">To provide continuous access to the Knowledge and Information in the Library to the students and faculty of the Institute for achieving excellence in their chosen disciplines.
	<br><br>
	<div align = "center"><img  src = "pics/book.jpg" width = "100px" height="100px"></img> </div>
	<div id  = "right" style = "background-color : #6B0A30; "><p align = 'center'><b>location</b></p><p style="color : #731CC7;" >Address: 100 Feet Ring Road, Banashankari Stage III, Bengaluru, Karnataka 560085
	<br>Phone : 080 2672 1983</p>
	<!--<div align = "center"><img  src = "pics/map.png" class = 'thumbnail' width = "230px" height="160px"></img> </div>
	-->
	<div align = "center"><img  src = "pics/map.png" class = 'thumbnail' width = "230px" height="160px"></img> </div>

	
	</body>		

</html>