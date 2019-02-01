<?php

$mysqli = new mysqli("localhost", "admin", "P@ssw0rd", "travelexperts");
if ($mysqli->connect_errno) {
  echo "Error number: ".$mysqli->connect_error.PHP_EOL;
  exit();
} else {
  echo "Connected successfully.<br>".$mysqli->host_info."<hr>";
}

$sql = "SELECT*FROM agents";
$result = $mysqli->query($sql);
if ($result) {
  while($row = $result->fetch_array(MYSQLI_ASSOC)) {
    print_r($row);
  }
} else {
  echo "No result.";
}

$mysqli->close();

 ?>
