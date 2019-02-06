<?php 
    include_once("top.php"); 

    include_once("functions.php");
    $customers = GetCustomers(); // getting an array of customer objects
?>

<!DOCTYPE html>
<html>

<head>

    <title>Customer List Page</title>

    <style>
        table, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<header>
    <?php include_once("header.php") ?>
    <?php print(getGreeting());?>
</header>

    <?php include_once("menu.php") ?>
    <section>
        <table>
            <?php
                foreach($customers as $cust){
                    print("<tr>");
                    print("<td>" . $cust->id . "</td>");
                    print("<td>" . $cust . "</td>");
                    print("<td>" . $cust->address . "</td>");
                    print("<td>" . $cust->city . "</td>");
                    print("<td>" . $cust->prov . "</td>");
                    print("<td>" . $cust->postal . "</td>");
                    print("<td>" . $cust->country . "</td>");
                    print("<td>" . $cust->homePhone . "</td>");
                    print("<td>" . $cust->busPhone . "</td>");
                    print("<td>" . $cust->email . "</td>");
                    print("<td>" . $cust->agentId . "</td>");
                    print("</tr>");
                }
            ?>
        </table>
    </section>
    <?php include_once("footer.php") ?>
</body>
</html>