<?php
  // Slide 62
  if (!isset($investment)) { $investment = ''; }
  if (!isset($interest_rate)) { $interest_rate = ''; }
  if (!isset($years)) { $years = ''; }  
?>
<html>
  <head>
    <title>Future Value Calculator</title>
  </head>
  <body>
    <h1>Future Value Calculator</h1>

  <?php if (!empty($error_message)) {  ?>
    <p style="color: red;"><?php echo htmlspecialchars($error_message); ?></p>
  <?php } ?>

    <!-- Slide 63 -->
    <form action="future_value_results.php" method="post">
      <label>Investment Amount: </label>
      <input type="text" name="investment" value="<?php echo htmlspecialchars($investment); ?>" />
      <br>
      <label>Yearly Interest Rate:</label>
      <input type="text" name="interest_rate" value="<?php echo htmlspecialchars($interest_rate); ?>" />
      <br>
      <label>Number of Years: </label>
      <input type="text" name="years" value="<?php echo htmlspecialchars($years); ?>" />
      <br>
      <!-- Slide 64 -->
      <input type="submit" value="Calculate" />
    </form>
  </body>
</html>
