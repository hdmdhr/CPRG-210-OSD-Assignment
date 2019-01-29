<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Test Page</title>
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


     ?>

  </body>
</html>
