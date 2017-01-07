<!DOCTYPE HTML>
<html>
<head>
	<title>SignUp</title>
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
  height: 280px;
  z-index: 15;
  top: 50%;
  left: 50%;
  margin: -100px 0 0 -150px;
}
label{
	color :blue;
}
body{
	background-image: url("pics/bg.jpg");
}
form {
  background: white;
  width: 40%;
  box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.7);
  font-family: lato;
  position: relative;
  color: #333;
  border-radius: 10px;
}
form header {
  background: #FF3838;
  padding: 30px 20px;
  color: white;
  font-size: 1.2em;
  font-weight: 600;
  border-radius: 10px 10px 0 0;
}
form label {
  margin-left: 20px;
  display: inline-block;
  margin-top: 30px;
  margin-bottom: 5px;
  position: relative;
}
form label span {
  color: #FF3838;
  font-size: 2em;
  position: absolute;
  left: 2.3em;
  top: -10px;
}
form input {
  display: block;
  width: 78%;
  margin-left: 20px;
  padding: 5px 20px;
  font-size: 1em;
  border-radius: 3px;
  outline: none;
  border: 1px solid #ccc;
}
form .help {
  margin-left: 20px;
  font-size: 0.8em;
  color: #777;
}
form button {
  position: relative;
  margin-top: 30px;
  margin-bottom: 30px;
  left: 50%;
  transform: translate(-50%, 0);
  font-family: inherit;
  color: white;
  background: #FF3838;
  outline: none;
  border: none;
  padding: 5px 15px;
  font-size: 1.3em;
  font-weight: 400;
  border-radius: 3px;
  box-shadow: 0px 0px 10px rgba(51, 51, 51, 0.4);
  cursor: pointer;
  transition: all 0.15s ease-in-out;
}
form button:hover {
  background: #ff5252;
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
<script type= "text/javascript">
	function validateForm(){
    var form = document.getElementById("register"), inputs = form.getElementsByTagName("input"), input = null, flag = true;
    for(var i = 0, len = inputs.length; i < len; i++) {
        input = inputs[i];
        if(!input.value) {
            flag = false;
           
            alert("Please fill all the inputs");
            break;
        }
    }
    return(flag);
}
</script>
</head>
<body>
	
	
	<div align = 'center' id = "i1"><img  src = "pics/pes.jpg" width = "800px" height="100px"></img></div>
	<br>
		
<br>

	<form method = "GET" id ="register" action = "SignUp.php" onsubmit = "return validateForm()">
		<!--<label> Name</label>
		 <input type = "text" name = "Name" maxlength = 25  align = "right"style = "width:180px ;"/> <br/>
		 <label>SRN</label>
		 <input type = "text" name = "SRN" maxlength = 12 align = "right" style = "width:180px ;" /> <br />
		 <label>Password</label>
		  <input type = "password" name = "Password" maxlength = 25 align = "right" style = "width:180px ;"/> <br/>
		<input type = "submit" value = "Submit"   />
		<input type = "reset" value = "reset" /> -->
		<header>SignUp</header>
  <label>Username <span>*</span></label>
  <input name = "Name"/>
  <label>SRN <span>*</span></label>
  <input name = "SRN"/>
  <div class="help">Exact 12 characters</div>
  
  <label>Password <span>*</span></label>
  <input type="password"name = "Password"/>
  <div class="help">Use upper and lowercase lettes as well</div>
  
		<input type = "submit" value = "Submit"   />
		

		</br></br>
		<div align = "center"><a href = "LoginPage.php">Login</a></div>
	</form>
	




</body>
</html>

		
