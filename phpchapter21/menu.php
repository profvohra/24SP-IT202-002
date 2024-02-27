<html>
  <head>
    <title>Login/Logout Menu</title>
  </head>
  <body>
    <?php 
    session_start();
    if (isset($_SESSION['is_valid_admin'])) { 
    ?>
      <p>
        <a href="logout.php">Logout</a>
      </p>
    <?php } else { ?>
      <p>
        <a href="login.php">Login</a>
      </p>
    <?php } ?>
  </body>
</html>