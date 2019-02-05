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
  <form class="form-signin" method="post" action="">
    <a href="index.php" target="_blank">
      <img class="mb-2" src="img/balloon.png" alt="logo" width="72" height="72">
    </a>
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="user-id" class="sr-only">User ID</label>
    <input type="text" id="user-id" class="form-control" name="UserId" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" name="Password" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" name="rememberMe" value="rememberMe"> Remember me
        <input type="hidden" name="tries" value="0">
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
  </form>
</body>

<?php include_once('php/footer.php') ?>

</html>

<?php

  // --- Reading users-info.txt and convert to hashtable ---
  $array = array();
  foreach (file('users-info.txt') as $line => $lineValue) {
    list($userId,$password) = explode(",",trim($lineValue));
    $array += [$userId => $password];
  }
  echo "<hr>";
  print_r($array);  // now array is (userId => pin), use it to validate login
  echo "<hr>";

  if ($_POST) {
    $_POST['tries']++;
    print_r($_POST);

    $ID = $_POST['UserId'];
    if (array_key_exists($ID,$array)) {
      echo "<h2>Found user ID.</h2>";
      if ($_POST['Password'] === $array[$ID]) {
        echo "<h2>Password match.</h2>";
      } else {
        echo "<h2>Password does NOT match.</h2>";
      }
    }
  } else {
    echo "No post received.";
  }

 ?>
