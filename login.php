<?php
/**************************
*
* Author: DongMing Hu
* Date: Feb. 11, 2019
* Description: need to login to enter new agent
*
**************************/

if(session_id() == '' || !isset($_SESSION)) {
    session_start();
}

// if (!isset($_COOKIE['login-session'])) {
//   setcookie('login-session', $_SESSION['user-id'], time()+3600*5);
// }

  // --- Reading users-info.txt and convert to hashtable ---
  // TODO: read from database agent table instead
  $userPinArray = array();
  foreach (file('users-info.txt') as $line) {  // file() return a num array
    list($userId,$password) = explode(",",trim($line));
    $userPinArray += [$userId => $password];  // array is (userId => pin), use to validate login
  }

  if ($_POST) {
    print_r($_POST);
    $_POST['tries']++;
    $_SESSION['try-times'] = $_POST['tries'];  // save try times to a session
    if ($_SESSION['try-times'] >= 5) {
      echo "<h2>You've reached the maximum try times, try 5 hours later.</h2>";
    }

    $userId = $_POST['UserId'];
    if (array_key_exists($userId,$userPinArray)) {  // user-id match, check pin
      if ($_POST['Password'] === $userPinArray[$userId]) {
        // pin match, save user-id into session, head to agent entry page
        $_SESSION['user-id'] = $_POST['UserId'];
        header("Location: http://localhost/CPRG-210-OSD-Assignment/new-agent.php");
      } else { $errorMsg = "<h4 class='alert alert-danger' role='alert'>Password or User ID do NOT match.</h4>"; }
    } else { $errorMsg = "<h4 class='alert alert-danger' role='alert'>User ID or Password do NOT match.</h4>"; }
  }

 ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="generator" content="Jekyll v3.8.5">
  <title>Agent Login</title>

  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Raleway:400,700,700i,900" rel="stylesheet">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/main.css">
  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <?php include_once('php/header.php') ?>

  <form class="form-signin mt-5" method="post" action="#">
    <?php
      if (isset($errorMsg)) {
        echo $errorMsg;
      }
     ?>
    <a href="index.php" target="_blank">
      <img class="mb-2" src="img/balloon.png" alt="logo" width="72" height="72">
    </a>
    <h1 class="h3 mb-3 font-weight-normal">Please Sign In</h1>
    <div class="signin-section mb-3">
      <label for="user-id">User ID</label>
      <input type="text" id="user-id" class="form-control" name="UserId" placeholder="Your user id or email" required autofocus>
    </div>
    <div class="signin-section mb-3">
      <label for="inputPassword">Password</label>
      <input type="password" id="inputPassword" class="form-control" name="Password" placeholder="Password" required>
    </div>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" name="rememberMe" value="rememberMe"> Remember me
      </label>
    </div>
    <input type="hidden" name="tries" value="0">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
  </form>
</body>

<?php include_once('php/footer.php') ?>

</html>
