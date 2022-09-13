<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sampledb";

// Create connection
$con = mysqli_connect("localhost", "root", "", "sampledb");
define('conn', $con);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
 //echo "Connected successfully";
