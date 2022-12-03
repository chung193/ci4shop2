<?php 
    echo view('frontend/component/breadcrum', $test);
?>
<main>
<div id="shopify-section-template--14537261219899__main" class="shopify-section">
   <div class="shopping-cart-area mt-100 mb-100" id="section-template--14537261219899__main">
      <div class="container">
         <form action="<?= base_url()?>/gio-hang/cap-nhat-gio" method="post" novalidate="" class="cart">
            <div class="row">
               <div class="col-lg-12 mb-30">
                  <div class="cart-table-container">
                     <table class="cart-table">
                        <thead>
                           <tr>
                              <th class="pro-title product-name" colspan="2">Sản phẩm</th>
                              <th class="pro-price product-price">Giá</th>
                              <th class="pro-quantity product-quantity">Số lượng</th>
                              <th class="pro-subtotal product-subtotal">Tổng tiền</th>
                              <th class="pro-remove product-remov">&nbsp;</th>
                           </tr>
                        </thead>
                        <tbody>

                        <?php 
                        $total = 0;
                        foreach($product as $val){
                          $total += ($val['price'] * $val['qty']);
                        ?>
                        <input type="hidden" name="cart['<?= $val['product_id']?>'][id]" value="<?= $val['product_id']?>">
                        
                           <tr>
                              <td class="product-thumbnail pro-thumbnail">

                                <a href="<?= base_url().'/san-pham/'.$val['slug']?>">
                                  <img id="bannerImage-39989196226619" class="lazyautosizes lazyloaded" 
                                  data-src="<?= base_url().'/public/uploads/product/'.$val['img']?>" 
                                  data-sizes="auto" alt="" sizes="74px" 
                                  src="<?= base_url().'/public/uploads/product/'.$val['img']?>">
                                 </a> 

                              </td>
                              <td class="product-name pro-name"> 
                                <a href="<?= base_url().'/san-pham/'.$val['slug']?>">
                                  <?= $val['name']?>
                                </a>
                                <!-- <span class="product-variation">128GB / magenta</span>  -->
                              </td>
                              <td class="product-price pro-price"> 
                                <span class="price amount">
                                  <span class="money" data-currency-usd="<?= price_format($val['price']).' đ' ?>"><?= price_format($val['price']).' đ' ?></span>
                                </span>
                              </td>
                              <td class="product-quantity pro-quantity">
                                 <div class="pro-qty d-inline-block mx-0 pt-0"> 
                                  <span class="sp-minus-cart">-</span> 
                                  <input type="text" name="cart['<?= $val['product_id']?>'][qty]" value="<?= $val['qty'] ?>" id="qty"> 
                                  <span class="sp-plus-cart" title="In Stock">+</span>
                                </div>
                              </td>
                              <td class="total-price pro-subtotal">
                                 <span class="price">
                                    <span class="money" data-currency-usd="<?= price_format($val['price']*$val['qty']).' đ' ?>"><?= price_format($val['price']*$val['qty']).' đ' ?></span>
                                 </span>
                              </td>
                              <td class="product-remove pro-remove">
                                 <a href="javascript:void(0)" onclick="removeItemCart(<?= $val['product_id']?>);"><i class="ion-android-close"></i></a> 
                              </td>
                           </tr>
                        <?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="col-lg-12 mb-80">
                  <div class="cart-coupon-area pb-30">
                     <div class="row align-items-center">
                        <div class="col-lg-12 text-left text-lg-right">
                          <button class="astor-button astor-button--medium ml-0" type="submit">Cập nhật giỏ hàng</button>
                          <a class="astor-button astor-button--medium" href="<?= base_url()?>">Tiếp tục mua sắm</a>
                          <a class="astor-button astor-button--medium" href="<?= base_url().'/gio-hang/xoa-gio-hang'?>">Xóa hết giỏ hàng</a> 
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12 col-12">
                  <div class="cart-payment">
                     <div class="row">
                        
                        <div class="col-lg-12">
                           <div class="cart-calculation-area">
                              <h2 class="mb-40">Chi tiết thanh toán</h2>
                              <table class="cart-calculation-table mb-30">
                                 <tbody>
                                    <!-- <tr class="cart-subtotal">
                                       <th>Subtotal</th>
                                       <td><span class="amount"><span id="bk-cart-subtotal-price"><span class="money" data-currency-usd="$999.00">$999.00</span></span></span></td>
                                    </tr> -->
                                    <tr class="order-total">
                                       <th>Tổng tiền hàng</th>
                                        <td> 
                                          <strong>
                                              <span class="amount">
                                                <span id="bk-cart-subtotal-price">
                                                  <span class="money" data-currency-usd="<?= price_format($total)?> đ">
                                                    <?= price_format($total)?> đ
                                                  </span>
                                                </span>
                                              </span>
                                          </strong>
                                        </td>
                                    </tr>
                                 </tbody>
                              </table>
                              <div class="cart-calculation-button text-center">
                                <!-- <input type="checkbox" id="cart_agree_to_check" value="1"> -->
                                <!-- <label for="cart_agree_to_check">I agree with the terms and conditions</label> -->
                                <a id="checkout" class="astor-button astor-button--medium checkout_btn" name="checkout" href="<?= base_url()?>/gio-hang/checkout">Xử lý đơn hàng</a> 
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </div>

   <!-- PAGE SECTION END -->
   <style>#section-template--14537261219899__main{}@media (min-width:768px) and (max-width:991px){#section-template--14537261219899__main{}}@media (max-width:767px){#section-template--14537261219899__main{}}</style>
   <style>
      #section-template--14537261219899__main .astor-button.astor-button--medium.checkout_btn {
      background: #d3122a;
      border-color: #d3122a;
      color: #ffffff!important;
      }
      .cart-table th {
      text-align: center;
      }
      .cart-coupon-area .astor-button {
      margin-left: 10px;
      }
   </style>
   <!--[if (gt IE 9)|!(IE)]><!--><script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js" defer="defer"></script><!--<![endif]-->
   <!--[if lte IE 9]><script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/shopify_common-8ea6ac3faf357236a97f5de749df4da6e8436ca107bc3a4ee805cbf08bc47392.js"></script><![endif]-->
</div>
<div id="shopify-section-template--14537261219899__1631071222603bc346" class="shopify-section">

<style>#section-template--14537261219899__1631071222603bc346.product-carousel-container .product-carousel .slick-arrow{color:#e7e7e7;}@media only screen and (min-width:1200px) and (max-width:1350px){.product-carousel:hover .slick-arrow.slick-prev{left:0;}.product-carousel .slick-arrow.slick-prev{left:0;}.product-carousel .slick-arrow.slick-next{right:0;}.product-carousel:hover .slick-arrow.slick-next{right:0;}}.product-carousel{display:none;}.product-carousel.slick-initialized.slick-slider{	display:block;}</style>
<style>#section-template--14537261219899__1631071222603bc346{margin-top:0px !important;margin-bottom:90px !important;}@media (min-width:768px) and (max-width:991px){#section-template--14537261219899__1631071222603bc346{margin-top:0px !important;margin-bottom:75px !important;}}@media (max-width:767px){#section-template--14537261219899__1631071222603bc346{margin-top:0px !important;margin-bottom:65px !important;}}</style>

</div>
    </main>