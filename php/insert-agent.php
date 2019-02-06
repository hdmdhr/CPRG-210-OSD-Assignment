<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Agent Added to Database</title>
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Raleway:400,700,700i,900" rel="stylesheet">
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/main.css">
</head>

<body>

<?php

  if (isset($_POST)) {
    // TODO  validate all fields
    if (preg_match('/[12]/',$_POST['AgencyId'])) {
      echo "agency id matches.<br>";
    } else {
      echo "please enter agency ID.<br>";
    }
    // 1.get the database, 2.include insert function, 3.pass post array into function 4.print succeed fail message

    include_once('function.php');

    $travel_experts = mysqli_connect("localhost", "admin", "P@ssw0rd", "travelexperts");

    $tableName = 'agents';
    if (insertArrayIntoDBTable($_POST, $travel_experts, $tableName)) {
      echo "<h2>Agent <em>".$_POST['AgtFirstName']."</em>'s info was successfully inserted into database table <em>$tableName</em>.<a href='../new-agent.php' ><button class='btn btn-outline-secondary ml-4'>Go Back</button></a></h2>";

      // apeend message to a log file
      $text = "".$_POST['AgtFirstName']." ".$_POST['AgtLastName']."'s information was added at ".date('l jS \of F Y h:i:s A').".";
      $myfile = file_put_contents('logs.txt', $text.PHP_EOL , FILE_APPEND | LOCK_EX);
    } else {
      echo "<h2>Couldn't insert agent information.<a href='../new-agent.php' ><button class='btn btn-outline-secondary ml-4'>Go Back</button></a></h2>";
    }
  }

 ?>

</body>
</html>
