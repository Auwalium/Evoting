<?php
include ("function.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, th,td{
             border: 1px solid black;
             border-collapse: collapse;
             text-align: center;
             width: 450px;
             font-size: 15px;
        }
       

    </style>
    <title>Monitor vote</title>
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
    <tr>
        <span style="font-size:13px; font-weight: bolder;"> Candidate Name</span>
        &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;
        &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;
        <span style="font-size:13px; font-weight: bolder;"> Vote Counts</span>
    </tr>
<?php

include_once("connection.php");
$select = "SELECT COUNT(votes.id) as 'id', votes.candidate_id, staff.first_name, staff.last_name from votes
INNER JOIN staff on staff.id = votes.candidate_id
GROUP by votes.candidate_id";

$result1 = mysqli_query($mysqli, $select);
while($row = mysqli_fetch_assoc($result1))
 {                   

$first_name =  $row["first_name"];
$last_name =  $row["last_name"];
$id =  $row["id"];

echo "

<div class='as'>
          
              <table>
                  <tr>
                      
                      <th scope='col'>$first_name  $last_name</th>
                      <th scope='col'>$id</th>
                  </tr>
                  
              </table>
            </div>

";
                       
 }



?>





        
</body>
</html>