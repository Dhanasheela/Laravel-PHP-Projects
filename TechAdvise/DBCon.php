<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Techadvise";
// Create connection
$con = mysqli_connect("localhost", "root", "", "Techadvise");
define('conn', $con);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}
 //echo "Connected successfully";