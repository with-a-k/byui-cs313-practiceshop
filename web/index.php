<?php
  session_start();
  include 'items.php';
  if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
    $_SESSION['totalCost'] = 0.0;
  }
  error_log("Initialized session variables.");
  if(isset($_POST)) {
    var_dump($_POST);
    echo "\n";
  }
  var_dump($_SESSION);
  echo "\n";
  error_log("Checked for POST.");
  foreach ($items as $index => $item) {
    $searchName = str_replace(" ", "_", $item->get_name());
    echo "Searching for ".$searchName."-submit";
    if (!empty($postArgs[$searchName.'-submit'])) {
      $addName = $item->get_name();
      $addDesc = $item->get_desc();
      $addColor = $postArgs[$addName . '-color'];
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
              <form name='<?php echo $form_name ?>' method="POST" action="index.php">
                <?php if(count($item->get_options()) > 1): ?>
                  <select name="<?php echo $form_name?>-color">
                    <?php foreach($item->get_options() as $color): ?>
                      <option value="<?php echo $color?>"><?php echo $color?></option>
                    <?php endforeach; ?>
                  </select>
                <?php endif; ?>
                <input type="submit" name='<?php echo $form_name?>-submit' value="Add to cart">
              </form>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
    <a href="cart.php">View Cart</a>
  </body>
</html>
