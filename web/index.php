<html>
  <head>
    <title>Shop</title>
    <link rel=stylesheet href="styles/foundation.css">
  </head>
  <body>
    <h2>Item List</h2>
    <?php include 'items.php'?>

    <ul>
      <?php foreach ($items as $item) { ?>
        <li>
          <div class="item">
            <p><?=$item?></p>
            <h3><?=$item['itemName']?></h3>
            <button>Add to Cart</button>
          </div>
        </li>
      <?php } ?>
    </ul>
    <a href="cart.php">View Cart</a>
  </body>
</html>
