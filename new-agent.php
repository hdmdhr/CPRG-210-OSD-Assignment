// PHP Assignment day 3

<?php

include_once('php/var.php');
include_once('php/function.php');

$travel_experts = mysqli_connect("localhost", "admin", "P@ssw0rd", "travelexperts");

if (insertArrayInto($agents, $travel_experts)){
  echo "<h3>Insertion succeeded dude!</h3>";
} else {
  echo "<h3>Insertion failed fool!</h3>";
};




 ?>
