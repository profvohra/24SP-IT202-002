<?php
  // print_r($_POST);
  // Slide 44
  // get the data from the form
  $product_description = filter_input(INPUT_POST, 'product_description');
  $list_price = filter_input(INPUT_POST, 'list_price');
  $discount_percent = filter_input(INPUT_POST, 'discount_percent');

  // calculate the discount and discounted price
  $discount = $list_price * $discount_percent * 0.01;
  $discount_price = $list_price - $discount;

  // apply currency formatting to the dollar and percent amounts
  $list_price_f = "$" . number_format($list_price, 2);
  $discount_percent_f = $discount_percent . "%";
  $discount_f = "$" . number_format($discount, 2);
  $discount_price_f = "$" .number_format($discount_price, 2);
?>
<!-- Slide 45 -->
<!DOCTYPE html>
<html>
  <head>
    <title>Product Discount Calculator</title>
  </head>
  <body>
    <h1>Product Discount Calculator</h1>
    <label>Product Description:</label>
    <span><?php echo htmlspecialchars($product_description); ?></span>
    <br>
    <!-- Slide 46 -->
    <label>List Price:</label>
    <span><?php echo $list_price_f; ?></span>
    <br>
    <label>Discount Percent:</label>
    <span><?php echo htmlspecialchars($discount_percent_f); ?></span>
    <br>
    <label>Discount Amount:</label>
    <span><?php echo $discount_f; ?></span>
    <br>
    <label>Discount Price:</label>
    <span><?php echo $discount_price_f; ?></span>
  </body>
</html>