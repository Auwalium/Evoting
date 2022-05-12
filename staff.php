<?php
include ("function.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Staff  page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
<div class="topnav">

    <a class="" href="staff.php"><i style="color: red;">You are logged in as:</i>&nbsp;<span><b style="color: blue;"><?php echo "$fisrt_name $last_name";?></b></span></a>
    
    <div class="left">
    <a href="logout.php">Logout</a>
    <a href="vote_form.php">Vote</a>
</div>
  </div>  

  <center><h1>Nominated Staff for the Month</h1></center>
      <?php
              
               include_once("connection.php"); 
               $select = "SELECT staff.first_name, staff.last_name, staff.image from staff inner JOIN selected_staff
               on selected_staff.staff_id = staff.id ORDER by selected_staff.id DESC limit 3";
               $result1 = mysqli_query($mysqli, $select);
               while($row = mysqli_fetch_assoc($result1)) 
               {
                  $image = $row["image"];
                  $name = $row["first_name"];
                  $last = $row["last_name"];
                 
                    
                    
                    echo "  <section class= 'subjects'>
                    <div class='box-container'>
                       <div class='box'>
                          <img src='$image' >
                          <h4>$name <br> </h4>
                          <p>$last</p>
                          
                       </div>
                    </div>
                 </section> ";
                        
                }
              

      ?>
                


   
    <div class="text-box text-box1">
        <h1 >VOTE STAFF BY: </h1>
  	    <p><h3>Punctuality<br>Deducated to Duty <br>Dress Code <br>Professional Competent</h3></p>
        <button class="btn"><a style="text-decoration: none; font-size: 15px; color: black;" href="vote_form.php">Vote</a></button>

        </div>
</body>
</html>
  
    
</body>
</html>