<?php
   echo view('frontend/component/breadcrum', $test);
   $now = date('Y-m-d');
?>
<style>
   .sp-quantity{
      border-bottom: 2px solid #ccc;
      padding: 10px 0;
      margin: 0 10px 0 30px;
   }

   .sp-quantity span{
      font-size: 20px;
      font-weight: 500;
      color: #333;
      cursor: pointer;
   }

   .sp-quantity input {
      border: none;
      width: 80px;
      text-align: center;
      font-size: 16px;
      font-weight: 500;
      color: #333;
      margin-bottom: 0;
      padding: 0 15px;
      vertical-align: middle;
   }
</style>
<main>
   <div id="shopify-section-template--14537261514811__main" class="shopify-section">
      <link href="//cdn.shopify.com/s/files/1/0023/4104/4283/t/6/assets/accordion-module.css?v=698794019205544721645332559" rel="stylesheet" type="text/css" media="all">
      <div class="shop-page-wrapper mt-100 mt-sm-80" id="product-details-with-gallery" itemscope="" itemtype="http://schema.org/Product" data-section="ProductPage">
         <meta itemprop="name" content="<?= $product->name ?>">
         <meta itemprop="url" content="<?= current_url() ?>">
         <meta itemprop="image" content="<?= base_url() . '/public/uploads/product/' . $product->img ?>">
         <div class=" container ">
            <div class="row">
               <div class="col-lg-12">
                  <div class="shop-product">
                     <div class="row pb-100 pb-md-85 pb-sm-65">

                        <div class="col-lg-6 col-md-6">
                           <div class="product-gallery-sticky ">
                              <div class="shop-product__big-image-gallery-wrapper product__slide_wrapper">

                                 <div class="slider-for">
                                    <?php
                                    $arr = array_filter(explode(",", $product->img_list));
                                    array_push($arr, $product->img);
                                    foreach ($arr as $val) {
                                    ?>
                                       <div class="thumb">
                                          <img src="<?= base_url() . '/public/uploads/product/' . $val ?>">
                                       </div>
                                    <?php   }
                                    ?>
                                 </div>

                                 <div class="slider-nav">
                                    <?php
                                    $arr = array_filter(explode(",", $product->img_list));
                                    array_push($arr, $product->img);
                                    foreach ($arr as $val) {
                                    ?>
                                       <div>
                                          <img src="<?= base_url() . '/public/uploads/product/' . $val ?>">
                                       </div>
                                    <?php   }
                                    ?>
                                 </div>

                              </div>

                              <!--======= shop product small image gallery =======-->
                           </div>
                        </div>

                        <div class=" col-lg-6 col-md-6 product-shop">
                           <form method="post" action="/cart/add" id="AddToCartForm" accept-charset="UTF-8" class="product-content-inner" enctype="multipart/form-data" novalidate="novalidate">
                              <input type="hidden" name="form_type" value="product"><input type="hidden" name="utf8" value="✓">
                              <div class="shop-product__description">
                                 <div class="shop-product__title">
                                    <h2 id="popup_cart_title"><?= $product->name ?></h2>
                                 </div>
                                 <!-- <div class="shop-product__rating">
                                    <div class="product-ratting">
                                       <span class="spr-badge" id="spr_badge_6765734264891" data-rating="0.0">
                                          <span class="spr-starrating spr-badge-starrating">
                                             <i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i>
                                             <i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i>
                                             <i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i>
                                             <i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i>
                                             <i class="spr-icon spr-icon-star-empty" aria-hidden="true"></i>
                                          </span>
                                          <span class="spr-badge-caption">No reviews</span>
                                       </span>
                                    </div>
                                 </div> -->
                                 <div class="product-variant-inventory"> 
                                    <span class="inventory-title">Trạng thái: </span> 
                                    <span class="variant-inventory">
                                       <?php 
                                          if($product->qty == 0){
                                             echo 'Hết hàng';
                                          }else{
                                             echo 'Còn hàng';
                                          }
                                       ?>
                                    </span></div>
                                 <div class="shop-product__price">
                                    <div class="product_price__box d-flex align-items-center">
                                       <span class="discounted-price" id="ProductPrice">
                                          <span class="money" data-currency-usd="
                                          <?php
                                             if($product->qty>0){
                                                if (!$product->show_price) {
                                                   echo 'Giá liên hệ';
                                                } elseif($now > $product->from_date && $now < $product->to_date) {
                                                   if($product->ratio != 0){
                                                      $price = $product->price - ($product->price/100)*$product->ratio;
                                                      echo '<del>'.price_format($product->price) .' đ</del><span>'.price_format($price).' đ</span>';
                                                   }elseif($product->money != 0){
                                                      $price = $product->price - $product->money;
                                                      echo '<del>'.price_format($product->price) .' đ</del><span>'.price_format($price).' đ</span>';
                                                   }else{
                                                      echo price_format($product->price) . ' đ';
                                                   }
                                                }else{
                                                   echo price_format($product->price) . ' đ';
                                                }
                                             }
                                          ?>">
                                                                             
                                             <?php
                                             if($product->qty>0){
                                                if (!$product->show_price) {
                                                   echo 'Giá liên hệ';
                                                } elseif($now > $product->from_date && $now < $product->to_date){
                                                   if($product->ratio != 0){
                                                      $price = $product->price - ($product->price/100)*$product->ratio;
                                                      echo '<del>'.price_format($product->price) .' đ</del> &nbsp;<span class="text-danger">'.price_format($price).' đ</span>';
                                                   }elseif($product->money != 0){
                                                      $price = $product->price - $product->money;
                                                      echo '<del>'.price_format($product->price) .' đ</del> &nbsp;<span class="text-danger">'.price_format($price).' đ</span>';
                                                   }else{
                                                      echo price_format($product->price) . ' đ';
                                                   }
                                                }else{
                                                   echo price_format($product->price) . ' đ';
                                                }
                                             }
                                             ?>
                                          </span></span>
                                    </div>
                                    <small class="unit_price_box caption hidden">
                                       <dd> <span id="product__unit_price"></span> <span aria-hidden="true">/</span> <span id="product__unit_price_value"> </span></dd>
                                    </small>
                                 </div>

                                 <?php 
                                 
                                 if($now > $product->from_date && $now < $product->to_date && $product->dcid != 1){
                                 ?>

                                 <div class="box-product-promotion">
                                    <div class="box-product-promotion-header is-flex p-2 has-text-weight-semibold is-align-items-center">
                                       <div class="icon">
                                          <svg height="15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                             <path d="M152 0H154.2C186.1 0 215.7 16.91 231.9 44.45L256 85.46L280.1 44.45C296.3 16.91 325.9 0 357.8 0H360C408.6 0 448 39.4 448 88C448 102.4 444.5 115.1 438.4 128H480C497.7 128 512 142.3 512 160V224C512 241.7 497.7 256 480 256H32C14.33 256 0 241.7 0 224V160C0 142.3 14.33 128 32 128H73.6C67.46 115.1 64 102.4 64 88C64 39.4 103.4 0 152 0zM190.5 68.78C182.9 55.91 169.1 48 154.2 48H152C129.9 48 112 65.91 112 88C112 110.1 129.9 128 152 128H225.3L190.5 68.78zM360 48H357.8C342.9 48 329.1 55.91 321.5 68.78L286.7 128H360C382.1 128 400 110.1 400 88C400 65.91 382.1 48 360 48V48zM32 288H224V512H80C53.49 512 32 490.5 32 464V288zM288 512V288H480V464C480 490.5 458.5 512 432 512H288z"></path>
                                          </svg>
                                       </div>
                                       <p>Khuyến mãi</p>
                                    </div>
                                    <div class="box-product-promotion-content px-2 pt-2 show-all">
                                       <div class="is-flex is-align-content-center my-2">
                                          <p class="box-product-promotion-number has-text-primary-light has-background-danger-dark">1</p>
                                          <a target="_blank" href="<?= base_url().'/khuyen-mai/'. $product->dslug?>" class="box-product-promotion-detail mx-1 has-text-black"><?= $product->title?>
                                          <span>(Xem chi tiết)</span></a>
                                       </div>
                                       <!----> <!---->
                                    </div>
                                 </div>
                                 <?php } ?>

                                 <div class="short_desc motangan full">
                                    <div class="motangan_title">Thông số tóm tắt</div>
                                       <div class="motangan_content">
                                          <ul>
                                          <?php 
                                             $arr = array_filter(explode(',',$product->detail));
                                             $i = 0;
                                             foreach($arr as $val){
                                                if($i < 10){
                                          ?>
                                          <li><?= $val ?></li>
                                          <?php }
                                          $i ++;
                                          } ?>
                                             
                                          </ul>
                                       </div>
                                    </div>
                                 </div>

                                 
                                 <div style="max-height:100%;" class="related_product thongso short_desc full">

                                 <?php 
                                    foreach($child as $val){
                                 ?>
                                    <div class="item_related_product active">
                                       <a title="<?= $val['name'] ?>" href="<?= base_url().'/san-pham/'.$val['slug'] ?>">
                                          <strong>
                                             <?php 
                                             if(current_url() == base_url().'/san-pham/'.$val['slug']){
                                                echo '<i class="fa fa-check-circle"></i>';
                                             }else{
                                                echo '<i class="fa fa-circle-thin"></i>';
                                             }
                                             ?>
                                             
                                          <?= $val['name'] ?></strong>
                                             <span class="related_price price_set_34330"><?= price_format($val['price']).' đ' ?></span>
                                       </a>
                                    </div>
                                 <?php } ?>
                                 </div>



                                 

                                 
                                 <style>
                                    .product-variant-option .selector-wrapper {
                                       display: none;
                                    }
                                 </style>
                                 <?php 
                                    if($product->qty > 0){
                                       ?>
                                       <div class="shop-product__block shop-product__block--quantity mb-40" style="width:100%">
                                          <div class="shop-product__block__title">Số lượng: </div>
                                          <div class="shop-product__block__value">
                                             <div class="d-inline-block mx-0 pt-0 sp-quantity"> 
                                                <span class="dec sp-minus fff">-</span> 
                                                <input type="text" class="quntity-input" id="input" name="quantity" value="1"> 
                                                <span class="inc sp-plus fff" >+</span>
                                             </div>
                                          </div>
                                       </div>
                                  <?php  }
                                 ?>
                     
                                
                                 <div class="shop-product__buttons sticky__pro_button">
                                    <div class="product-cart-action " >
                                       <button class="
                                       <?php 
                                          if(!$product->qty || !$product->show_price){
                                             echo 'cart-disable';
                                          }else{
                                             echo 'product-cart-action';
                                          }
                                       ?>" type="button" 
                                       <?php 
                                          if(!$product->qty || !$product->show_price){
                                             echo 'product-cart-action';
                                          }else{?>
                                             onclick="onAddCart(<?= $product->id?>, $('#input').val())"
                                       <?php   }
                                       ?>>
                                          <span class="cart-text">Thêm vào giỏ hàng</span> 
                                       </button> 
                                    </div>
                                    <!-- <div class="product_inner_wishlist">
                                       <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist" href="javascript: void(0)" button-wishlist="" data-product-handle="apple-iphone-13-mini"> 
                                          <span class="add-wishlist" data-tippy-content="Add To Wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" data-tippy-placement="top" tabindex="0"> 
                                             <i class="ion-android-favorite-outline"></i>
                                          </span> 
                                          <span class="loading-wishlist">
                                             <i class="fa animated rotateIn infinite fa-spinner"> </i>
                                          </span> 
                                          <span class="remove-wishlist" data-tippy-content="Remove From Wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" data-tippy-placement="top" tabindex="0">
                                             <i class="ion-close-round"></i>
                                          </span>
                                       </a>
                                    </div> -->
                                 </div>


                                 <div class="quick-view-other-info pb-0" style="border-top:none">
                                    <table>
                                       <tbody>
                                          <tr class="single-info">
                                             <td class="quickview-title product-sku">Hãng: </td>
                                             <td class="quickview-value"> <?= $product->proc_name ?> </td>
                                          </tr>
                                          <tr class="single-info">
                                             <td class="quickview-title product-sku" style="width:110px">Danh mục: </td>
                                             <td class="quickview-value"> <?= $product->cat_name ?> </td>
                                          </tr>
                                          <tr class="single-info">
                                             <td class="quickview-title">Chia sẻ: </td>
                                             <td class="quickview-value">
                                                <!-- Share -->
                                                <div class="share-icons">
                                                   <link href="//cdn.shopify.com/s/global/social/social-icons.css" rel="stylesheet" type="text/css" media="all">
                                                   <style>
                                                      .social-links a {
                                                         display: -moz-inline-stack;
                                                         display: inline-block;
                                                         zoom: 1;
                                                         *display: inline;
                                                         margin: 0;
                                                         padding: 0.05em;
                                                         color: #555 !important;
                                                         font-size: 24px !important;
                                                      }
                                                   </style>
                                                   <span class="social-links">
                                                      <a class="facebook" href="//www.facebook.com/sharer.php?u=<?= current_url()?>" title="Follow us on Facebook" target="_blank"><i class="ion-social-facebook"></i></a>
                                                      <a class="twitter" href="//twitter.com/share?text=Astor%20iPhone%2013%20mini&amp;url=<?= current_url()?>" title="Follow us on Twitter" target="_blank"><i class="ion-social-twitter"></i></a>
                                                      <a class="pinterest" href="//pinterest.com/pin/create/button/?url=<?= current_url()?>&amp;media=http:<?= base_url() . '/public/uploads/product/' . $product->img ?>&amp;description=<?= current_url()?>" title="Follow us on Pinterest" target="_blank"><i class="ion-social-pinterest"></i></a> 
                                                   </span>
                                                </div>
                                             </td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <!--======= End of shop product content =======-->
               </div>
            </div>
         </div>
      </div>
      <style data-shopify="">
         #product-details-with-gallery {}

         @media (min-width:768px) and (max-width:991px) {
            #product-details-with-gallery {}
         }

         @media (max-width:767px) {
            #product-details-with-gallery {}
         }
      </style>
      
      <!-- Modal -->
      <div class="modal fade bd-example-modal-md" id="notify_available__product" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Notified by email when this product becomes available</h5>
                  <button type="button" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i> </button>
               </div>
               <div class="modal-body">
                  <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="ask_about_product">
                     <input type="hidden" name="form_type" value="contact"><input type="hidden" name="utf8" value="✓">
                     <div class="row">
                        <div class="col-12"> </div>
                        <div class="col-12 mb-30"><input type="email" class="w-100" required="" placeholder="Enter you mail.." name="contact[email]" id="ContactFormEmail" value=""> </div>
                        <div class="d-none"><textarea class="custom-textarea" name="contact[body]"> Please notify me when <?= $product->name ?> becomes available - https://bigon-6.myshopify.com/products/apple-iphone-13-mini</textarea> </div>
                        <div class="col-lg-12 text-center"><button type="submit" value="submit" class="astor-button astor-button--small">Notify when available</button> </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-lg" id="shipping_policy" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header justify-content-end"><button type="button" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i> </button> </div>
               <div class="modal-body">Chọn 1 trang</div>
            </div>
         </div>
      </div>

      <!-- Modal -->
      <div class="modal fade bd-example-modal-md" id="ask_about_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
         <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Bạn có thắc mắc?</h5>
                  <button type="button" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i> </button>
               </div>
               <div class="modal-body">
                  <form method="post" action="/contact#contact_form" id="contact_form" accept-charset="UTF-8" class="ask_about_product">
                     <input type="hidden" name="form_type" value="contact"><input type="hidden" name="utf8" value="✓">
                     <div class="row">
                        <div class="col-12"> </div>
                        <div class="col-md-6 mb-40"><input type="text" required="" placeholder="Tên *" class="" name="contact[name]" id="ContactFormName" value=""> </div>
                        <div class="col-md-6 mb-40"><input type="email" required="" placeholder="Email *" class="" name="contact[email]" id="ContactFormEmail" value=""> </div>
                        <div class="col-lg-12 mb-40"><input type="text" name="contact[phone]" placeholder="Điện thoại *" value=""> </div>
                        <div class="col-lg-12 mb-40"><input type="text" required="" name="contact[productURL]" placeholder=" URL sản phẩm *" 
                        value="<?= current_url() ?>"> </div>
                        <div class="col-lg-12 mb-40"><textarea placeholder="Nội dung thông điệp *" class="custom-textarea" name="contact[body]" id="ContactFormMessage"></textarea> </div>
                        <div class="col-lg-12 text-center"><button type="submit" value="submit" class="astor-button astor-button--medium">Gửi đi </button> </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <style>
         .shop-product__description>div {
            margin-bottom: 15px;
         }

         .shop-product__description>div:last-child {
            margin-bottom: 0;
         }

         .notify__title {
            font-size: 18px;
            color: #222;
            margin-bottom: 10px;
         }

         .notify_btn {
            color: #d3122a;
            font-weight: 600;
            text-decoration: underline;
         }

         .notify__icon {
            box-shadow: 1px 3px 5px #aaa;
            width: 35px;
            display: inline-block;
            height: 35px;
            text-align: center;
            border-radius: 50%;
            line-height: 35px;
            margin-right: 15px;
            font-size: 24px;
         }

         .product-video__icon {
            top: 60px !important;
         }

         .shop-product__description>.accordion {
            margin-bottom: 0;
         }

         .shop-product__price span.main-price.discounted {
            margin-left: 0;
         }

         .save__price_box {
            background: #333;
            color: #fff;
            padding: 0 10px;
            border-radius: 15px;
            margin-left: 10px
         }

         @media only screen and (max-width:575px) {
            .product_media_nav.left_vertical_slide .slick-list {
               display: none
            }
         }
      </style>
   </div>
   <div id="shopify-section-template--14537261514811__single-product-tab" class="shopify-section">
      <div class="shop-page-wrapper mb-100 mb-sm-80">
         <div class=" container ">
            <div class="row">
               <div class="col-lg-12">
                  <div class="shop-product">
                     <div class="row">
                        <div class="col-lg-12">
                           <div class="shop-product__description-tab pt-80 pt-sm-60">
                              <div class="tab-product-navigation tab-product-navigation--product-desc mb-40">
                                 <div class="nav nav-tabs justify-content-center" id="nav-tab2" role="tablist">
                                    <a href="#pro-dec" data-toggle="tab" role="tab" class="active" aria-selected="true"> Chi tiết sản phẩm</a>
                                    <a href="#pro-review" data-toggle="tab" role="tab"> Đánh giá</a>
                                    <a href="#custom-tab-97ac7d65-ac35-4731-8089-703d9c51dd27" data-toggle="tab" role="tab"> Cấu hình chi tiết</a>
                                 </div>
                              </div>
                              <div class="tab-content" id="nav-tabContent2">
                                 <div class="tab-pane active" id="pro-dec" role="tabpanel">
                                    <?= $product->description ?>
                                 </div>
                                 <div class="tab-pane " id="pro-review" role="tabpanel">
                                   
                                       <style scoped="">
                                          .spr-container {
                                             padding: 24px;
                                             border-color: #ECECEC;
                                          }

                                          .spr-review,
                                          .spr-form {
                                             border-color: #ECECEC;
                                          }
                                       </style>
                                       <div class="spr-container">
                                          <div class="spr-header">
                                             <h2 class="spr-header-title">Đánh giá của khách hàng</h2>
                                             <!-- <div class="spr-summary rte">
                                                <span class="spr-summary-caption">Chưa có đánh giá</span><span class="spr-summary-actions">
                                                   <a href="#" class="spr-summary-actions-newreview" onclick="SPR.toggleForm(6765734264891);return false">Viết 1 đánh giá</a>
                                                </span>
                                             </div> -->
                                          </div>
                                          <div class="spr-content">
                                             <!-- <div class="spr-form" id="form_6765734264891">
                                                <form method="post" action="//productreviews.shopifycdn.com/api/reviews/create" id="new-review-form_6765734264891" class="new-review-form" onsubmit="SPR.submitForm(this);return false;">
                                                   <input type="hidden" name="review[rating]">
                                                   <input type="hidden" name="product_id" value="6765734264891">
                                                   <h3 class="spr-form-title">Viết 1 đánh giá</h3>
                                                   <fieldset class="spr-form-contact">
                                                      <div class="spr-form-contact-name">
                                                         <label class="spr-form-label" for="review_author_6765734264891">Tên</label>
                                                         <input class="spr-form-input spr-form-input-text " id="review_author_6765734264891" type="text" name="review[author]" value="" placeholder="Enter your name">
                                                      </div>
                                                      <div class="spr-form-contact-email">
                                                         <label class="spr-form-label" for="review_email_6765734264891">Email</label>
                                                         <input class="spr-form-input spr-form-input-email " id="review_email_6765734264891" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
                                                      </div>
                                                   </fieldset>
                                                   <fieldset class="spr-form-review">
                                                      <div class="spr-form-review-rating">
                                                         <label class="spr-form-label" for="review[rating]">Đánh giá</label>
                                                         <div class="spr-form-input spr-starrating ">
                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="1" aria-label="1 of 5 stars">&nbsp;</a>
                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="2" aria-label="2 of 5 stars">&nbsp;</a>
                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="3" aria-label="3 of 5 stars">&nbsp;</a>
                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="4" aria-label="4 of 5 stars">&nbsp;</a>
                                                            <a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="5" aria-label="5 of 5 stars">&nbsp;</a>
                                                         </div>
                                                      </div>
                                                      <div class="spr-form-review-title">
                                                         <label class="spr-form-label" for="review_title_6765734264891">Tiêu đề</label>
                                                         <input class="spr-form-input spr-form-input-text " id="review_title_6765734264891" type="text" name="review[title]" value="" placeholder="Give your review a title">
                                                      </div>
                                                      <div class="spr-form-review-body">
                                                         <label class="spr-form-label" for="review_body_6765734264891">
                                                            Nội dung
                                                            <span role="status" aria-live="polite" aria-atomic="true">
                                                               <span class="spr-form-review-body-charactersremaining">(1500)</span>
                                                               <span class="visuallyhidden">characters remaining</span>
                                                            </span>
                                                         </label>
                                                         <div class="spr-form-input">
                                                            <textarea class="spr-form-input spr-form-input-textarea " id="review_body_6765734264891" data-product-id="6765734264891" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>
                                                            <script>
                                                               function sprUpdateCount(e) {
                                                                  var $el = SPR.$(e.currentTarget);
                                                                  SPR.$(".spr-form-review-body-charactersremaining").html('(' + (1500 - $el.val().length) + ')');
                                                               }
                                                               SPR.$("textarea[data-product-id=6765734264891]").keyup(sprUpdateCount).trigger("keyup");
                                                            </script>
                                                         </div>
                                                      </div>
                                                   </fieldset>
                                                   <fieldset class="spr-form-actions">
                                                      <input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                                   </fieldset>
                                                </form>
                                             </div> -->
                                             <div class="fb-comments" data-href="<?= current_url()?>" data-width="" data-numposts="5"></div>
                                             
                                          </div>
                                       </div>
                                    </div>

                                 <div class="tab-pane " id="custom-tab-97ac7d65-ac35-4731-8089-703d9c51dd27" role="tabpanel">
                                    <h3>Cấu hình chi tiết</h3>
                                    <table class="table table-bordered table-hover table-striped">
                                       <tbody>
                                          <?php 
                                             $arr = array_filter(explode(',',$product->detail));
                                             foreach($arr as $val){
                                                echo '<tr>';
                                                $temp = explode(':',$val);
                                                foreach($temp as $value){
                                          ?>                  
                                          <td><?= $value ?></td>
                                          <?php 
                                             }
                                             echo '</tr>';
                                          }
                                          ?>
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="shopify-section-template--14537261514811__related-product" class="shopify-section">
      <!-- PRODUCT SECTION START -->
      <div class="related-product mb-100 mb-sm-70" id="section-template--14537261514811__related-product" data-section="RelatedProudct">
        
         <div class="container">
            <div class="row">
               <div class="col-12">
                  <div class="section-title mb-30 text-center">
                     <h2>Gợi ý cho bạn</h2>
                  </div>
               </div>
            </div>
         </div>

         <div class="container">
            <div class="row">
               <div class="col-lg-12">

                  <!--======= product carousel =======-->
                  <div class="product-carousel product-carousel--smarthome grid_styel_1 slick-initialized slick-slider" >
                        <?php 
                        //print_r($random); die();
                        foreach($random as $val){
                           foreach($val as $proc){
                                 $data['product'] = (object)$proc;
                                 //print_r($data['product']);
                                 echo view('frontend/component/l-single-product', $data);
                           }
                        }
                           
                        ?>  
                           </div>
                        </div>                 
                     </div>
                  </div>
               </div>
         </div>
         
   </div>
</main>