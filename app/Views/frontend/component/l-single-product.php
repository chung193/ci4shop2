


<div class="item">      
   <div class="col" style="width: 100%; display: inline-block;">
      <div class="single-product 39988850294843 mobile__Hover_content ">
         <div class="single-product__image">
            <a class="image-wrap pr_custom__ratio img_rel" href="<?= base_url().'/san-pham/'.$product->slug?>" style="padding-top:100.0%;" tabindex="0">
               <img id="Image-29136599482427" class="responsive-image__image popup_cart_image pr_img_custom_attr lazyautosizes lazyloaded" 
               src="<?= base_url().'/public/uploads/product/'.$product->img?>" data-widths="[180,360,540,720,800]" data-aspectratio="1.0" data-sizes="auto" tabindex="-1" alt="<?= $product->name ?>" 
               data-srcset="<?= base_url().'/public/uploads/product/'.$product->img?>">
               <noscript>
                  <img class="popup_cart_image pr_img_custom_attr" src="<?= base_url().'/public/uploads/product/'.$product->img?>" alt="<?= $product->name ?>">
               </noscript>
               <img id="Image-29136599384123" class="responsive-image__image popup_cart_image secondary__img pr_img_custom_attr lazyautosizes lazyloaded" 
               src="<?= base_url().'/public/uploads/product/'.$product->img?>" 
               data-widths="[180,360,540,720,800]" data-aspectratio="1.0" data-sizes="auto" tabindex="-1" 
               alt="<?= $product->name ?>" 
               data-srcset="<?= base_url().'/public/uploads/product/'.$product->img?>">
               <noscript><img class="popup_cart_image secondary__img pr_img_custom_attr" src="<?= base_url().'/public/uploads/product/'.$product->img?>" 
               alt="<?= $product->name ?>"></noscript>
            </a>
            <div class="single-product__floating-badges"></div>

            <div class="single-product__floating-icons">

                <!-- <span class="wishlist_inner">
                    <a class="action-wishlist tile-actions--btn flex wishlist-btn wishlist" href="javascript: void(0)" button-wishlist="" data-product-handle="apple-iphone-13-pro" tabindex="0"> 
                        <span class="add-wishlist" data-tippy-content="Add To Wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" data-tippy-placement="left" tabindex="0"> 
                            <i class="ion-android-favorite-outline"></i>
                        </span> 
                        <span class="loading-wishlist">
                            <i class="fa animated rotateIn infinite fa-spinner"> </i>
                        </span> 
                        <span class="remove-wishlist" data-tippy-content="Remove From Wishlist" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" data-tippy-placement="left" tabindex="0">
                            <i class="ion-close-round"></i>
                        </span>
                    </a>
                </span> -->

                <!-- <span class="compare">
                    <a href="#" data-tippy-content="Compare" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" data-tippy-placement="left" class="compare" data-pid="apple-iphone-13-pro" tabindex="0">
                        <i class="ion-ios-shuffle-strong"></i>
                    </a> 
                </span> -->

                <!-- <span class="quickview">
                    <a data-toggle="modal" data-target="#quickViewModal" href="javascript:void(0);" onclick="quiqview('apple-iphone-13-pro')" data-tippy-content="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" data-tippy-placement="left" tabindex="0">
                    <i class="ion-ios-search-strong"></i>
                </a> -->
            </span>
        </div>

            <div class="single-product__variations d-none d-lg-block color_variant_conatiner">
               <div class="size-container"></div>
               <script>$('.size__exit').parent('div').addClass('size__parent');$('.size__parent').parent('div').addClass('size_variant_conatiner');</script>
               <div class="color-container color_variant_div">
                  <ul class="grid-color-swatch  variant_exist">
                     <?php 
                        $arr = explode(',',$product->img_list);
                        foreach($arr as $val){
                     ?>
                     <li class=" img_variant color__Variant">
                        <!-- Product Image Lazyload with Retina -->
                        <div class="variant_img">
                           <a  data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" href="" tabindex="0">
                            <img class="lazyload" style="border-radius: 0" data-src="<?= base_url().'/public/uploads/product/'.$val?>" alt=""></a> </div>
                     </li>
                     <?php  }
                     ?>

                  </ul>
               </div>
               <script>$('.color__Variant').parent('ul').addClass('variant_exist');$('.variant_exist').parent('div').addClass('color_variant_div');$('.color_variant_div').parent('div').addClass('color_variant_conatiner');</script>
            </div>
         </div>
         <div class="single-product__content " style="padding-top: 0px;">
         <div class="title">
            <h3 class="popup_cart_title"> <a href="<?= base_url().'/san-pham/'.$product->slug ?>" tabindex="0"><?= $product->name ?></a></h3>
            <!-- <div class="product-cart-action">
               <a href="/products/apple-iphone-13-pro" class="" tabindex="0"> <span><span class="cart-title">Select Options</span> </span></a>
            </div> -->
         </div>
            <div>
               <div class="price" style="padding-top: 0px;">
                  <span id="product_current_price" class="discounted-price" style="padding-top: 0px;">
                     <span class="money" style="font-size: 20px;">
                     <?php 
                     $now = date('Y-m-d');
                     if($product->qty>0){
                        if (!$product->show_price) {
                           echo 'Giá liên hệ';
                        } elseif($now > $product->from_date && $now < $product->to_date){
                           if($product->ratio != 0){
                              $price = $product->price - ($product->price/100)*$product->ratio;
                              echo '<del>'.price_format($product->price) .' đ</del> <span class="text-danger">'.price_format($price).' đ</span>';
                           }elseif($product->money != 0){
                              $price = $product->price - $product->money;
                              echo '<del>'.price_format($product->price) .' đ</del> <span class="text-danger">'.price_format($price).' đ</span>';
                           }else{
                              echo price_format($product->price) . ' đ';
                           }
                        }else{
                           echo price_format($product->price) . ' đ';
                        }
                     }
                     
                     ?>
                         
                     </span>
                  </span>
                  <small class="unit_price_box caption hidden">
                     <dd><span id="product__unit_price"></span><span aria-hidden="true">/</span><span id="product__unit_price_value"></span> </dd>
                  </small>
               </div>
            </div>
            

         </div>
         <!--======= End of single product content =======-->
      </div>
   </div>
</div>
