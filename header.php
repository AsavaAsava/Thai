<header class="header">

   <div class="flex">

      <a href="#" class="logo">Thai-Tanic</a>
      <img src="pic.jpg">

      <nav class="navbar">
         <a href="bill_orders.php">Bill Orders</a>
         <a href="products.php">Menu</a>
         <a href="pending_orders.php">Kitchen</a>
         <a href="./processing/logout.php">Log Out</a>
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart">Current Order <span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>