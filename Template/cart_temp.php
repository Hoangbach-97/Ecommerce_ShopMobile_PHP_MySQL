<?php 
  
  if($_SERVER['REQUEST_METHOD'])
  {
      if(isset($_POST['deleteCart'])){
          $deleteCart = $Cart->delete($_POST['item_id']);
      }
      if(isset($_POST['wishlist']))
      {
          $addWishlist = $Cart->saveWishlist($_POST['item_id']);
      }
  }
  
  
  ?>
  
  <!-- Shopping cart -->
  <section id="cart" class="py-3">
    <!-- class: w-75: width=75% -->
    <div class="container-fluid w-75">
        <h5 class="font-size-20 font-rale">Giỏ hàng</h5>
        <div class="row">
        <!-- shopping detail -->
        <div class="col-sm-9 mb-5">
            <!-- cart item -->
        <?php 

        $items =$product->getData('cart');
        foreach ($items as $item):
            // print_r($item);Check info
          $cart= $product->getProduct($item['item_id']);
        //   print_r($cart);
        $subTotal[] = array_map(function ($item){

        ?>

        <div class="row border-top py-3 mt-3">
            <div class="col-sm-2">
                <img src="<?=$item['item_image'] ?>" alt="Something" style="height: 100px;">
            </div>
            <div class="col-sm-8">
                <h5 class="font-rale font-size-20"><?=$item['item_name'] ?>s</h5>
                <!-- Rating -->
                <div class="d-flex">
                    <div class="rating font-size-14 text-warning">
                        <span><i class="fa fa-star"></i></span>
                        <span><i class="fa fa-star"></i></span> 
                        <span><i class="fa fa-star"></i></span> 
                        <span><i class="fa fa-star"></i></span> 
                        <span><i class="far fa-star"></i></span> 
                        <a href="#" class="px-2 font-rale font-size-14">20,000 ratings</a>
                    </div>
                    
                </div>
                <!-- Rating -->


                <!-- Product quantity -->
                <div class="quantity d-flex pt-2">
                    <div class="d-flex font-rale w-25">
                        <button class="quantity-down border " data-id="<?=$item['item_id'] ?? '0'?>"><i class="fa fa-minus"></i></button>
                        <input type="text" class="quantity-input border  bg-light px-2 w-50 "data-id="<?=$item['item_id'] ?? '0'?>" disabled value="1" placeholder="1">
                        <button class="quantity-up border " data-id="<?=$item['item_id'] ?? '0'?>"><i class="fa fa-plus"></i></button>
                    </div>

                <form method="post" >
                    <input type="hidden" name="item_id" value="<?=$item['item_id']?>">
                    <button type="submit" class="btn btn-danger font-rale text-white px-3 border-right " name="deleteCart" >Xóa</button>
                </form>

                <form method="post" >
                    <input type="hidden" name="item_id" value="<?=$item['item_id']?>">
                <button type="submit" name="wishlist" class="btn btn-success font-rale text-white px-3 ">Lưu lại</button>
                    
                    <!-- <button type="submit" class="btn btn-danger font-rale text-white px-3 border-right " name="deleteCart" >Xóa</button> -->
                </form>
                </div>
                <!-- Product quantity -->

            </div>
            
            <div class="col-sm-2 text-right">
                <div class="font-size-20 text-danger font-rale">
                    <span class="product_price"><?= number_format($item['item_price']).'đ' ?></span>
                </div>
            </div>
        </div>

        <?php 
        return $item['item_price'];
        }, $cart); //close array_map function
        // print_r($subTotal);
     endforeach;
      ?>
      
        </div>

        <div class="col-sm-3">
            <div class="sub-total text-center mt-2 border">
                <h6 class="font-rale font-size-12 text-success py-3 "><i class="fas fa-check"></i> Check thông tin đơn hàng!</h6>
                <div class="border-top py-4">
                    <h5 class="font-rale font-size-20">Tổng: &nbsp; <span id="deal-price"  class="text-danger"><?= number_format((isset($subTotal))? $Cart->calPrice($subTotal):0); ?> <span>đ</span></span> </h5>
                </div>
                <button class="btn btn-warning font-size-14 mb-3 w-75">Tiến hành thanh toán</button>
            </div>
        </div>
        <!-- shopping detail -->
    </div>
    </div>
</section>

  <!-- Shopping cart -->