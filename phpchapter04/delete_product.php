<?php
  // Slide 37
  // Use database_local.php or database_njit.php
  require_once('database_local.php');

  // get IDs
  $product_id = filter_input(INPUT_POST, 'product_id', FILTER_VALIDATE_INT);
  $category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);

  if ($product_id != FALSE && $category_id != FALSE) {
    $query = 'DELETE FROM products WHERE productID = :product_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':product_id', $product_id);
    $success = $statement->execute();
    $statement->closeCursor();
    echo "<p>You're delete statement status is $success</p>";
  }
?>