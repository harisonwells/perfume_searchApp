<?php
$servername = "localhost";
$username = "username";
$password = "BFJ_7w-2ppairUa5";
$dbname = "perfumedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql = "INSERT INTO perfumes (pname)
// VALUES ('tomford')";

// if ($conn->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $conn->error;
// }

$conn->close();
?>


