<?php
  include 'items.php';
  session_start();
  $address_street = htmlspecialchars($_POST['address-street']);
  $address_city = htmlspecialchars($_POST['address-city']);
  $address_state = htmlspecialchars($_POST['address-state']);
  $address_country = htmlspecialchars($_POST['address-country']);
  $address_postcode = htmlspecialchars($_POST['address-postcode']);
?>
<html>
  <head>
    <title>Shop</title>
    <link rel=stylesheet href="styles/foundation.css">
  </head>
  <body>
    <h2>Purchase Complete</h2>
    <div class="confirm">
      <p>Thank you for your purchase! Your items totaled $<?=$_SESSION['totalCost']?>.</p>
      <p>They will be sent to the address you submitted:</p>
      <p><?php echo $address_street ?></p>
      <p><?php echo $address_city . ", " . $address_state . ", " .
      $address_country . " " . $address_postcode ?></p>
    </div>
  </body>
</html>
