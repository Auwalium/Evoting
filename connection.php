
<!--MySQLi Object-Oriented-->
<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "evoting";

// Create connection
$mysqli = mysqli_connect($servername, $username, $password, $db_name); 
// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>


