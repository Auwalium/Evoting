
<!DOCTYPE html>
<html lang="en">
<head>
  </style>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
<div class="topnav">
   <!-- <a href="index.html">Admin Page</a> -->
    <a class="" href="index.php">Home</a>
   
    <div class="left">
    <a href="login.html">Login</a>
    <a href="register.html">Register</a>
</div>
  </div>
  <center><h1>Best Staff for Months</h1></center>
  <?php
              
              include_once("connection.php"); 
              $select = "SELECT staff.first_name, staff.last_name, staff.image, beststaff.month from staff inner JOIN beststaff
              on beststaff.staff_id = staff.id ORDER by beststaff.id DESC limit 3";
              $result1 = mysqli_query($mysqli, $select);
              while($row = mysqli_fetch_assoc($result1)) 
              {
                 $image = $row["image"];
                 $name = $row["first_name"];
                 $last = $row["last_name"];
                 $month = $row["month"];
                
                 if ($month == 1) 
                 {
                   $month1 = 'Januay';
                 } 
                 elseif 
                 ($month == 2)
                 {
                  $month1 = 'February';
                 } 
                elseif 
                ($month == 3)
                {
                 $month1 = 'March';
                } 
                elseif 
                 ($month == 4)
                 {
                  $month1 = 'April';
                 } 
                 elseif 
                 ($month == 5)
                 {
                  $month1 = 'May';
                 } 
                 elseif 
                 ($month == 6)
                 {
                  $month1 = 'June';
                 } 
                 elseif 
                 ($month == 7)
                 {
                  $month1 = 'July';
                 } 
                 elseif 
                 ($month == 8)
                 {
                  $month1 = 'August';
                 } 
                 elseif 
                 ($month == 9)
                 {
                  $month1 = 'September';
                 } 
                 elseif 
                 ($month == 10)
                 {
                  $month1 = 'October';
                 }
                 elseif 
                 ($month == 11)
                 {
                  $month1 = 'November';
                 }  
                 else
                  {
                  $month1 = 'December';
                 }
                 
                   
                   
                   
                   echo "  <section class= 'subjects'>
                   <div class='box-container'>
                      <div class='box'>
                         <img src='$image' >
                         <h1>$name  $last<br> </h1>
                         <p></p>
                       <p>$month1</p>
                      </div>
                   </div>
                </section> ";
                       
               }
             

     ?>
               
      </div>
   </div>

</section>    
</body>
</html>