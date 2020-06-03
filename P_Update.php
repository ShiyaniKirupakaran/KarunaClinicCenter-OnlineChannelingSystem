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
		input[type=text]{
		border:2px solid #3399ff;
		border-radius:4px;
		
	}
	select{
		font-size:15px;
		padding:5px;
		background-color:#3399ff;
		border:none;
		border-radius:4px;
		color:white;
		
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
		<h1>Karuna Clinic Center</h1>
		<h2 style="font-family:Agency FB;font-size:30px;">You Can Trust Us</h2>
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
		</br>
		<div class = "xy col-12">
		<div class= "x col-3"></div>

 <div class="col-md-7">
		<h1 style="padding-left:500px">Patient Details</h1>
		<form action="login1.jsp" method="POST" style="padding-left: 400px">
      <div class="form-group">
      <label for="firstname">Firstname:</label>
      <input type="text" class="form-control" id="firstname" placeholder="Enter your First name" name="firstname">
    </div>
	<div class="form-group" >
      <label for="lastname">Lastname:</label>
      <input type="text" class="form-control" id="lastname" placeholder="Enter your Last name" name="lastname">
    </div>
	<div class="form-group" >
      <label for="dob">DOB:</label>
      <select name="month">
	  <option value="month">Month</option>
	  <option value="january">January</option>
	  <option value="february">February</option>
	  <option value="march">March</option>
	  <option value="april">April</option>
	  <option value="may">May</option>
	  <option value="june">June</option>
	  <option value="july">July</option>
	  <option value="august">August</option>
	  <option value="september">September</option>
	  <option value="october">October</option>
	  <option value="november">November</option>
	  <option value="december">December</option>
	  </select>
	  <select name="days">
	  <option value="days">Days</option>
	  <option value="1">1</option>
	  <option value="2">2</option>
	  <option value="3">3</option>
	  <option value="4">4</option>
	  <option value="5">5</option>
	  <option value="6">6</option>
	  <option value="7">7</option>
	  <option value="8">8</option>
	  <option value="9">9</option>
	  <option value="10">10</option>
	  <option value="11">11</option>
	  <option value="12">12</option>
	  <option value="13">13</option>
	  <option value="14">14</option>
	  <option value="15">15</option>
	  <option value="16">16</option>
	  <option value="17">17</option>
	  <option value="18">18</option>
	  <option value="19">19</option>
	  <option value="20">20</option>
	  <option value="21">21</option>
	  <option value="22">22</option>
	  <option value="23">23</option>
	  <option value="24">24</option>
	  <option value="25">25</option>
	  <option value="26">26</option>
	  <option value="27">27</option>
	  <option value="28">28</option>
	  <option value="29">29</option>
	  <option value="30">30</option>
	  <option value="31">31</option>
	  </select>
	  <select name="years">
	  <option value="years">Year</option>
	  <option value="1985">1985</option>
	  <option value="1980">1980</option>
	  </select>
	  </div>
    <div class="form-group">
      <label for="gender">Gender:</label>
      <input type="radio" id="gender" name="male" checked="checked">Male <input type="radio" id="gender" name="female">Female
	  </div>
	  <div class="form-group" >
      <label for="address">Address:</label>
      <input type="textarea" class="form-control" id="address" placeholder="Enter your Address" name="address"></textarea>
    </div>
	<div class="form-group" >
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter your Email address" name="email">
    </div>
	<div class="form-group" >
      <label for="phoneno">Phone No:</label>
      <input type="text" class="form-control" id="phoneno" placeholder="Enter your Phone No" name="phoneno">
    </div>
	<div class="form-group" >
      <label for="disease">Disease:</label>
      <input type="text" class="form-control" id="disease" placeholder="Enter your Disease category" name="disease">
    </div>
	<div class="button">
      <button type="submit" class="btn btn-default" style="background-color:#3399ff; color: white; border:none; border-radius:10px; padding:15px">Update</button>
    <button type="reset" class="btn btn-default" style="background-color:#3399ff; color: white; border:none; border-radius:10px; padding:15px">Delete</button>
	</div>
  </form>
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
	
	