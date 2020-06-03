<?php
    session_start();
    if (isset($_POST["submit"])) {
        $UN = $_POST["uname"];
        $Pwd = $_POST["psw"];
		$get=$_POST["category"];
		
		$con = mysqli_connect("localhost", "root", "", "karuna_clinic_center");
        mysqli_select_db($con, "karuna_clinic_center");

        
        
        if($get=='Patient'){

        $Q2 = "select * from patient where Username='$UN' and Password='$Pwd' and status='1'";
        $result = mysqli_query($con, $Q2);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {
            
              
              $_SESSION['Patient_id']=$row['Patient_id'];
              $_SESSION['Username']=$row['Username'];
                $_SESSION['Password']=$row['Password'];
                $_SESSION['First_Name']=$row['First_Name'];
                

                header("location:../doctorsdetails.php");
              

              
        } 
		else {
            echo "Invalid user name and password";
        }
        }
    elseif($get=='Doctor'){

        $Q2 = "select * from doctor where Username='$UN' and Password='$Pwd'";
        $result = mysqli_query($con, $Q2);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {
            
              header("location:../doctor.php");
              $_SESSION['uname']=$UN;
                $_SESSION['Password']=$row['Password'];
              
        } 
		else {
            echo "Invalid user name and password";
        }
		}
		elseif($get=='Admin'){

        $Q2 = "select * from admin where Username='$UN' and Password='$Pwd'";
        $result = mysqli_query($con, $Q2);
       // $row = mysqli_fetch_assoc($result);
        if ($row = mysqli_fetch_assoc($result)) {
            
            $_SESSION['Admin_id']=$row['Admin_id'];
            $_SESSION['Username']=$row['Username'];
              $_SESSION['Password']=$row['Password'];
              $_SESSION['First_Name']=$row['First_Name'];
              header("location:../Admin.php");
              
        } 
		else {
            echo "Invalid user name and password";
        }
		}
		
    }
	
    ?> 