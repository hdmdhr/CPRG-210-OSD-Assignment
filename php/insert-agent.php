<!-- PHP Assignment day 3 - Insert a associative array into mySQL -->

<?php


  if (isset($_POST)) {
    // TODO  validate all fields
    print_r($_POST);
    echo "<hr>";
    if (preg_match('/[12]/',$_POST['AgencyId'])) {
      echo "agency id matches.<br>";
    } else {
      echo "please enter agency ID.<br>";
    }
    // 1.get the database, 2.include insert function, 3.pass post array into function 4.print succeed fail message

    include_once('function.php');

    $travel_experts = mysqli_connect("localhost", "admin", "P@ssw0rd", "travelexperts");

    if (insertArrayInto($_POST, $travel_experts)) {
      echo "<h2>Agent ".$_POST['AgtFirstName']."'s info was successfully inserted into database.</h2>";

      // apeend message to a log file
      $txt = "".$_POST['AgtFirstName']." ".$_POST['AgtLastName']."'s information was added at ".date('l jS \of F Y h:i:s A').".";
      $myfile = file_put_contents('logs.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
    } else {
      echo "<h2>Couldn't insert agent information.</h2>";
    }

    mysqli_close($travel_experts);

  }




 ?>
