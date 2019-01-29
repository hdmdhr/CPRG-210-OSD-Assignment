<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Links</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Raleway:400,700,700i,900" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">

  </head>
  <body>
    <header>

      <div class="logo-line">
        <a href="index.php">
          <img src="img/balloon.png" alt="Logo" class="logo">
        </a>
        <h1 class="big-title">Links Page</h1>
      </div>

      <nav class="nav-bar">
        <div class="nav-tab">
          <a href="index.php" target="_blank"><img src="img/home.png" alt="Contact Us">Home</a>
        </div>
        <div class="nav-tab">
          <a href="register.php" target="_blank"><img src="img/register.png" alt="Register Now">Register</a>
        </div>
        <div class="nav-tab">
          <a href="spots.php" target="_blank"><img src="img/chillies.png" alt="hot spots">Famous Spots</a>
        </div>
        <div class="nav-tab">
          <a href="https://tenor.com/search/cute-kitten-gifs" target="_blank"><img src="img/avatar.gif" alt="fun">Fun</a>
        </div>
        <div class="nav-tab">
          <a href="https://stackoverflow.com" target="_blank"><img src="img/computer.png" alt="tech">Tech Support</a>
        </div>
      </nav>

    </header>

    <?php
      require_once('php/var.php');

      echo "<table class='table'>";


      foreach ($var as $k => $v) {
        static $i = 1;
        echo "<tr><td>no.$i</td><td>$v</td><td><a href='$k' target='_blank'>Link</a></td></tr>";
        $i++;
      }

      // for ($i=1; $i<7; $i++) {
      //   $href = "dummy/page$i.php";
      //   echo "<tr><td>cell no$i</td><td><a href=\"$href\" target=\"_blank\">to page$i</a></td></tr>";
      // }

      echo "</table>";


     ?>
   </body>



   </html>
