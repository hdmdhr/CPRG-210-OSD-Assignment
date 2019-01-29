<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Links</title>
  </head>
  <body>
    <h1>Links Page</h1>

    <?php
      echo "<table>";

      for ($i=1; $i<7; $i++) {
        $href = "dummy/page$i.php";
        echo "<tr><td>cell no$i</td><td><a href=\"$href\">to page$i</a></td></tr>";
      }

      echo "</table>";

     ?>

  </body>
</html>
