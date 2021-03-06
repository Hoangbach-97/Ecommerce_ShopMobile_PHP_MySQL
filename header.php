<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Bootstrap CND -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- Owl Carousel CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Fonts awesome CDN  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- Custom CSS link -->
<link rel="stylesheet" href="style.css">

<title>Cửa Hàng Amazon</title>

<?php
require_once("./function.php");
?>
</head>
<body>
    <!-- start header -->
    <header id="header" class="">
      <!-- Display: flex -->
        <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
            <p class="font-rale font-size-12 text-black-50 m-0">Peter Xuan Bach Software Engineer at HUECIT- Amator University</p>
            <div class="font-rale font-size-14">
                <a href="#" class="px-3 border-right border-left text-dark">Đăng nhập</a>
                <a href="#" class="px-3 border-right  text-dark">Yêu thích(0)</a>
            </div>
        </div>

        <!-- Primary Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg ">
            <a class="navbar-brand" href="index.php">Amazon Mobile</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <!-- m-auto: Đưa menu ra center windown -->
              <ul class="navbar-nav m-auto font-rale">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Bán chạy</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Hạng mục</a>
                </li>
                <li class="nav-item">
                  <!-- Thêm arrow cho drop-menu: class fas fa chevron-down -->
                  <a class="nav-link" href="#">Sản phẩm <i class="fa fa-chevron-down font-size-12"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hạng mục khác <i class="fa fa-chevron-down font-size-12"></i></a>
                  </li>
            
                  <li class="nav-item">
                    <a class="nav-link" href="#">Sắp diễn ra</a>
                  </li>
              </ul>

              <form action="#" class="font-rale font-size-14">
                <!-- Lưu ý: chung một thẻ anchor -->
                  <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                      <span class="text-white px-2 font-size-16 "><i class="fas fa-shopping-cart" ></i></span>
                      <span class="text-dark bg-light px-3 py-2 rounded-pill"><?=count($product->getData('cart')); ?></span>
                  </a>
              </form>
            </div>
          </nav>

    </header>
    <!-- end header -->