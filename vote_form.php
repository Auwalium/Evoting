<?php
include ("function.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="topnav">
        <a class="" href="staff.php"><i style="color: red;">You are logged in as:</i>&nbsp;<span><b style="color: blue;"><?php echo "$fisrt_name $last_name";?></b></span></a>
    
        <a class="" href="vote_form.php">Home</a>
        <a href="staff.php">View Nominated Staff</a>
        <div class="left">
          <!-- <a href="staff.html">Staff Portal</a> -->
        <a href="logout.php">Logout</a>
       
      </div>
    <br><br><br><br>
    <div class="container">
        <div class="text-box text-box1">
            <h1 >VOTE STAFF BY: </h1>
              <p><h3>Punctuality<br>Deducated to Duty <br>Dress Code <br>Professional Competent</h3></p>
            </div>
          

           <br>
        <br>
        <br> <br>
        <br>
        <br>
           <?php
 session_start();
 $voter_id = $_SESSION['id'];


include_once("connection.php"); 

if(isset($_POST['submit'])) {
 
  $voter_id             = $_SESSION['id'];
  $candidate_id         =$_POST['candidate_id'];
  

	$result = ("INSERT INTO votes (voter_id, candidate_id) 
                                  VALUES ('$voter_id','$candidate_id')    ");
  //print_r($result);
  $query=mysqli_query($mysqli,$result);

		if($query){
      
			echo '<center>You have SUCCESSFULLY voted for your candidate. Thanks';
			
		}
		else{
			echo 'You cannot Vote two time. Kindly Logout. Thanks';
		}
	}
			
?>
        <hr>
       
        
        <form action="" method = "POST">
            <span style="font-size: 14px; font-weight:bold; ">Please, select the candidate of your choice: </span>
            <tr><td>
               
                      <?php
          
              include_once("connection.php");
               echo "<select id='dept' name='candidate_id'>";
                
               $select = "SELECT staff.first_name, staff.last_name, selected_staff.staff_id from staff inner JOIN selected_staff on selected_staff.staff_id = staff.id ORDER by selected_staff.id DESC limit 3";
               $result1 = mysqli_query($mysqli, $select);
               while($row = mysqli_fetch_assoc($result1)) {
                    
                    echo "<option value='" . $row["staff_id"]." '>" .$row["first_name"]. "-" .$row["last_name"]. "</option>";    
                        
                }
               echo "</select>";   

              ?>
                </td>
             </tr>   
                 <button type="submit" name = "submit" class="registerbtn">Submit Vote</button>
        </div>

      </form>
</body>
</html>