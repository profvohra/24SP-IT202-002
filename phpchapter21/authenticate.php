<?php
  require_once('admin_db.php');
  // initialize accessing $_SESSION
  session_start();

  $email = filter_input(INPUT_POST, 'email');
  $password = filter_input(INPUT_POST, 'password');

  if (is_valid_admin_login($email, $password)) {
    // valid login!
    $_SESSION['is_valid_admin'] = true;
    echo "<p>You have succcessfully logged in</p>";
  } else {
    if($email == NULL & $password == NULL) {
      $login_message = 'You must login to view this page.';
    } else {
      $login_message = 'Invalid credentials.';
    }
    include('login.php');
  }
?>