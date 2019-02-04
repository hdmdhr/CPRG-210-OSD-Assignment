<?php
    $agent_data;
    if (isset($_POST["submit"])) {
        if (!empty($_POST)){
            foreach ($_POST as $key => $value){
                $agent_data[$key] = $value;
            }
        }
        $error_msg = "";
        if (!$_POST["AgtFirstName"]) {
            $error_msg .= "This form requires a first name.<br>";
        } 

        if (!$_POST["AgtLastName"]) {
            $error_msg .= "This form requires a last name.<br>";
        } 

        if (!$_POST["AgtBusPhone"]) {
            $error_msg .= "This form requires a business phone number.<br>";
        } 

    }
?>
<!DOCTYPE html>
<html>
<head>

    <title>New Agent Page</title>

</head>
<body>
<header>
    <?php include_once("header.php") ?>
</header>

    <?php include_once("menu.php") ?>
    <section>
    <?php
        include_once("functions.php");
        if (isset($error_msg)){
            if ($error_msg == "") {
                $result = AgentCreate($agent_data);
                if ($result){
                    print("the Agent was added to the database.");
                } else {
                    print("there was an error with the agent data, please try again.");
                }
            }
            elseif (!empty($error_msg)){
                print "<h4 style='color:red;'>$error_msg</h4>";
            }
        } 
        ?>

        <form method="post" action="#">
        <label for="AgentFirstName">First Name:</label><input type="text" name="AgtFirstName" 
        value="<?php if (isset($agent_data["AgtFirstName"])) {echo $agent_data["AgtFirstName"];} else {echo "";} ?>">
        <label for="AgtLastName">Last Name:</label><input type="text" name="AgtLastName" 
        value="<?php if (isset($agent_data["AgtLastName"])) {echo $agent_data["AgtLastName"];} else {echo "";} ?>">        
        <label for="AgtBusPhone">Business Phone Name:</label><input type="text" name="AgtBusPhone" 
        value="<?php if (isset($agent_data["AgtBusPhone"])) {echo $agent_data["AgtBusPhone"];} else {echo "";}?>">
        <input type="submit" name="submit" value="submit">
        </form>

    </section>
    <?php include_once("footer.php") ?>
</body>
</html>


