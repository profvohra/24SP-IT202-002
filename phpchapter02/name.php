<?php
  // Slide 6
  // get the data from the request
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
?>
<html>
  <head>
    <title>Name Test</title>
  </head>
  <body>
    <p>First Name:<?php echo $first_name; ?></p>
    <p>Last Name:<?php echo $last_name; ?></p>
</html>