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
input[type=text], input[type=password] ,input[type=textarea],input[type=number],input[type=email]{
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
	<form method="post" action="Login.php">	
	<button type="submit"  name="logout" style="float:right;font-size:22px"><b>Log Out</b></button>
	</form>
  </li>
	
</ul>
</h2>
<div class="col-sm-6">
						<form action="P_View.php" method="POST"> 
								<div class="col-sm-4" >
									<input style="border-color:grey;" class="form-control"  name="keyname" type="text" placeholder="Name" id="firstname">
									
								</div>
								<div class="col-sm-2">
									<input style="padding-top:5px;" class="btn btn-dark" type="submit" value="Search" name="submit">
									
								</div>
								


							</form>
						
					</div>										
					
												
					
<div class="container col-6">

<table class="table table-striped table-bordered" id="example">
								<thead>
									<tr>
										<th>First Name</th>
										<th>Last Name</th>
										<th>DOB</th>
										<th>Gender</th>
										<th>Address</th>
										<th>Email</th>
										<th>Phone NO</th>
										<th>Disease</th>
										
										
											
									</tr>
										<?php 
											if(isset($_POST["submit"])) {

												$sql = "SELECT * FROM patient WHERE  Firstname LIKE '%{$_POST["keyname"]}%'";

											$result = $con -> query($sql);
											if ($result->num_rows>0 ) {
												$i=0;
											  while($row = $result->fetch_assoc()) {
											  		$i++;

													echo "<tr>";
														  echo "<td>"; echo $row['Firstname'];  echo "</td>";
														  echo "<td>"; echo $row['Lastname'];  echo "</td>";
														  echo "<td>"; echo $row['DOB'];  echo "</td>";
														  echo "<td>"; echo $row['Gender'];  echo "</td>";
														  echo "<td>"; echo $row['Address'];  echo "</td>";
														  echo "<td>"; echo $row['Email'];  echo "</td>";
														  echo "<td>"; echo $row['Phone_No'];  echo "</td>";
														  echo "<td>"; echo $row['Disease'];  echo "</td>";
														  
														  
														  echo "</tr>";
														}
											}
												}
										?>
								</thead>
							</table>
	</div>
	
</body>
</html>
	
	