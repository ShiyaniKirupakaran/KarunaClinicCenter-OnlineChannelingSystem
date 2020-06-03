<?php
$con=new mysqli('localhost','root','','karuna_clinic_center');

if($con-> connect_errno)
{
	echo $con->connect_error;
	die();
}

?>

<!DOCTYPE html>
<html>
<head>
	
	<title> Online Channelling </title>

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
		@keyframes slider{
		0%{
		left :0;
		}
		20%{
		left :0;
		}
		25%{
		left :-100%;
		}
		45%{
		left :-100%;
		}
		50%{
		left :-200%;
		}
		70%{
		left :-200%;
		}
		75%{
		left :-300%;
		}
		95%{
		left :-300%;
		}
		100%{
		left :-400%;
		}
		}
		#slider{
		overflow:hidden;
		}
		
		#slider figure img{
		width:20%;
		float:left;
		}
		#slider figure{
		position:relative;
		width:500%;
		margin:0;
		left:0;
		text-align:left;
		font-size:0;
		animation:20s slider infinite;
		} 
		
		.body{
			background-image:url("Aurora-Soft-Blue-abstract-wallpapers-illusions-polish-shape-abstract-aurora-1920x1080.jpg");
			height:400px;
			background-position:center; 
			border-radius: 25px 25px 25px 25px;
			width:100%;
			border-radius: 0px 0px 25px 25px;
			
		}
		
		.header{
			background-color:  #d5dbdb;
			text-decoration: none;
			font-family:Algerian;
			color:#0b8276;
			font-size:25px;
			text-align:center;
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
	</style>

</head>
<body>

	<div class="title col-12">
	<div class="a col-10">
		<h1>Karuna Clinic Center</h1>
		
		<h2 style="font-family:Agency FB;font-size:30px;">You Can Trust Us</h2>
		</div>
		<div class="b col-2">
		<p><image src="images/login-icon-png-20.png" width="40%" height="40%"></br><a href="Login.php" style="font-family:Agency FB;font-size:30px;"> LogIn</a></p>
		</div>
	</div>
	
	<div class="header col-12">
	
		<div  class="Home col-4">
			<a href="Home.php">Home</a>
		</div>
		
		
		
		<div class="Customer col-4">
			<a href="Services.php">Services</a>
		</div>
		
		<div class="Contact col-4">
			<a href="Contact.php">Contact Us</a>
		</div>
		
	</div>
	
	
	
	<div class="body col-12" id="slider">
	<figure>
	<img src="images\90164823-health-insurance-concept-doctor-in-hospital-with-health-insurance-related-icons-in-modern-graphic-in.jpg" width="95%" height="90%" align="center">
	<img src="images\aerial-aerial-view-application-935869-1024x643.jpg" width="95%" height="90%" align="center">	
	<img src="images\ani-kolleshi-684082-unsplash.jpg" width="95%" height="90%" align="center">
	<img src="images\ab7140_b81b1235e06142dfb1567edbdbb9f831_mv2.jpg" width="95%" height="90%" align="center">
	<img src="images\medical-team-technology.jpg" width="95%" height="90%" align="center">	
	</figure>
	</div>
	
	<div class="description col-12">
	<p style="font-family:Agency FB;font-size:20px;">All we care is your health and well being hence, we treat all our patients with full care, assisting all their needs while ensuring their health and fitness. Here, patients have access to all medical and surgical sub-specialties within a single institution, empowering the medical team to address all the patient’s health needs and treat the whole person.

We are committed to providing quality health care for all since our goal is to inspire and empower you and our community to engage in the pursuit of health and well-being for life. Our expertise team and leading medical practitioners are dedicated to providing their service in every day for you.</p>
	<p style="font-family:Agency FB;font-size:20px;">We’re not your typical healthcare provider; we’re here to give the care and coverage you need to thrive. We are operating since 1999 under the new management while adding enormous value to the Healthcare service of Sri Lanka. Our Clinic Center not only provides specialized medical services but also has a staff that understands its patients’ varied needs thus providing them and their families a personalized service in a truly comfortable environment.</p>
	</div>
	
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