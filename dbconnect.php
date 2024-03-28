<?php
$servername = "localhost";
$username = "root";
$password = "BFJ_7w-2ppairUa5";
$dbname = "perfumedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>