	<?php
include_once("connection.php"); 
session_start();
if(isset($_POST['submit'])) {	
  $first_name         =$_POST['first_name'];
  $last_name         =$_POST['last_name'];
	$other_name         =$_POST['other_name'];
    $rank    = $_POST['rank'];
  $sub_unit    = $_POST['sub_unit'];
  $unit    = $_POST['unit'];
  $dept          = $_POST['dept'];
	$username      = $_POST['username'];
	$password      = md5($_POST['password']);
	
  $user_group    = $_POST['user_group'];


        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "staff/".$filename;
        move_uploaded_file($tempname, $folder);


		$result = ("INSERT INTO staff (first_name, last_name, department, sub_unit, rank, image, username, password, user_type) VALUES ('$first_name', '$last_name', '$dept', '$sub_unit', '$rank', '$folder', '$username', '$password', 'users')");
//print_r($result);
    $query=mysqli_query($mysqli,$result);

   //$sql = "INSERT INTO users(first_name, last_name, other_name, gender, user_name, password, role_id, dept, unit,  created_by, phone) VALUES ('$first_name', '$last_name', '$other_name', '$gender', '$username', '$password', '$role_id', '$dept', '$unit',  '$created_by', '$phone')";



   
		if($query){
			echo '<center>USER REGISTERED SUCCESSFULLY';
			echo"<br/>"."<a href='login.html'> Click Here to Login</a></center>";
		}
		else{
			echo 'REQUEST NOT SUCCESSFUL';
		}
	}
			
?>