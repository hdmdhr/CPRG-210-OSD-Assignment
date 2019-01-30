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

    // Insert
/*    $insert = "INSERT INTO agents(AgtFirstName, AgtLastName) VALUES ('Sheldon','Cooper')";
    if (mysqli_query($dbh, $insert)){
      echo "<h3>Insert successfully.</h3>";
    } else {
      echo "<h3>Insert failed.</h3>";
    }
    */

    // Check if insertion succeeded
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

    mysqli_close($dbh);

     ?>

  </body>
</html>
