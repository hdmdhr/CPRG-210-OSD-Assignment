<?php
/**************************
*
* Author: DongMing Hu
* Date: Feb. 11, 2019
* Description: a page only for logout
*
**************************/
  session_start();

  unset($_SESSION['user-id']);

  header("Location: http://localhost/CPRG-210-OSD-Assignment/login.php");
 ?>
