<html>
  <head>
    <title>Delete Cookie Example</title>
  </head>
  <body>
    <?php
      $cookie_name = "userid";
      $one_hour_in_seconds = 60 * 60;

      setcookie($cookie_name, "",
        time() - $one_hour_in_seconds, "/");

      echo "Cookie named $cookie_name is deleted.";

    ?>
  </body>
</html>