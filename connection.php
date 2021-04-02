<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "heratuniversity";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}
echo "<br><br><br><br> connection was Successfully";
