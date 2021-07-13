<?php 
// $product variable get from function
// $productShow = $product->getData();

// REQUEST METHOD  POST 
if($_SERVER['REQUEST_METHOD'] =="POST"){
// Call addToCart method
if(isset( $_POST['nameTopSale'])){
$Cart->addToCart($_POST['item_id'], $_POST['user_id']);
}
}

?>

<section id="top-sale">
          <div class="container py-5">
            <h4 class="font-rale font-size-20">
              Top bán chạy
            </h4>
            <hr>
            <!-- owl-carousel -->
            <div class="owl-carousel  owl-theme ">
              <?php foreach ($productShow as $item){ ?>
              <div class="item py-2 bg-light">

                <div class="product font-rale">
                  <!-- symbol ??: 	Null coalescing => Không tồn tại value trước or NULL thì thay thế bằng giá trị phía sau  -->
                  <!-- Transfer id sang cho products.php theo URL =>Sau đó Dùng Global $_GET lấy item_id -->
                  <a href="<?php printf('%s?item_id=%s', 'product.php',$item['item_id']); ?>"><img src="<?= $item['item_image'] ?>" alt="smartphone1" class="img-fluid"></a>
                  <div class="text-center">
                    <h6 class="font-size-12"><?= strtoupper($item['item_name']) ?> </h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fa fa-star"></i></span>
                      <span></span><i class="fa fa-star"></i></span> 
                      <span></span><i class="fa fa-star"></i></span> 
                      <span></span><i class="fa fa-star"></i></span> 
                      <span></span><i class="far fa-star"></i></span> 
                    </div>
                    <div class="price py-2">
                      <span><?=number_format($item['item_price']).'đ'?> </span>
                    </div>
                    
                    <form action="" method="POST">
                      <input type="hidden" name="item_id" value="<?=$item['item_id']?>"/>
                      <input type="hidden" name="user_id" value="<?=1?>"/>


                      <!-- Display sản phẩm đã tồn tại trong giỏ hàng -->
                        <?php 
                        // Nếu mà item_id tồn tại trong mảng $Cart->getCartItemId($product->getData('cart')) thì thực thi trong if
                      if(in_array($item['item_id'], $Cart->getCartItemId($product->getData('cart'))??[])) ////Vì khi delete thì table cart trống nên cần gán giá trị default chuỗi rỗng []
                      {
                        echo ' <button type="submit"class="btn btn-danger font-size-12" disabled>Đang trong giỏ hàng</button>'; 

                      }
                      else{
                        echo ' <button type="submit" name="nameTopSale" class="btn btn-primary font-size-12">Thêm vào giỏ hàng</button>'; 
                     
                      }
                      ?>

                    </form>
                  </div>
                </div>

              </div>
                <?php }?>
           
              </div>
            </div>
            <!-- owl-carousel -->

          </div>
        </section>