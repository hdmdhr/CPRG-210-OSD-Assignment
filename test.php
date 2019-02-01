<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Page</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Raleway:400,700,700i,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">

  </head>
  <body>

    <?php
    // Random number
    $random = rand(1,6);
    echo "<h1>$random</h1>";

    // Time
    $time = time();
    echo "$time <br>";
    echo (date('l jS \of F Y h:i:s A ')."<br>");
    echo "The time is ".date("l jS F Y h:i:s A", mktime(10, 36, 10, 1, 29, 2019))."<br>";

    // String
    $string = "My name is DongMing Hu.";
    $myName = substr($string,0,7);
    echo "$myName <br>";

    $tok = strtok($string, " ");
    while ($tok !== false) {
      echo "$tok <br>";
      $tok = strtok(" ");
    }

    // Function
    function calculateTax($total,$taxRate = 0.05) {
        return $total * (1 + $taxRate);
    }

    $total = calculateTax(50);
    echo "<h1>$total</h1>";


    // Array
    $array = array("my", "name", "is", "DongMing", "Hu");
    echo implode(" ", $array);
    echo "<hr>";
    print_r($array);
    echo "<hr>";


    // --- MySQL ---
    $dbh = mysqli_connect("localhost", "admin", "P@ssw0rd", "travelexperts");

    if (!$dbh) {
      echo "Error number:".mysqli_connect_errno().PHP_EOL;
      echo "Error message:".mysqli_connect_error().PHP_EOL;
      exit;
    } else {
      echo "Connected to database successfully.".mysqli_get_host_info($dbh);
    }

    // Read from SQL
    if ($result = mysqli_query($dbh, "SELECT * FROM products")) {

      // while ($rowarray = mysqli_fetch_row($result)) {
      //   print_r($rowarray);
      //   echo "<br>";
      // }

      // while ($rowarray = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
      //   print_r($rowarray);
      //   echo "<br>";
      // }

      mysqli_free_result($result);
    }

    // Insert into SQL
/*    $insertSql = "INSERT INTO agents(AgtFirstName, AgtLastName) VALUES ('Sheldon','Cooper')";
    if (mysqli_query($dbh, $insertSql)){
      echo "<h3>Insert successfully.</h3>";
    } else {
      echo "<h3>Insert failed.</h3>";
    }
    */

    // Read and print out table to check if insertion succeeded
    if ($result = mysqli_query($dbh, "SELECT * FROM agents")) {

      echo "<table class='table'>";
      while ($agentsrow = mysqli_fetch_array($result, MYSQLI_NUM)){
        echo "<tr><td>$agentsrow[0]</td>
        <td>$agentsrow[1]</td>
        <td>$agentsrow[2]</td>
        <td>$agentsrow[3]</td>
        <td>$agentsrow[4]</td>
        <td>$agentsrow[5]</td>
        <td>$agentsrow[6]</td>
        <td>$agentsrow[7]</td></tr>";
      }
      echo "</table>";
    }

    // Update SQL
    $agentId = 34;
    $updateSql = "UPDATE agents
    SET AgtBusPhone='(780)616-7477', AgentId=35 WHERE AgentId=$agentId";
    if(mysqli_query($dbh, $updateSql)){
      echo "<h2>Update succeeded!</h2>";
    } else {
      echo "<h2>Update failed!</h2>";
    }

    // Delete SQL
    // $deleteSql = "DELETE FROM agents WHERE AgentId=35";
    // if (mysqli_query($dbh, $deleteSql)){
    //   echo "<h2>Delete succeeded!</h2>";
    // } else {
    //   echo "<h2>Delete failed!</h2>";
    // }

    // Prepared statement
    $stmt = mysqli_prepare($dbh, "INSERT INTO agents (AgtFirstName,AgtLastName,AgtBusPhone,AgtEmail,AgencyId) VALUES (?, ?, ?, ?, ?)");
    mysqli_stmt_bind_param($stmt, 'ssssi', $fName, $lName, $phone, $email, $agencyId);
    $fName = 'Stool';
    $lName = 'Lee';
    $phone = '(123)456-7890';
    $email = '1@2.com';
    $agencyId = 1;

    mysqli_stmt_execute($stmt);
    printf("%d Row inserted.\n", mysqli_stmt_affected_rows($stmt));

    mysqli_stmt_close($stmt);

    mysqli_close($dbh);

     ?>

  </body>
</html>
