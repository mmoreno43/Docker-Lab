<?php
$servername = "mariadb";
$username = "root";
$password = "s3cr3t";
$dbname = "testapp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
#} #else{
   # echo "connected";
}


?>
