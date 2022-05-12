
<?php
include ("function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
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
        <center><marquee><h1>Welcome To Admin Dashboard</h1></marquee></center>
</body>
</html>