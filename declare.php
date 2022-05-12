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
        <a class="" href="dashboards.php">Home</a>
         <a href="monitor_vote.php">Monitor Voting</a>
         <a href="select_staff.php">Nominate Staff</a>
         <a href="declare.php">Declare Vote Result</a>
         <div class="left">
            <a class="" href="staff.php"><i style="color: red;">You are logged in as:</i>&nbsp;<span><b style="color: blue;"><?php echo "$fisrt_name $last_name";?></b></span></a>
         <a href="logout.php">Logout</a>
         
         
     </div>
       </div>
    <br>
    <div class="container">
        <div class="text-box text-box1">
            <h1 >SELECT HIGHEST SCORE STAFF TO REPRESENT THE STAFF FOR THE MONTH: </h1>
              
           <br>
        <br>
        <br> <br>
        <br>
        <br>
           <?php
//  session_start();
 $voter_id = $_SESSION['id'];
 $currentTimeinSeconds = time();  
 $currentDate = date('Y-m-d', $currentTimeinSeconds);
 $month = date('m'); 
                

include_once("connection.php"); 

if(isset($_POST['submit'])) {
 

  $candidate_id         =$_POST['candidate_id'];
  

	$result = ("INSERT INTO beststaff (staff_id, month) 
                                  VALUES ('$candidate_id','$month')    ");
  //print_r($result);
  $query=mysqli_query($mysqli,$result);

		if($query){
      
			echo '<h1><center>You have SUCCESSFULLY selected best candidate for the month. Thanks</h1>';
			
		}
		else{
			echo 'Not successful';
		}
	}
			
?>
        <hr>
       
        
        <form action="" method = "POST">
            
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