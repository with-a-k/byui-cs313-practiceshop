<?php
  session_start();
  include 'items.php';
  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
    $_SESSION['totalCost'] = 0.0;
  }
  foreach ($items as $index => $item) {
    if (isset($_POST[$item])) {
      $addName = $item->get_name();
      $addDesc = $item->get_desc();
      $addColor = $item->get_color();
      $addCost = $item->get_cost();
      array_push($_SESSION['cart'], new Item($addName, $addCost, $addDesc, [], $addColor));
    }
  }
?>
<html>
  <head>
    <title>Shop</title>
    <link rel=stylesheet href="styles/foundation.css">
  </head>
  <body>
    <h2>Item List</h2>
    <ul>
      <?php foreach ($items as $index => $item): ?>
        <?php $form_name = $item->get_name() ?>
        <li>
          <div class="item">
            <h3><?=$item->get_name()?></h3>
            <p><?=$item->get_desc()?></p>
            <div class="inputs">
              <p><?=$item->get_cost()?></p>
              <?php if(count($item->get_options()) > 1): ?>
                <select name="<?php echo $item->get_name()?>-color">
                  <?php foreach($item->get_options() as $color): ?>
                    <option value="<?php echo $color?>"><?php echo $color?></option>
                  <?php endforeach; ?>
                </select>
              <?php endif; ?>
              <form id='<?php echo $form_name ?>' method="POST" action="index.php">
                <input type="submit" value="Add to cart">
              </form>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
    <a href="cart.php">View Cart</a>
  </body>
</html>
