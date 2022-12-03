<main>
   <?php 
      $slider = getenv('shop.ui.slider.type');
      if($slider == 0){
         echo view('frontend/component/slider', $test);
      }elseif($slider == 1){
         echo view('frontend/component/slider-1', $test);
      }
      elseif($slider == 2){
         echo view('frontend/component/slider-2', $test);
      }
      
   ?>
   <div id="shopify-section-template--14537261547579__16438779084908e9f3" class="shopify-section">
      <div class="product-widget-area" id="section-template--14537261547579__16438779084908e9f3" data-section="BannerSection">
         <div class=" container ">
            <div class="row">
               <div class="col-lg-12">
                  <div class="product-widget-wrapper">
                     <div class="row">
                        <div class="col-lg-4 col-md-6">
                           <div class="single-product-widget-wrapper">
                              <h3 class="single-product-widget-title">Hàng mới về</h3></h3>
                                 
                                    <?php 
                                       foreach($base['arrivals'] as $val){
                                             $data['product'] = (object)$val;
                                             echo view('frontend/component/single-product', $data);
                                       }
                                    ?>
                                 </div>
                                 <!--======= End of single product widget wrapper =======-->
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="single-product-widget-wrapper">
                              <h3 class="single-product-widget-title">Gợi ý cho bạn</h3>
                              <?php 
                                       foreach($base['featured'] as $val){
                                             $data['product'] = (object)$val;
                                             echo view('frontend/component/single-product', $data);
                                       }
                                    ?>
                                 </div>
                           <!--======= End of single product widget wrapper =======-->
                        </div>
                        <div class="col-lg-4 col-md-6">
                           <div class="single-product-widget-wrapper">
                              <h3 class="single-product-widget-title">Bán chạy nhất</h3>
                              <?php 
                                       foreach($base['mostsale'] as $val){
                                             $data['product'] = (object)$val;
                                             echo view('frontend/component/single-product', $data);
                                       }
                                    ?>
                                 </div>
                           <!--======= End of single product widget wrapper =======-->
                        </div>
                     </div>
                  </div>
                  <!--======= End of product-widget wrapper =======--> 
               </div>
            </div>
         </div>
      </div>
      <style>
         #section-template--14537261547579__16438779084908e9f3 {
         padding-top: 100px !important;
         padding-bottom: 0px !important;
         }
         @media (min-width: 768px) and (max-width: 991px) {
         #section-template--14537261547579__16438779084908e9f3 {
            padding-top: 80px !important;
            padding-bottom: 0px !important;
         }
         }
         @media (max-width: 767px) {
         #section-template--14537261547579__16438779084908e9f3 {
            padding-top: 60px !important;
            padding-bottom: 0px !important;
         }
         }
      </style>
      <style data-shopify=""></style>
   </div>

   <div id="shopify-section-template--14537261547579__1644049775ae1313cb" class="shopify-section">
      <div class="product-carousel-container slick-carousel-js mb-35 mb-md-0 mb-sm-0" id="section-template--14537261547579__1644049775ae1313cb" data-section="ProudctCarouselSlider">
         <div class="container ">

            <div class="row">
               <div class="col-lg-12">
                  <div class="section-title-container mb-80 mb-md-60 mb-sm-40">
                     <div class="section-title section-title--one text-center ">
                        <h1 class="title--large ">Top bán chạy</h1>
                        <p class="subtitle subtitle--deep mb-0">
                           Các sản phẩm bán chạy nhất tại Macstore <br> Cùng khám phá nào
                        </p>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               

                  <!--======= product carousel =======-->
                           <?php 
                              foreach($base['mostsaleslick'] as $val){
                                    $data['product'] = (object)$val;
                                    echo view('frontend/component/l-single-product', $data);
                              }
                           ?>                   
                  </div>
               </div>

            </div>
         </div>
      </div>
      <style>#section-template--14537261547579__1644049775ae1313cb.product-carousel-container .product-carousel .slick-arrow{color:#e7e7e7;}@media only screen and (min-width:1200px) and (max-width:1350px){.product-carousel:hover .slick-arrow.slick-prev{left:0;}.product-carousel .slick-arrow.slick-prev{left:0;}.product-carousel .slick-arrow.slick-next{right:0;}.product-carousel:hover .slick-arrow.slick-next{right:0;}}.product-carousel{display:none;}.product-carousel.slick-initialized.slick-slider{	display:block;}</style>
      <style>#section-template--14537261547579__1644049775ae1313cb{padding-top:100px !important;padding-bottom:45px !important;}@media (min-width:768px) and (max-width:991px){#section-template--14537261547579__1644049775ae1313cb{padding-top:80px !important;padding-bottom:0px !important;}}@media (max-width:767px){#section-template--14537261547579__1644049775ae1313cb{padding-top:60px !important;padding-bottom:0px !important;}}</style>
   </div>

   <div id="shopify-section-template--14537261547579__16435218392d081d91" class="shopify-section">
      <div class="hover-banner-area mb-50 mb-sm-30" id="section-template--14537261547579__16435218392d081d91" data-section="BannerSection">
         <div class=" container wide ">
            <div class="row">

               <?php echo view('frontend/component/banner_home', $test);?>

            </div>
         </div>
      </div>
      <style>#section-template--14537261547579__16435218392d081d91{}@media (min-width:768px) and (max-width:991px){#section-template--14537261547579__16435218392d081d91{}}@media (max-width:767px){#section-template--14537261547579__16435218392d081d91{}}</style>
      <style>.single-banner--hoverborder:after{	pointer-events:none;}</style>
   </div>

   <?php 
      foreach($base['allcategory'] as $val){
   ?>
   <div class="shopify-section">
      <div class="product-carousel-container slick-carousel-js mb-35 mb-md-0 mb-sm-0" id="section-template--14537261547579__1644049775ae1313cb" data-section="ProudctCarouselSlider">
         <div class=" container ">
            <div class="row">
               <div class="col-lg-12">
                  <div class="section-title-container mb-80 mb-md-60 mb-sm-40">
                     <div class="section-title section-title--one text-center ">
                        <h1 class="title--large "><?= $val['name'] ?></h1>
                        <p class="subtitle subtitle--deep mb-0">
                           Các sản phẩm <?= $val['name'] ?> bán chạy nhất tại Macstore <br> Cùng khám phá nào
                        </p>
                     </div>
                  </div>
               </div>
            </div>

            <div class="row">
               <div class="col-lg-12">

                  <!--======= product carousel =======-->
                  <div class="product-carousel product-carousel--smarthome grid_styel_1 slick-initialized slick-slider" data-slick="{&quot;slidesToShow&quot;: 3,&quot;slidesToScroll&quot;: 3,&quot;arrows&quot;: false,&quot;dots&quot;: true,&quot;autoplay&quot;: false,&quot;autoplaySpeed&quot;: 5000,&quot;speed&quot;: 1000,&quot;responsive&quot;:[ {&quot;breakpoint&quot;:1501, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3, &quot;arrows&quot;: false} }, {&quot;breakpoint&quot;:1199, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3, &quot;arrows&quot;: false} }, {&quot;breakpoint&quot;:991, &quot;settings&quot;: {&quot;slidesToShow&quot;: 3,&quot;slidesToScroll&quot;: 3, &quot;arrows&quot;: false} }, {&quot;breakpoint&quot;:767, &quot;settings&quot;: {&quot;slidesToShow&quot;: 2, &quot;slidesToScroll&quot;: 2, &quot;arrows&quot;: false,&quot;dots&quot;: true} }, {&quot;breakpoint&quot;:575, &quot;settings&quot;: {&quot;slidesToShow&quot;: 2, &quot;slidesToScroll&quot;: 2, &quot;arrows&quot;: false, &quot;dots&quot;: true } }, {&quot;breakpoint&quot;:479, &quot;settings&quot;: {&quot;slidesToShow&quot;: 1, &quot;slidesToScroll&quot;: 1, &quot;arrows&quot;: false, &quot;dots&quot;: true} }]}">
                           <?php 
                              $i = 0;
                              foreach($base['allproduct'] as $proc){
                                 if($proc['category_id'] == $val['id'] && $i <10){
                                    $data['product'] = (object)$proc;
                                    echo view('frontend/component/l-single-product', $data);
                                    $i++;
                                 }
                              }
                           ?>                   
                        </div>
                     </div>
                  </div>
               </div>
               
               <div class="row"> 
                  <div class="col-lg-12 text-center mt-45 mt-sm-20">
                     <a href="<?=base_url().'/danh-muc-san-pham/'.$val['slug']?>" class="aplee-button aplee-button--medium"> 
                        <i class="ion-plus"></i> Xem tất cả </a> 
                     </div>
                  </div>
            </div>

         </div>
      </div>
      <style>#section-template--14537261547579__1644049775ae1313cb.product-carousel-container .product-carousel .slick-arrow{color:#e7e7e7;}@media only screen and (min-width:1200px) and (max-width:1350px){.product-carousel:hover .slick-arrow.slick-prev{left:0;}.product-carousel .slick-arrow.slick-prev{left:0;}.product-carousel .slick-arrow.slick-next{right:0;}.product-carousel:hover .slick-arrow.slick-next{right:0;}}.product-carousel{display:none;}.product-carousel.slick-initialized.slick-slider{	display:block;}</style>
      <style>#section-template--14537261547579__1644049775ae1313cb{padding-top:100px !important;padding-bottom:45px !important;}@media (min-width:768px) and (max-width:991px){#section-template--14537261547579__1644049775ae1313cb{padding-top:80px !important;padding-bottom:0px !important;}}@media (max-width:767px){#section-template--14537261547579__1644049775ae1313cb{padding-top:60px !important;padding-bottom:0px !important;}}</style>
   </div>

   <?php }?>
   
   <!-- <div id="shopify-section-template--14537261547579__1643693062c9dbdbda" class="shopify-section">
      <div class="cta-area pt-30 pb-30 " id="section-template--14537261547579__1643693062c9dbdbda">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="cta-content mailchimp_section-2 ">
                     <div class="cta-title">
                        <h2>Để không bỏ lỡ những deal hot của chúng tôi</h2>
                        <p>Đăng ký nhận email từ Macstore để nhận những tin mới nhất hoặc ưu đãi từ chúng tôi</p>
                     </div>
                     <div class="nesletter__form">
                        <form method="post" action="/contact#Contact_template--14537261547579__1643693062c9dbdbda" id="Contact_template--14537261547579__1643693062c9dbdbda" accept-charset="UTF-8" class="shopify_newsletter__form">
                           <input type="hidden" name="form_type" value="customer"><input type="hidden" name="utf8" value="✓">
                           <div class="subscription-form">
                              <div class="form__inner"><input type="hidden" name="contact[tags]" value="newsletter"><input type="email" name="contact[email]" id="Email" value="" placeholder="Địa chỉ email của bạn." aria-label="email@example.com" autocorrect="off" autocapitalize="off"><button type="submit" name="commit" id="Subscribe"><i class="ion-ios-arrow-thin-right"></i></button> </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <style>#section-template--14537261547579__1643693062c9dbdbda .cta-title h2{color:#ffffff;} #section-template--14537261547579__1643693062c9dbdbda.cta-title p{ color:#ffffff;}#section-template--14537261547579__1643693062c9dbdbda .astor-cta-button{background-color:;color:!important;border-color:;}	#section-template--14537261547579__1643693062c9dbdbda .astor-cta-button:hover{background-color:;color:!important;border-color:;}	/*Newsletter Css*/.nesletter__form .subscription-form .form__inner input{background:#ffffff;color:#333333}.nesletter__form .subscription-form .form__inner input::-webkit-input-placeholder{color:#333333;}.nesletter__form .subscription-form .form__inner input:-ms-input-placeholder{color:#333333;}.nesletter__form .subscription-form .form__inner input::placeholder{color:#333333;}/*Newsletter Button*/.nesletter__form .subscription-form .form__inner button{background:#ffffff;color:#333333;}.nesletter__form .subscription-form .form__inner button:hover{background:rgba(0,0,0,0);color:#d3122a;}</style>
      <style>#section-template--14537261547579__1643693062c9dbdbda{background:#333333 no-repeat scroll center center / cover;}#section-template--14537261547579__1643693062c9dbdbda.section_overlay::before{background:#000000;opacity:0.5;}@media (min-width:768px) and (max-width:991px){#section-template--14537261547579__1643693062c9dbdbda{}}@media (max-width:767px){#section-template--14537261547579__1643693062c9dbdbda{}}</style>
   </div> -->
   <div id="shopify-section-template--14537261547579__16436929260056671b" class="shopify-section">
      <section class="method-area" id="section-template--14537261547579__16436929260056671b">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-12 mb-md--30">
                  <div class="method-box text-center">
                     <img id="bannerImage-510604116027" class="lazyautosizes lazyloaded" data-src="//cdn.shopify.com/s/files/1/0023/4104/4283/files/i2-2_medium.png?v=1643693756" data-sizes="auto" alt="" sizes="51px" src="//cdn.shopify.com/s/files/1/0023/4104/4283/files/i2-2_medium.png?v=1643693756">
                     <h4 class="mt--20" style="color: #181818;">Miễn phí giao hàng</h4>
                     <p style="color: #737373;">Macstore sẽ miễn phí giao hàng cho 1 số giao dịch.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-12 mb-md--30">
                  <div class="method-box text-center">
                     <img id="bannerImage-510604181563" class="lazyautosizes lazyloaded" data-src="//cdn.shopify.com/s/files/1/0023/4104/4283/files/i2_medium.png?v=1643693836" data-sizes="auto" alt="" sizes="55px" src="//cdn.shopify.com/s/files/1/0023/4104/4283/files/i2_medium.png?v=1643693836">
                     <h4 class="mt--20" style="color: #181818;">Trả góp 0% qua thẻ tín dụng</h4>
                     <p style="color: #737373;">Chọn trả góp 0% qua thẻ tín dụng tiện lợi.</p>
                  </div>
               </div>
               <div class="col-lg-4 col-md-4 col-12 mb-md--30">
                  <div class="method-box text-center">
                     <img id="bannerImage-510604214331" class="lazyautosizes lazyloaded" data-src="//cdn.shopify.com/s/files/1/0023/4104/4283/files/gmm_medium.png?v=1643693938" data-sizes="auto" alt="" sizes="55px" src="//cdn.shopify.com/s/files/1/0023/4104/4283/files/gmm_medium.png?v=1643693938">
                     <h4 class="mt--20" style="color: #181818;">Chế độ bảo hành ưu việt</h4>
                     <p style="color: #737373;">Chế độ bảo hành ưu viện nhất trên thị trường, giúp bạn yên tâm sử dụng.</p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <style>#section-template--14537261547579__16436929260056671b{padding-top:95px !important;padding-bottom:100px !important;}@media (min-width:768px) and (max-width:991px){#section-template--14537261547579__16436929260056671b{padding-top:80px !important;padding-bottom:80px !important;}}@media (max-width:767px){#section-template--14537261547579__16436929260056671b{padding-top:15px !important;padding-bottom:60px !important;}}</style>
   </div>
</main>