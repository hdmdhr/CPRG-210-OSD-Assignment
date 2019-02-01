<header>

  <div class="logo-line">
    <a href="index.php" target="_blank">
      <img src="img/balloon.png" alt="Logo" class="logo">
    </a>
    <h1 class="big-title">WELCOME TO TRAVEL EXPERTS</h1>
  </div>

  <div class="welcome-banner">
    <?php
        date_default_timezone_set("Canada/Mountain");
        $hour = localtime()[2];  // 24 hour unit
        $time = substr(date('h'), 1, 2);  // 12 hour unit
        echo "<h3>It's $time ".date('A').", ";
        if ($hour < 12){
          echo "<img src='img/avatar.gif'>Good Morning";
        } elseif ($hour >= 12 && $hour < 17) {
          echo "<img src='img/chillies.png'>Good Afternoon";
        } elseif ($hour >= 17) {
          echo "<img src='img/home.png'>Good Evening";
        }
        echo " Dude.</h3>";

       ?>
  </div>

  <nav class="nav-bar">
        <div class="nav-tab home">
          <a href="index.php" target="_blank"><img src="img/home.png" alt="Home">Home</a>
        </div>
        <div class="nav-tab contact">
          <a href="contact.php" target="_blank"><img src="img/contacts.png" alt="Contact Us">Contact Us</a>
        </div>
        <div class="nav-tab register">
          <a href="register.php" target="_blank"><img src="img/register.png" alt="Register Now">Register</a>
        </div>
        <div class="nav-tab spots">
          <a href="spots.php" target="_blank"><img src="img/chillies.png" alt="hot spots">Famous Spots</a>
        </div>
        <div class="nav-tab add-agent">
          <a href="new-agent.php" target="_blank"><img src="img/add.png" alt="fun">Add Agent</a>
        </div>
        <div class="nav-tab links">
          <a href="links.php" target="_blank"><img src="img/computer.png" alt="tech">Links</a>
        </div>
  </nav>

</header>
