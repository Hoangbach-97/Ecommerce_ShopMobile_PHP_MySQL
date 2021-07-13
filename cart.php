<?php 


    ob_start();
    include ("./header.php");


    count($product->getData('cart'))?include ("./Template/cart_temp.php"):include ("./Template/emptyCart.php");

    // Wishlist
     count($product->getData('wishlist'))?  include ("./Template/wishlist_temp.php"):include ("./Template/emptywish.php");

    //    newphone
    include ("./Template/newphone.php");

  
  

    include ("./footer.php");
        
?>