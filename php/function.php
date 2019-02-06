<?php



function insertArrayIntoDBTable(array $agentsArray, $database, $tableName){

  foreach ($agentsArray as $k => $v) {
    $fields[] = $k;
    $values[] = "'".$v."'";  // have to wrap value for insertion in single quote ''
  }
  $fields = implode(",", $fields);
  $values = implode(",", $values);

  $insertSQL = "INSERT INTO $tableName ($fields) VALUES ($values)";
  $result = mysqli_query($database, $insertSQL);
  mysqli_close($database);

  return $result;
}

 ?>
