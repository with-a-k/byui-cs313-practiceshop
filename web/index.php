<html>
  <head>
    <title>Shop</title>
    <link rel=stylesheet href="styles/foundation.css">
  </head>
  <body>
    <h2>Item List</h2>
    <?php include 'items.php'?>

    <ul>
      <?php foreach ($items as $item): ?>
        <li>
          <div class="item">
            <h3><?=$item->get_name()?></h3>
            <p><?=$item->get_desc()?></p>
            <div class="inputs">
              <p><?=$item->get_cost()?></p>
              <?php if($item->get_options()) { ?>
                <select name='<?php echo $item->get_name()?>-color'>
                  <?php foreach(count($item->get_options()) > 0 as color) { ?>
                    <option value='<?php echo color?>'><?=color?></option>
                  <?php } ?>
                </select>
              <?php } ?>
            </div>
          </div>
        </li>
      <?php endforeach; ?>
    </ul>
    <a href="cart.php">View Cart</a>
  </body>
</html>
