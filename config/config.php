<?php
$servername = "sql200.infinityfree.com";
$username = "if0_40870351";
$password = "Patiencehosting";
$dbname ="if0_40870351_patienceportfolio";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
 if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} else {
//  echo "Connected successfully";
}
?>