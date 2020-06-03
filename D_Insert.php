
<?php
$con=new mysqli('localhost','root','','karuna_clinic_center');

if($con-> connect_errno)
{
	echo $con->connect_error;
	die();
}

?>
<?php
session_start();
if(!isset($_SESSION['Admin_id'])){
	header("location:Login.php");
}

?>
<html>
<head>
<style>
body{
	background-color:white;
    height: 100%;
    margin: 0;
	background-position:center;
	background-repeat: repeat-y;
	background-size: cover;
	background-attachment:fixed;
	font-family:verdana;
}
h1{
	text-align:center;
	color:black;
	font-size:20px;
	top:30%;
}
button {
	border-radius:32px;
    background-color: #333;
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    transition-duration: 0.4s;
    cursor: pointer;
}
.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}

input[type=submit] {
    width: 35%;
    background-color: #333;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 8px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #777;
}

select
{
 width:35%;
 border:1px solid #BDBDBD;
 margin:8px 0;
 display:block;
 padding:12px 15px;
 font-size:20px;
 border: 4px solid #ccc;
 border-radius:8px;
 box-sizing: border-box;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #222;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
   
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    
}

input[type=text], input[type=password] ,input[type=textarea],input[type=number],input[type=email],input[type=time],input[type=file]{
    width: 35%;
    padding: 12px 15px;
    margin: 8px 0;
    display: block;
	border-radius: 24px;
    border: 4px solid #bbb;
    box-sizing: border-box;
}  
.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

</style>
</head>
<body>

<ul>
<li class="dropdown"><font color="yellow" size="10">ADMIN</font></li>
<br>
<h2>
  <li class="dropdown">    
  <div class="dropbtn">Patient</div>
    <div class="dropdown-content">
      <a href="P_View.php">Show Patient</a>
	  
    </div>
  </li>
  
  <li class="dropdown">
  <div class="dropbtn">Doctor</div>
    <div class="dropdown-content">
      <a href="D_Insert.php">Add Doctor</a>
      
	  <a href="D_View.php">Show Doctor</a>
	  <a href="D_Viewschedule.php">Show Doctor Schedule</a>
    </div>
  </li>
  <li class="dropdown">    
  <div class="dropbtn">Lab Assistant</div>
    <div class="dropdown-content">
      <a href="L_Insert.php">Add Lab Assistant</a>
     
	  <a href="L_View.php">Show Assistant</a>
    </div>
  </li>
    <li>  
	<form method="post" action="Home.php">	
	<button type="submit" class="cancelbtn" name="logout" style="float:right;font-size:22px"><b>Log Out</b></button>
	</form>
  </li>
	
</ul>
</h2>
<center>
<div class="container col-6">
  <form action="D_Insert.php" method="post">
  </br>
   <label for="firstname">FirstName</label>
	
    <input type="text" id="firstname" name="firstname" required>
	
	 <label for="lastname">Lastname</label>
	
    <input type="text" id="lastname" name="lastname" required>
	
	 
	 <label for="disease">Category</label>
	
    <input type="text" id="category" name="category" required>
	
	 <label for="phone">PhoneNo</label>
	
    <input type="number" id="phone" name="phone" required>
	<label for="address">Address</label>
	
    <input type="textarea" id="address" name="address" required>
	
	 <label for="email">Email</label>
	
    <input type="email" id="email" name="email" required>
	<label for="day">Available Day</label><br>
	<br>
    <input type="checkbox" name="day[]" value="Sunday">Sunday
	<input type="checkbox" name="day[]" value="Monday">Monday
	<input type="checkbox" name="day[]" value="Tuesday">Tuesday
	<input type="checkbox" name="day[]" value="Wednesday">Wednesday<br>
	<input type="checkbox"name="day[]" value="Thursday">Thursday
	<input type="checkbox" name="day[]" value="Friday">Friday
	<input type="checkbox" name="day[]" value="Saturday">Saturday
	<br>
<br>
	<label for="stime">Starting Time</label>
	
    <input type="time" id="stime" name="stime" placeholder="00:00:00" required>

	<label for="time">End Time</label>
	
    <input type="time" id="etime" name="etime" placeholder="00:00:00" required>
    <label for="usrname">Username</label>
	
    <input type="text" id="usrname" name="usrname" required>

    <label for="psw">Password</label>
    <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
   
    <input type="submit" name="submit" value="Insert">
  </form>
  </center>
<?php
	if(isset($_POST["submit"])){
		$firstname=$_POST["firstname"];
		$lastname=$_POST["lastname"];
		$category=$_POST["category"];
		$phone=$_POST["phone"];
		$address=$_POST["address"];
		$email=$_POST["email"];
		$username=$_POST["usrname"];
		$password=$_POST["psw"];
		$day=$_POST["day"];
		$stime=$_POST["stime"];
		$etime=$_POST["etime"];
		
		$b=implode(",",$day);
		$sql="INSERT INTO doctor (First_Name,Last_Name,Category,Phone_No,Address,Email,AvailableDay,StartTime,EndTime,Username,Password) VALUES ('$firstname','$lastname','$category','$phone','$address','$email','$b','$stime','$etime','$username','$password')";
		
	if($con->query($sql)){
		echo "<script type='text/javascript'>alert('Inserted Successfully');</script>";
	}
	else{
		echo "<script type='text/javascript'>alert('Error while adding records');</script>";
	}
	}
	
	?>
<div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div>
</div>			
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script>

	
</body>
</html>
