<!-- PHP Assignment day 3 - Insert a associative array into mySQL -->

<?php


  if (isset($_POST)) {
    print_r($_POST);  // print the POST array
    //TODO 1.get the database, 2.include insert function, 3.pass post array into function 4.print succeed fail message

    include_once('function.php');

    $travel_experts = mysqli_connect("localhost", "admin", "P@ssw0rd", "travelexperts");

    if (insertArrayInto($_POST, $travel_experts)) {
      echo "<h2>Agent ".$_POST['AgtFirstName']."'s info was successfully inserted into database.</h2>";

      // apeend message to a log file
      $txt = $_POST['AgtFirstName']."'s information was added at ".date('l jS \of F Y h:i:s A ')."<hr>";
      $myfile = file_put_contents('logs.html', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);

    } else {
      echo "<h2>Couldn't insert agent information.</h2>";
    }

    mysqli_close($travel_experts);

  }




 ?>
