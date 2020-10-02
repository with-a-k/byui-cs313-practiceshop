<html>
  <head>
    <title>Shop</title>
    <link rel=stylesheet href="styles/foundation.css">
  </head>
  <body>
    <?php include 'items.php'?>
    <h2>Item List</h2>
    <ul>
      <?php foreach ($items as $item) ?>
        <li>
          <div class="item">
            <h3><?=$item['name']?></h3>
          </div>
        </li>
      <?php endforeach;?>
    </ul>
    <a href="cart.php">View Cart</a>
  </body>
</html>
