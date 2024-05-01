<header class="header" style="background: lightcoral;">

   <section class="flex">
      <a href="index.php" class="logo">SugarSparkles</a>

      <nav class="navbar">
         <a href="add_product.php">add product</a>
         <a href="view_products.php">all products</a>
         <a href="add_cust_product.php">add cust product</a>
         <a href="view_cust_products.php">All cust products</a>
         <a href="orders.php">my orders</a>
         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_items = $count_cart_items->rowCount();
         ?>
         <a href="shopping_cart.php" class="cart-btn">cart<span><?= $total_cart_items; ?></span></a>
         <a href="index.php">Logout</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>
   </section>

</header>
<!-- style="height: 460px;" -->