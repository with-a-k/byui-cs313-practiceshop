<?php
  include 'items.php';
  session_start();
?>
<html>
  <head>
    <title>Shop</title>
    <link rel=stylesheet href="styles/foundation.css">
  </head>
  <body>
    <h2>Check Out</h2>
    <form name="address" action="confirm.php" method="POST">
      Street Address: <input type="text" name="address-street">
      City: <input type="text" name="address-city">
      State/Province: <input type="text" name="address-state">
      Country: <input type="text" name="address-country">
      Postal Code: <input type="text" name="address-postcode">
      <input type="submit" value="Confirm Purchase">
    </form>

    <a href="cart.php">Back to Cart</a>
  </body>
</html>
