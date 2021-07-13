   <!-- Product -->

<?php 
// Lấy item_id từ URL gán cho biến $items_id_url: Nếu không tồn tại thì mặc định là $items_id_url =1
$items_id_url = $_GET['item_id'];
if(!$items_id_url) $items_id_url = 1;
// Lấy toàn bộ info từ table product(mặc định là table product: vào class Product=>function getData())
$items =$product->getData();
foreach($items as $item):
    // Nếu mà id  trên URL trung với id trong DB:
    if($item['item_id'] == $items_id_url):

?>



   <section id="product" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- class in Bootstrap: width:100, heigth:auto =>img-fluid -->
                        <img src="<?=$item['item_image'] ?>" alt="iphone1" class="img-fluid">
                        <div class="form-row pt-5 font-weight-bold font-size-16">
                            <div class="col">
                                <button class="btn btn-warning form-control">Mua ngay</button>

                            </div>
                            <div class="col">
                            <!-- // Nếu mà item_id tồn tại trong mảng $Cart->getCartItemId($product->getData('cart')) thì thực thi trong if -->
                     <?php  
                        if(in_array($item['item_id'], $Cart->getCartItemId($product->getData('cart'))??[])) ////Vì khi delete thì table cart trống nên cần gán giá trị default chuỗi rỗng []
                      {
                        echo ' <button type="submit"class="btn btn-danger font-size-16 w-100" disabled>Đang trong giỏ hàng</button>'; 

                      }
                      else{
                        echo ' <button type="submit" name="nameTopSale" class="btn btn-danger form-control">Thêm vào giỏ hàng</button>'; 
                     
                      }
                      ?>

                    </form>

                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 py-5">
                        <h5 class="font-rale font-size-20"><?=$item['item_name']?></h5>
                        <!-- <small>by Apple</small> -->
                        <div class="d-flex">
                        <div class="rating font-size-14 text-warning">
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span> 
                            <span><i class="fa fa-star"></i></span> 
                            <span><i class="fa fa-star"></i></span> 
                            <span><i class="far fa-star"></i></span> 
                        </div>
                        <a href="#" class="px-2 font-rale font-size-14">1000 ratings</a>
                        </div>
                          <hr class="m-0">
                          <!-- product price -->
                          <table class="my-3">
                            <tr class="font-rale font-size-14">
                                <td>Giá gốc:</td>
                                <td><strike><?=number_format($item['item_price']).'đ'  ?></strike></td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Hiện còn:</td>
                                <td><span class="text-danger font-size-20"><?=number_format($item['item_price']-500000).'đ'  ?></span> </td>
                            </tr>
                            <tr class="font-rale font-size-14">
                                <td>Tiết kiệm:</td>
                                <td><span class="text-warning font-size-20">500.000đ</span> </td>
                            </tr>
                          </table>
                          <!-- product price -->

                          <!-- Policy -->
                          <div id="policy">
                              <div class="d-flex">
                                  <div class="return text-center mr-5">
                                      <div class="color-second font-size-20 my-2">
                                          <span class="fas fa-retweet p-3 border border-primary rounded-pill"></span>
                                      </div>
                                      <a href="" class="font-rale font-size-12">Đổi trả <br> trong 10 ngày</a>
                                  </div>
                                  <div class="return text-center mr-5">
                                    <div class="color-second font-size-20 my-2">
                                        <span class="fas fa-truck p-3 border border-primary rounded-pill"></span>
                                    </div>
                                    <a href="" class="font-rale font-size-12">Vận chuyển<br>nhanh chóng</a>
                                </div>
                                <div class="return text-center mr-5">
                                    <div class="color-second font-size-20 my-2">
                                        <span class="fas fa-check-double p-3 border border-primary rounded-pill"></span>
                                    </div>
                                    <a href="" class="font-rale font-size-12">Bảo hành <br> 1 năm</a>
                                </div>
                              </div>
                          </div>
                          <hr>
                          <!-- Policy -->


                          <!-- Order details -->
                          <!-- <div id="order-detail" class="d-flex flex-column font-rale text-dark">
                            <small>Vận chuyển ngày 11-7</small>
                            <small>Mặt hàng <a href="#">Shop Detail Amazone</a></small>
                            <small><i class="fa fa-map-marker-alt color-primary">&nbsp;&nbsp;Vận chuyển tới khách hàng</i></small>
                          </div> -->

                          <!-- Order details -->

                            
                            <div class="row">
                                <div class="col-6">
                            <!-- Color -->
                            <div class="color py-3 d-flex justify-content-between">
                                <h6 class="font-rale font-size-16">
                                    Color:
                                </h6>
                                <div class="p-2 color-yellow-bg rounded-circle">
                                    <button class="btn font-size-12"></button>
                                </div>
                                <div class="p-2 color-primary-bg rounded-circle">
                                    <button class="btn font-size-12"></button>
                                </div>
                                <div class="p-2 color-second-bg rounded-circle">
                                    <button class="btn font-size-12"></button>
                                </div>
                            </div>
                            <!-- Color -->

                        </div>
                        <!-- Quantity here -->
                                <div class="col-6">
                                    <div class="quantity d-flex">
                                        <h6 class="font-rale">Số lượng:</h6>
                                        <div class="font-rale px-4 d-flex">
                                            <!-- class: quantity-up/down -->
                                            <button class="quantity-down border " data-id="product-id"><i class="fa fa-minus"></i></button>
                                            <input type="text" data-id="product-id" class="quantity-input border  bg-light px-2 w-50" disabled value="1" placeholder="1">
                                            <button class="quantity-up border " data-id="product-id"><i class="fa fa-plus"></i></button>
                                        </div>
                                    </div>
                                </div>

                        <!-- Quantity here -->

                            </div>

                            <!-- size -->
                
                            <div class="size py-3">
                                <h6 class="font-rale">
                                    RAM:
                                </h6>
                                <div class="d-flex justify-content-between w-75 ">
                                    <div class="border font-rubik p-2">
                                        <button class="p-0 font-size-14 btn">4G</button>
                                    </div>
                                    <div class="border font-rubik p-2">
                                        <button class="p-0 font-size-14 btn">8G</button>
                                    </div>
                                    <div class="border font-rubik p-2">
                                        <button class="p-0 font-size-14 btn">16G</button>
                                    </div>
                                </div>
                            </div>

                            <!-- size -->
                    </div>
                    <div class="col-12">
                        <h6 class="font-rale">
                            Chi tiết sản phẩm
                        </h6>
                        <hr>
                        <p class="font-rale font-size-14">Samsung cho ra mắt sản phẩm thuộc dòng Galaxy A mang tên Galaxy A52 (8GB/256GB). Sở hữu vi xử lý Snapdragon 720G mạnh mẽ bậc nhất, cụm 4 camera có độ phân giải lên đến 64 MP và một vẻ ngoài hiện đại, trẻ trung tràn đầy sức sống.</p>
                        <p class="font-rale font-size-14">Samsung cho ra mắt sản phẩm thuộc dòng Galaxy A mang tên Galaxy A52 (8GB/256GB). Sở hữu vi xử lý Snapdragon 720G mạnh mẽ bậc nhất, cụm 4 camera có độ phân giải lên đến 64 MP và một vẻ ngoài hiện đại, trẻ trung tràn đầy sức sống.</p>
                    </div>
                </div>
            </div>
        </section>

<?php

endif;
endforeach;
 ?>
       <!-- Product -->