<?php 
session_start();
   
include 'connection.php';
if(isset($_POST['submit'])) {	
	$username =$_POST['username'];
	$_SESSION['username1'] =$_POST['username'];
	$password = md5($_POST['password']);

$sql = "SELECT * from staff where username ='$username' and password = '$password' limit 1";
print_r($sql);
$result = mysqli_query($mysqli,$sql);

$row = mysqli_fetch_assoc($result);
$_SESSION['id']= $row['id'];
$_SESSION['fname']= $row['first_name'];
$_SESSION['lname']= $row['last_name'];
$_SESSION['oname']= $row['other_name'];
$_SESSION['dept']= $row['dept'];

$_SESSION['user_type']= $row['user_type'];
if(mysqli_num_rows($result) != 1){    
  
echo "<script>alert(' Wrong Username or Password Access Denied !!! Try Again');
    window.location='index.php';
						</script>";          
						
	}
	else
	{
						
	 if($row['user_type'] == 'users' ) //Manager
	 {
	  ($_SESSION['security_3']= 'manager');
		  header('location:staff.php');
	}
	elseif($row['user_type'] == 'admin' ) //superuser
	 {
	  $_SESSION['security_1']= 'superuser';
	  header('location:dashboards.php');
	}
	

	else
	{
echo "You do not belong to any group";
	}
 }

}

?>