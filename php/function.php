<?php



function insertArrayInto(array $agentsArray, $database){

  foreach ($agentsArray as $k => $v) {
    $fields[] = $k;
    $values[] = "'".$v."'";  // have to wrap value for insertion in single quote ''
  }
  $fields = implode(",", $fields);
  $values = implode(",", $values);

  $insertSQL = "INSERT INTO agents ($fields) VALUES ($values)";
  if (mysqli_query($database, $insertSQL)){
    return true;
  } else {
    return false;
  }

}

 ?>
