<?php
session_start();
if(!isset($_SESSION['Doctor_id'])){
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
	.b{
			font-family:Agency FB;
			font-size:30px;
		}
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
    background-color: #4CAF50; /* Green */
    border: none;
				border-radius: 10px 10px 10px 10px;
    color: white;
    padding: 10px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 2px 2px;
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
    width: 10%;
	height: 10%;
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

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
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
	if(isset($_SESSION['Doctor_id'])){
		$row=$_SESSION['Doctor_id'];
		echo "<p id='name'>You ID :".$row."</p>";
	}
	
	?>
		<p><image src="images/login-icon-png-20.png" width="40%" height="40%"></br><a href="logout.php" style="font-family:Agency FB;font-size:30px;"> Logout</a></p>
		</div>
	</div>
	
	<div class="header col-12">
	
		<div  class="Home col-3">
			<a href="doctor_view_my_patients.php">Patients</a>
		</div>
		
		
		
		<div class="Customer col-3">
			<a href="doctor_view_edit_appointments.php">Appointments</a>
		</div>
		
		<div class="Contact col-3">
			<a href="doctor_view_report.php">Reports</a>
		</div>
		
		<div class="Contact col-3">
			<a href="doctor_change_profile.php">My Profile</a>
		</div>
	</div>
		
			<div class = "xy col-12">
		<div class= "x col-3"></div>

<div class="container col-6">
  <form action="doctor_view_report.php" method="post">

  <image src ="images\default_medium_avatar-57d58da4fc778fbd688dcbc4cbc47e14ac79839a9801187e42a796cbd6569847.png" width="10%" height="10%" class="center"></br>
  
  </br>
    <label for="d_id">Doctor Id</label>
	
    <input type="text" id="d_id" name="d_id" required>

    
    
    <input type="submit" name="submit" id="submit" value="View My Patient Reports">
  </form>



</div>
	</div>
	

	<?php
$con=mysqli_connect('localhost','root','','karuna_clinic_center');
if(isset($_POST["submit"])){
$Doctor_id=$_POST['d_id'];

$sql="SELECT * FROM reports WHERE Doctor_id = '$Doctor_id'";
$sqldata=mysqli_query($con,$sql)or die('error getting');

echo "<table  align=center>";
echo "<tr><th>Patient Id</th><th>Category</th><th>Uploaded on</th><th>File</th></tr>";

while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
	
	echo "<tr><td>";
	echo $row['Patient_id'];
	echo "</td><td>";
	echo $row['Category'];
	echo "</td><td>";
	echo $row['uploaded_on'];
	echo "</td><td>";
	echo "<a href='download.php?file=Project_CST_group 09.pdf'>".$row['file_name']."</a>";
	echo "</td>";
	
	
	
}
echo "</table>";
}
?>

	
	<div class="contact col-12">
		<div class="img col-3">
		<img src="images\logo-right.png" width="70%" height="150px">
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