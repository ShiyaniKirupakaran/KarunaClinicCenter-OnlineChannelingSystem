<?php
session_start();
if(!isset($_SESSION['Labassistant_id'])){
	header("location:Login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
	
	<title> Online Channelling </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<style>
		* {
			box-sizing: border-box;
		}
		.header::after {
			content: "";
			clear: both;
			display: table;
		}
		
		.bottom type::after {
			content: "";
			clear: both;
			display: table;
		}
		
		[class*="col-"] {
			float: left;
			padding: 15px;
		}
		
		.col-1 {width: 8.33%;}
		.col-2 {width: 16.66%;}
		.col-3 {width: 25%;}
		.col-4 {width: 33.33%;}
		.col-5 {width: 41.66%;}
		.col-6 {width: 50%;}
		.col-7 {width: 58.33%;}
		.col-8 {width: 66.66%;}
		.col-9 {width: 75%;}
		.col-10 {width: 83.33%;}
		.col-11 {width: 91.66%;}
		.col-12 {width: 100%;}
	
		.title{
			
						height:200px;
			background-image:url("Aurora-Soft-Blue-abstract-wallpapers-illusions-polish-shape-abstract-aurora-1920x1080.jpg");
			height:200px;
			border-radius: 25px 25px 0px 0px;
			font-family:Brush Script MT;
			font-size:60px;
			color: white;
			padding:5px;
			line-height:0.5px;
		}
		
		.header{
			background-color:  #d5dbdb;
			text-decoration: none;
			font-family:Algerian;
			color:#0b8276;
			font-size:25px;
			text-align:center;
		}
					legend {
				color: #002080;
				font-size: 18px;
				font-weight:bold;
			}
			.field input,textarea,select {
		
				margin-left: 150px;
			}
		
		#footer div {
				background-color: #66d9ff;
				width: 40%;
				border-radius: 5px;
			}
			.button {
    background-color: #86c3e0;
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
/* Style all input fields */
input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}
.contact{
			background-color:   #d5dbdb ;
			padding:0.1%;
			border-radius: 15px;
			margin-bottom:10px;
			font-size:20px;
			line-height:45px;
		}
		
		/* Style all input fields */
input {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
}
.contact{
			background-color:   #d5dbdb ;
			padding:0.1%;
			border-radius: 15px;
			margin-bottom:10px;
			font-size:20px;
			line-height:45px;
		}
		
		.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
a:visited{
		color:blue;
		}
		a:active{
		color:white;
		}
		a:link{
		text-decoration:none;
		}
/* Style the submit button */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
}
/* Style for table*/
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}


/* Style the container for inputs */
.container {
    background-color: #f1f1f1;
    padding: 20px;
}
a:visited{
		color:blue;
		}
		a:active{
		color:white;
		}
		a:link{
		text-decoration:none;
		}
/* Style the submit button */
input[type=submit] {
    background-color: #4CAF50;
    color: white;
}

/* Style the container for inputs */
.container {
    background-color: #f1f1f1;
    padding: 20px;
}
table {
	background-color:  #d5dbdb;
			text-decoration: none;
			
			color:#0b8276;
		
			text-align:center;
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

}

tr:nth-child(even) {background-color: #f2f2f2;}
table, th, td {
  border: 1px solid black;
}
.xy {
  background-color: lightgrey;
  width: 1000px;
  border: 25px solid blue;
  padding: 25px;
  margin: 25px;
}
.button5 {background-color: #555555;
border-radius: 5px 5px 5px 5px;

}
button:hover {
    opacity: 0.8;
}
.b{
			font-family:Agency FB;
			font-size:30px;
		}
	</style>

	</head>
<body>

	<div class="title col-12">
	<div class="a col-10">
		<h1>Karuna Clinic Center</h1>
		
		<h2 style="font-family:Agency FB;font-size:30px;">You Can Trust Us</h2>
		</div>
		<div class="b col-2">
		<?php
	if(isset($_SESSION['Labassistant_id'])){
		$row=$_SESSION['Labassistant_id'];
		echo "<p id='name'>Your ID :".$row."</p>";
	}
	
	?>
		<p><image src="images/login-icon-png-20.png" width="40%" height="40%"></br><a href="logout.php" style="font-family:Agency FB;font-size:30px;"> Logout</a></p>
		</div>
	</div>
	
	<div class="header col-12">
	
		<div  class="Home col-4">
			<a href="home.html">Home</a>
		</div>
		
		
		
		<div class="Customer col-4">
			<a href="services.html">Services</a>
		</div>
		
		<div class="Contact col-4">
			<a href="contact.html">Contact Us</a>
		</div>
		
	</div></br></br>
	
	<div class = "xy col-12">
		<div class= "x col-3"></div>
	
	<?php
$con=mysqli_connect('localhost','root','','karuna_clinic_center');
if(isset($_POST["submit"])){

$sql="SELECT * FROM reports";
$sqldata=mysqli_query($con,$sql)or die('error getting');

echo "<table  align=center>";
echo "<tr><th>Patient_id</th><th>Report_id</th><th>file_name</th><th>Uploaded_on</th></tr>";
while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
	
	echo "<tr><td>";
	echo $row['Patient_id'];
	echo "</td><td>";
	echo $row['Report_id'];
	echo "</td><td>";
	echo $row['file_name'];
	echo "</td><td>";
	echo $row['uploaded_on'];
	echo "</td>";
	
	
}
echo "</table>";
}
?>
	
	</div>
	<br>
	<br>
<div class="col-12">
	<form action="labassistant.php">
<button class="button button5">Back</button>
	</form>
</div>


	<div class="contact col-12">
		<div class="img col-3">
		<img src="images/logo-right.png" width="70%" height="150px">
		</div>
		<div class="address col-3">
		<p style="align:center"><address >No-212/5,</br> Chankannai North,</br> Jaffna,</br> Sri Lanka.</address></p><br/>
		</div>
		<div class="phone col-3">
		<p> &#9742 +944658352464</p>
		<p> &#9742 +946789765432</p>
		</div>
		<div class="time col-3">
		<p style="font-family:Agency FB";>Week days</p>
		<p style="font-family:Agency FB";>7.30am to 8.30am</p>
		<p style="font-family:Agency FB";>Weekend</p>
		<p style="font-family:Agency FB";>7.30am to 10.30am</p>
		</div>
	</div>
</body>
</html>
	
	