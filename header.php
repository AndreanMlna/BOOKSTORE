<?php
if(isset($message)){
   foreach($message as $msg){
      echo '
      <div class="message">
         <span>'.$msg.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">
    <div class="header-1">
        <div class="flex">
            <div class="share">
                <a href="https://www.facebook.com/" class="fab fa-facebook-f"></a>
                <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
                <a href="https://www.linkedin.com/" class="fab fa-linkedin"></a>
            </div>
            <p>new <a href="login.php">login</a> | <a href="register.php">register</a> </p>
        </div>
    </div>

    <div class="header-2">
        <div class="flex">
            <a href="home.php" class="logo">Bookly.</a>
            <nav class="navbar">
                <a href="home.php">home</a>
                <a href="about.php">about</a>
                <a href="shop.php">shop</a>
                <a href="contact.php">contact</a>
                <a href="orders.php">orders</a>
            </nav>

            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                <a href="search_page.php" class="fas fa-search"></a>
                <div id="user-btn" class="fas fa-user"></div>
                <?php 
                    $select_cart_number = mysqli_query($conn, "SELECT * FROM `cart` WHERE user_id = '$user_id'"); 
                    $cart_row_number = mysqli_num_rows($select_cart_number);
                ?>
                <a href="cart.php"><i class="fas fa-shopping-cart"></i><span> ( <?php echo $cart_row_number ?></span> ) </a>
            </div>
            <div class="user-box" id="user-box">
                <p>username : <span><?php echo $_SESSION['user_name']?></span></p>
                <p>email : <span><?php echo $_SESSION['user_email']?></span></p>
                <a href="logout.php" class="delete-btn">logout</a>
            </div>
        </div>
    </div>
        
</header>