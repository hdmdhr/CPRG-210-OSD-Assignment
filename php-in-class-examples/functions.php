<?php

    function ConnectDB(){
        include_once("variables.php");
        $link = new mysqli("localhost", "admin", "P@ssw0rd", "travelexperts");
        if ($link->connect_errno){
            print("There was an error connecting:". $link->connect_errno . " -- " . $link->connect_error);
            exit;
        }
        return $link;
    }

    function CloseDB($link) {
        mysqli_close($link);
    }

    function AgentCreate ($agent_data){
        $dbh = ConnectDB();

        $sql = "INSERT INTO agents (
            AgtFirstName,
            AgtMiddleInitial,
            AgtLastName,
            AgtBusPhone,
            AgtEmail,
            AgtPosition,
            AgencyId) 
            VALUES (?,?,?,?,?,?,?)";

        $stmt = mysqli_prepare($dbh, $sql);
        mysqli_stmt_bind_param($stmt, 'ssssssi',
            $agent_data["AgtFirstName"],
            $agent_data["AgtMiddleInitial"],
            $agent_data["AgtLastName"],
            $agent_data["AgtBusPhone"],
            $agent_data["AgtEmail"],
            $agent_data["AgtPosition"],
            $agent_data["AgencyId"]);
        $result = mysqli_stmt_execute($stmt);
        
        $fh = fopen("new_agent_log.txt", "a");
        
        fwrite($fh, print_r($agent_data, true));
        fclose($fh);

        mysqli_stmt_close($stmt);
        
        CloseDB($dbh);
        return $result;
    }

    function GetCustomers() {
        include_once("classes.php");

        $dbh = ConnectDB();

        $sql = "SELECT * FROM customers";

        if (!$result = $dbh->query($sql)){
            echo "ERROR: the sql failed to execute. <br>";
            echo "SQL: $sql <br>";
            echo "Error #: ". $dbh->errono. "<br>";
            echo "Error msg: ". $dbh->error ." <br>";
        }

        if ($result === 0 ){
            echo "There were no results<br>";
        }
        // initializing array for all customers
        $customers = array();
        // looping through result for each customer($cust)
        while ($cust = $result->fetch_assoc()){
            // Constructing a singe customer object
            $customer = new Customer(
                $cust["CustomerId"],
                $cust["CustFirstName"],
                $cust["CustLastName"],
                $cust["CustAddress"],
                $cust["CustCity"],
                $cust["CustProv"],
                $cust["CustPostal"],
                $cust["CustCountry"],
                $cust["CustHomePhone"],
                $cust["CustBusPhone"],
                $cust["CustEmail"],
                $cust["AgentId"]);
            // adding the customer object to array of customers
            $customers[] = $customer;
        } // end of While
        
        CloseDB($dbh);
        return $customers; // this is an array of customer objects

    }

    function GetUsers(){
        $user_array = file("users.txt");
        $users = array();
        foreach ($user_array as $row) {
            $items = explode(",", $row);
            $users[trim($items[0])] = trim($items[1]);
        }
        return $users;
    }
?>