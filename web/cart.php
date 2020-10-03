<?php
  session_start();
  include 'items.php';
  foreach ($_SESSION['cart'] as $index => $item) {
    if (isset($_POST["item-".$index])) {
      array_splice($_SESSION['cart'], $index, 1);
    }
  }
  var_dump($_SESSION);
?>
<html>
  <head>
    <title>Shop</title>
    <link rel=stylesheet href="styles/foundation.css">
  </head>
  <body>
    <h2>Your Cart</h2>
    <ul>
      <?php foreach ($_SESSION['cart'] as $index => $item): ?>
        <?php $form_name = "item-".$index ?>
        <?php echo $form_name?>
        <li>
          <div class="item">
            <h3><?php echo $item->get_name() ?></h3>
            <p><?php echo $item->get_desc() ?></p>
            <div class="inputs">
              <p><?php echo $item->get_cost() ?></p>
              <?php if(strlen($item->get_color()) > 0): ?>
                <p><?php echo $item->get_color() ?></p>
              <?php endif; ?>
              <form name='<?php echo $form_name ?>' method="POST" action="index.php">
                <input type="submit" value="Remove from cart">
              </form>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
    <a href="index.php">View Items</a>
  </body>
</html>
