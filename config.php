<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "inc_resolve";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo $mysqli->host_info . "\n";
//echo "Connected successfully";

/*
$sql = "SELECT cunyid FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["cunyid"]. "<br>";
  }
} else {
  echo "0 results";
}*/
?>
