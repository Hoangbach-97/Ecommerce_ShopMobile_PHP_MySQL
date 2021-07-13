     <!-- New phone -->
     <?php 
     // REQUEST METHOD  POST 
  if($_SERVER['REQUEST_METHOD'] =="POST"){
  // Call addToCart method
  if(isset($_POST['nameNewphone'])){
  $Cart->addToCart($_POST['item_id'], $_POST['user_id']);
  }
  }

  $inCart = $Cart->getCartItemId($product->getData('cart'));

     
     ?>
     <section id="new-phone">
          <div class="container">
            <h4 class="font-rale font-size-20">
              Điện thoại mới
            </h4>
            <hr>
            <div class="owl-carousel  owl-theme ">
              <!-- Dùng hàm array_map(callback f, array: array truyền từng giá trị cho mảng của biến trong hàm callback) để in ra từng sản phẩm
                  lấy từ mảng $productShow=> Tất cả được retrieve từ table product  --> 
              <?php array_map(function($item) use($inCart){ ?>
              <div class="item py-2 bg-light">
                <div class="product font-rale">
                <a href="<?php printf('%s?item_id=%s', 'product.php',$item['item_id']); ?>"><img src="<?=$item['item_image'] ?>" alt="smartphone" class="img-fluid"></a>
                  <div class="text-center">
                    <h6 class="font-size-12"><?=$item['item_name'] ?></h6>
                    <div class="rating text-warning font-size-12">
                      <span><i class="fa fa-star"></i></span>
                      <span></span><i class="fa fa-star"></i></span> 
                      <span></span><i class="fa fa-star"></i></span> 
                      <span></span><i class="fa fa-star"></i></span> 
                      <span></span><i class="far fa-star"></i></span> 
                    </div>
                    <div class="price py-2">
                      <span><?=number_format($item['item_price']).'đ' ?> </span>
                    </div>
                    <form action="" method="POST">
                      <input type="hidden" name="item_id" value="<?=$item['item_id']?>"/>
                      <input type="hidden" name="user_id" value="<?=1?>"/>
                      <!-- <button type="submit" name="nameNewphone" class="btn btn-primary font-size-12">Thêm vào giỏ hàng</button>

                    </form> -->


                    <?php 
                      // <!-- Display sản phẩm đã tồn tại trong giỏ hàng -->

                      if(in_array($item['item_id'], $inCart??[])) //Vì khi delete thì table cart trống nên cần gán giá trị default chuỗi rỗng []
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
  
              <?php },$productShow);?>
  
            
              </div>
          </div>
          
        </section>
        <!-- New phone -->