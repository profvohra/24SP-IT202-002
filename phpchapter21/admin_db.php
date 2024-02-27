<?php
  require_once('database_local.php');

  // Slide 17
  function is_valid_admin_login($email, $password) {
    $db = getDatabase();
    $query = 'SELECT password FROM administrators WHERE emailAddress = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $row = $statement->fetch();
    $statement->closeCursor();  
    if ($row === false) {
      return false;
    } else {
      $hash = $row['password'];
      return password_verify($password, $hash);
    }
  }
  
?>