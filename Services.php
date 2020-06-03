<!DOCTYPE html>
<html>
<head>
	<title> Online Channelling </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>


body{
	background-image:url("second.jpg");
	background-repeat:no-repeat;
	baackground-size:100px 50px;
	
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
.contact{
			background-color:   #d5dbdb ;
			padding:0.1%;
			border-radius: 15px;
			margin-bottom:10px;
			font-size:20px;
			line-height:45px;
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
		select{
		font-size:15px;
		background-color:DodgerBlue; 
		border-radius:5px;
		margin-left:15px;
		}
		
</style>
</head>
<body>

<div class="title col-12">
		<h1>Karuna Clinic Center</h1>
		<h2 style="font-family:Agency FB;font-size:30px;">You Can Trust Us</h2>
	</div>
	
	<div class="header col-12">
	
		<div  class="Home col-4">
			<a href="Home.php">Home</a>
		</div>
		
		
		
		<div class="Customer col-4">
			<a href="Services.php">Services </a>
		</div>
		
		<div class="Contact col-4">
			<a href="Contact.php">Contact Us</a>
		</div>
		</div>
		
<div class="con">


<center>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
	<h1 style="font-size:30px">Select Your Specialization</h1>
	<div class="dropdownbox">
	<select name="Category" style="font-size:25px">
	<option value="" style="font-size:15px">Specialization</option>
	<option value="Cardiologist">Cardiologist</option>
	<option value="ENT Surgeon">ENT Surgeon</option>
	<option value="Eye Surgeon">Nuterologist</option>
	<option value="Gynecologist">Gynecologist</option>
	<option value="Neurologist">Neurologist</option>
	<option value="Pediatrician">Pediatrician</option>
	<option value="Oncologist">Oncologist</option>
	</select><br/>
	</div><br/>
	<input type="submit" value="Search" name="btn_search" style="font-size:25px; background-color:DodgerBlue; border-radius:5px">
	</form>
  </center>

<!--connection-->
<?php 
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="karuna_clinic_center";
	$con=mysqli_connect($servername,$username,$password,$dbname);
	if(isset($_POST['btn_search'])){
		$Category=mysqli_real_escape_string($con,$_POST['Category']);
		
		
		$sql = "SELECT* FROM doctor WHERE Category='$Category'";
		$result =mysqli_query($con,$sql);
		while($row=mysqli_fetch_array($result)){
			
			?>
			
			<?php echo "<div class='content col-12' style='background-image:url('second.jpg')'>" ?>
			<div class = "col-3"></div>
			<div class="col-6">
			<?php echo '<table>'; ?>
			<?php echo '<tr align="center">'; ?>
			
			<?php echo "<td><img src=".$row['image']." style='height:200px;width:200px; alt:Avatar'></td>"?>
			<?php echo "<br/>"?>
			<?php echo '</tr>'; ?>
			<?php echo '<tr>'; ?>
			<?php echo "<td style='font-size:20px; font-weight:20px; font-family:verdana'>".$row['First_Name']."</td>"; ?>
			<?php echo "<br/>"?>	
<?php echo '</tr>'; ?>
<?php echo '<tr>'; ?>			
			<?php echo "<td style='font-size:20px; font-weight:20px; font-family:verdana'>".$row['Category']."</td>"; ?>
			<?php echo "<br/>"?>
			<?php echo '</tr>'; ?>
			<?php echo '<tr>'; ?>
			<?php echo "<td style='font-size:20px; font-weight:20px; font-family:verdana'>".$row['AvailableDay']."</td>"; ?>
			<?php echo "<br/>"?>
			<?php echo '</tr>'; ?>
			<?php echo '<tr>'; ?>
			<?php echo "<td style='font-size:20px; font-weight:20px; font-family:verdana'>".$row['StartTime']."</td>"; ?>
			<?php echo "<br/>"?>
			<?php echo '</tr>'; ?>
			<?php echo '<tr>'; ?>
			<?php echo "<td style='font-size:20px; font-weight:20px; font-family:verdana'>".$row['EndTime']."</td>"; ?>
			<?php echo "<br/>"?>
			<?php echo '</tr>'; ?>
			<?php echo '<tr>'; ?>
			<?php echo '<td>'; ?>
			<?php echo "<a href='Login.php'><input type='submit' class='btn btn-default' name='submit1' value='Book An Appointment' style='background-color:DodgerBlue; border-radius:4px; font-size:20px'></a>"; ?>
			<?php echo '<td>'; ?>
			<?php echo '</tr>'; ?>
			<?php echo '</table>'; ?>
			</div>
			<div class ="col-3"></div>
			</div>
			
			<?php
		}


		
	}
	?>
	<?php
	
	?>
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