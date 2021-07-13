<?php 
ob_start();
include ("./header.php");

?>
    <!-- ***************** -->

    <!-- start main -->

    <main class="main-site">

       <?php
    //    Banner
       include ("./Template/banner.php");

    //    Topsale

    include ("./Template/topsale.php");

    // Special-price
    include ("./Template/special.php"); 

    // Banner_adds
    include ("./Template/banner_adds.php"); 

    // Newphone
    include ("./Template/newphone.php"); 

    // Blogs

    include ("./Template/blog.php"); 




       ?>
      

       


   


    
    </main>

    <!-- end main -->
    <!-- ******************* -->
    <?php
    include ("./footer.php");
    ?>
   

  </body>
</html>