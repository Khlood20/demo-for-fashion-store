<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alarm_store";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

//Check connection
 if (!$con) {
   die("Connection failed: " . $con-> connect_error);
 }
// echo "Connected successfully";

?>