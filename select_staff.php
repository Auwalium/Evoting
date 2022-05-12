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
            <h1 style="color: rgb(4, 80, 4);">Select Staff To Be Nominate  </h1>
           </div>
        <hr>
       
        <form action="" method = "POST" >
           
        <?php



include_once("connection.php"); 
// This time funtion select the current time that staff was nominated and save to db
if(isset($_POST['submit'])) {
  $currentTimeinSeconds = time();  
  $currentDate = date('Y-m-d', $currentTimeinSeconds); 
  $y = date('Y'); 
  $month = date('m'); 
  $m1 = date('m') + 1;
  $d = date('d'); 

  $staff1         =$_POST['staff1'];
  $staff2         =$_POST['staff2'];
	$staff3         =$_POST['staff3'];
 

	$result = ("INSERT INTO selected_staff (staff_id, month) 
                                  VALUES ('$staff1','$month'),
                                         ('$staff2', '$month'),
                                         ('$staff3', '$month')     ");
 // print_r($result);
  $query=mysqli_query($mysqli,$result);

   $sql = "INSERT INTO `selected_staff(staff_id, month) VALUES ('$staff_id', '$month')";



   
		if($query){
      
			echo '<center>Staff Nomination for this month  is SUCCESSFULLY';
			
		}
		else{
			echo 'REQUEST NOT SUCCESSFUL';
		}
	}
			
?>
<br>
<br>
            <tr><td>
                <label style=" font-size: 13px; font-weight:bold;">Select First Staff:</label></td><td>
                      <?php
               echo "<select id='dept' name='staff1'>";
                
               $select = "SELECT * from staff";
               $result1 = mysqli_query($mysqli, $select);
               while($row = mysqli_fetch_assoc($result1)) {
                    
                    echo "<option value='" . $row["id"]." '>" .$row["first_name"]. "-" .$row["last_name"]. "</option>";    
                        
                }
               echo "</select>";   

              ?>
                </td>
             </tr> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;      
             <tr><td>
                <label style=" font-size: 13px; font-weight:bold;">Select Second Staff:</label></td><td>
                      <?php
               echo "<select id='dept' name='staff2'>";
                
               $select = "SELECT * from staff";
               $result1 = mysqli_query($mysqli, $select);
               while($row = mysqli_fetch_assoc($result1)) {
                    
                    echo "<option value='" . $row["id"]." '>" .$row["first_name"]."-" .$row["last_name"]. "</option>";    
                        
                }
               echo "</select>";   

              ?>
                </td>
             </tr> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;    
             <tr><td>
                <label style=" font-size: 13px; font-weight:bold;">Select Third Staff:</label></td><td>
                      <?php
               echo "<select id='dept' name='staff3'>";
                
               $select = "SELECT * from staff";
               $result1 = mysqli_query($mysqli, $select);
               while($row = mysqli_fetch_assoc($result1)) {
                    
                    echo "<option value='" . $row["id"]." '>" .$row["first_name"]."-" .$row["last_name"]. "</option>";    
                        
                }
               echo "</select>";   

              ?>
                </td>
             </tr>      
            <br>
            <button type="submit" name = "submit" class="registerbtn">Submit Nomination</button>
        </div>

      </form>
</body>
</html>