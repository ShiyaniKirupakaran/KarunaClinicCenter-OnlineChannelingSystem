<?php
if(isset($_POST['submit'])) 
{ 
mysql_connect("localhost", "root", "") or die(mysql_error()); 
mysql_select_db("karuna_clinic_center") or die(mysql_error()); 

$id = $_POST['id']; 
}
$sql="SELECT * FROM login WHERE Patient_id='.$id.'";
$r = mysql_query($sql);
if(!$r) {

$err=mysql_error();

print $err;

exit();
}

if(mysql_affected_rows()==0)
{

print "no such login in the system. please try again.";

exit();
}
else {

$row=mysql_fetch_array($r);

$password=$row&lt;"password"&gt;;

$email=$row&lt;"email"&gt;;

$subject="your password";

$header="from:you@yourdomain.com";

$content="your password is ".$password;

mail($email, $subject, $row, $header);

print "An email containing the password has been sent to you";

}
?>

for.php

<html>
<head>
</head>
<body>
<form name="forgot" method="post" action="forgot_password.php"> 
Enter ur id:
<input name="id" type="text" value="" /> 

<input type="submit" name="submit" value="submit"/> 
<input type="reset" name="reset" value="reset"/> 
</form> 

</body>
</html>


Please solve me.