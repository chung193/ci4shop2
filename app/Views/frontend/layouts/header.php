<div id="shopify-section-header_index_new" class="shopify-section">
   <header data-section="HeaderSection" id="section-header_index_new" class="header  header_2 new_header_index">
      <div class="header-top pt-10 pb-10 d-none d-lg-block">
         <div class=" container wide ">
            <div class="header-top-container">
               <div class="header-top-left ">
                  <div class="currency-change change-dropdown">

                  </div>
                  <span class="header-separator">|</span>
                  <div class="order-online-text"> <?= $base['ui']->text_top_header ?></div>
               </div>
               <div class="header-top-right  without_social ">
                  <div class="topbar_account_info">
                     <?php
                     $session = session();
                     // print_r($session);die();
                     $item = $session->get('customer_isLoggedIn');
                     if ($item) {
                        echo '
                           Xin chào<a href="' . base_url() . '/khach-hang/tai-khoan">' . $session->get('customer_name') . '</a> / <a href="' . base_url() . '/khach-hang/dang-xuat">Đăng xuất</a>
                           ';
                     } else {
                        echo '<a href="' . base_url() . '/khach-hang/dang-nhap">Đăng nhập</a> hoặc <a href="' . base_url() . '/khach-hang/dang-ky">đăng ký</a>';
                     }
                     ?>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="header_middle">
         <div class=" container wide ">
            <div class="row">
               <div class="col-12">
                  <div class="header_middle_inner d-flex justify-content-between align-items-center pt-30 pb-30">
                     <div class="logo-with-offcanvas">
                        <div class="logo">
                           <a href="<?= base_url()?>" class="theme-logo"> <img src="<?= base_url() . '/public/uploads/logo/' . $base['info']->logo ?>" alt="<?= $base['info']->name ?>"></a>
                        </div>
                     </div>
                     <div class="new_header_search d-none d-lg-block">
                        <div class="new_header_search_bar">
                           <form action="<?= base_url()?>/search/" method="get" class="input-group search-bar" role="search" style="position: relative;">
                              <input type="search" name="s" value="" onkeyup="showResult(this.value)" placeholder="Tìm kiếm sản phẩm" aria-label="Tìm kiếm sản phẩm" autocomplete="off"> <button type="submit"><i class="ion-ios-search-strong"></i> </button>
                              <div id="livesearch"></div>
                              
                           </form>
                        </div>
                     </div>
                     <div class="header-right-container">
                        <div class="header-right-icons d-flex justify-content-end align-items-center">
                           <div class="single-icon search d-lg-none wishlist_icon"> <a href="javascript:void(0)" id="search-icon"><i class="ion-ios-search-strong"></i> </a></div>
                           
                           <!-- <div class="wishlist_icon"> 
                              <a href="/pages/wishlist">
                                 <i class="ion-android-favorite-outline"></i>
                                 <span class="icon_text"> Yêu thích </span>
                              </a>
                           </div> -->
                           
                           <div class="mini_cart" id = "mini_cart">
                              <a href="javascript:void(0)" id="offcanvas-cart-icon">
                                 <span class="my__cart_icon">
                                    <span class="count bigcounter">
                                       <span id="countcartitem">
                                          <?php 
                                             $session = session();
                                             $cart = $session->get('cart');
                                             if(!empty($cart) && count($cart)){
                                                echo count($cart);
                                             }else{
                                                echo '0';
                                             }
                                          ?>
                                       </span>
                                    </span>
                                    <i class="ti-shopping-cart "></i>
                                 </span>
                                 <span class="icon_text">Giỏ hàng</span></a>
                           </div>
                           <div class="mobile_bar_info d-block d-lg-none" id="mobile_bar_info_trigger"> <a href="#"><i class=" ti-more "></i></a></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Mobile Navigation Start Here -->
            <div class="site-mobile-navigation d-block d-lg-none">
               <div class="mobile-navigation-icon" id="mobile-menu-trigger"> <i></i></div>
               <!--======= offcanvas mobile menu =======-->
               <div class="menu_offcanvas_overlay"></div>
               <div class="offcanvas-mobile-menu" id="mobile-menu-overlay">
                  <a href="javascript:void(0)" class="offcanvas-menu-close" id="mobile-menu-close-trigger">
                     <i class="ti-close"></i> 
                  </a>
                  <div class="offcanvas-wrapper">
                     <div class="offcanvas-inner-content">
                        <div class="offcanvas-mobile-search-area">
                           <form action="/search" method="get" class="input-group search-bar" role="search" style="position: relative;">
                              <input type="search" name="s" value="" placeholder="Tìm kiếm trong shop hoặc bài viết" aria-label="Tìm kiếm trong shop hoặc bài viết" autocomplete="off">
                              <button type="submit">
                                 <i class="ion-ios-search-strong"></i>
                              </button>
                              <ul class="search-results home-two" style="position: absolute; left: 0px; top: 42px; display: none;"></ul>
                           </form>
                        </div>
                        <nav class="offcanvas-navigation" id="offcanvas__main--menu">
                           <ul>
                              <li><a href="<?= base_url() ?>">Trang chủ</a></li>

                              <?php
                              foreach ($base['menu'] as $val) {
                                 if ($val['parent_id'] == 0) {
                                    foreach ($base['menu'] as $row) {
                                       $flag = false;
                                       if ($row['parent_id'] == $val['id']) {
                                          $flag = true;
                                          break;
                                       }
                                    }
                                    if ($flag) {
                                       echo '<li class="menu-item-has-children ">
                                             <span class="menu-expand"><i></i></span><a href="' . base_url() . '/danh-muc-san-pham/' . $val['slug'] . '">' . $val['name'] . '</a>
                                                <ul class="sub-menu" style="display: none;">';

                                       foreach ($base['menu'] as $temp) {
                                          if ($temp['parent_id'] == $val['id']) {
                                             echo '<li class="drop_item"><a href="' . base_url() . '/danh-muc-san-pham/' . $temp['slug'] . '">' . $temp['name'] . '</a></li>';
                                          }
                                       }
                                       echo '</ul>
                                             </li>';
                                    } else {
                                       echo '<li class="drop_item"><a href="' . base_url() . '/danh-muc-san-pham/' . $val['slug'] . '">' . $val['name'] . '</a></li>';
                                    }
                                 }
                              }
                              ?>
                              <li><a href="<?= base_url() ?>/gioi-thieu">Giới thiệu</a></li>
                              <li><a href="<?= base_url() ?>/lien-he">Liên hệ</a></li>
                           </ul>
                        </nav>
                        <div class="offcanvas-widget-area">
                           <!--Off Canvas Widget Social Start-->
                           <div class="off-canvas-widget-social social-icons--footer">
                              <ul class="social-icon">
                                 <li><a data-tippy-content="Twitter" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" href="#"><i class="ion-social-twitter"></i></a></li>
                                 <li><a data-tippy-content="Instagram" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" href="#"><i class="ion-social-instagram"></i></a></li>
                                 <li><a data-tippy-content="Linkedin" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" href="#"><i class="ion-social-linkedin"></i></a></li>
                                 <li><a data-tippy-content="Youtube" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" href="#"><i class="ion-social-youtube"></i></a></li>
                                 <li><a data-tippy-content="Facebook" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" href="#"><i class="ion-social-facebook"></i></a></li>
                              </ul>
                           </div>
                           <!--Off Canvas Widget Social End-->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Mobile Navigation End Here -->
         </div>
      </div>
      <?php echo view('frontend/component/desktop-menu', $test) ?>
   </header>
   <div class="cart-overlay" id="cart-overlay">
      <div class="cart-overlay-close inactive"></div>
      <div class="cart-overlay-content">
         <!--======= close icon =======-->
         <span class="close-icon" id="cart-close-icon"> 
            <a href="javascript:void(0)">
               <i class="ion-android-close"></i> 
            </a>
         </span>
         <div class="offcanvas-cart-content-container">
            <h3 class="cart-title">Giỏ hàng</h3>
            

            <div class="cart-product-wrapper" style="display: block;"  id="cart-product"></div>

         </div>
      </div>
   </div>
   <style>
      #block-72f10306-9a67-48ef-ac2b-cb8b155cc235 .mega_banner_content .title1 {
         color: #ffffff;
      }

      #block-72f10306-9a67-48ef-ac2b-cb8b155cc235 .mega_banner_content .title2 {
         color: #ffffff;
      }

      #block-72f10306-9a67-48ef-ac2b-cb8b155cc235 .mega_banner_content .content {
         color: #ffffff;
      }

      #block-72f10306-9a67-48ef-ac2b-cb8b155cc235 .mega_banner_content .banner__btn {
         color: #ffffff;
      }

      #block-72f10306-9a67-48ef-ac2b-cb8b155cc235 .product_menu_title {
         color: #333333;
      }

      #block-72f10306-9a67-48ef-ac2b-cb8b155cc235 .menu_sin_product .product-title a {
         color: #333333;
      }

      #block-72f10306-9a67-48ef-ac2b-cb8b155cc235 .menu_sin_product .product__price span {
         color: #333333;
      }

      #block-72f10306-9a67-48ef-ac2b-cb8b155cc235 .menu_sin_product .product__price .main-price.discounted span {
         color: #aaaaaa;
      }

      #block-72f10306-9a67-48ef-ac2b-cb8b155cc235 .menu_product_contain .owl-nav>div {
         color: #333333;
         background: #ffffff;
      }

      #section-header_index_new .order-online-text {
         color: #ffffff;
      }

      #section-header_index_new .order-online-text a {
         color: #ffffff;
         border-color: #ffffff;
      }

      #section-header_index_new .change-dropdown .currency-trigger {
         color: #7e7e7e;
      }

      #section-header_index_new .change-dropdown .currency-trigger:hover {
         color: #333333;
      }

      #section-header_index_new .change-dropdown ul {
         background-color: #ffffff;
      }

      #section-header_index_new.change-dropdown ul li a:not([href]):not([tabindex]),
      #section-header_index_new .change-dropdown ul li a {
         color: #7e7e7e;
      }

      #section-header_index_new .change-dropdown ul li a:not([href]):not([tabindex]):hover,
      #section-header_index_new .change-dropdown ul li a:hover {
         color: #333333;
      }

      #section-header_index_new .change-dropdown>a {
         color: #7e7e7e;
      }

      #section-header_index_new .change-dropdown>a:hover {
         color: #333333;
      }

      #section-header_index_new .header-top-container .header-top-right .top-social-icons ul li a {
         color: #ffffff;
      }

      #section-header_index_new .header-top .header-separator {
         color: #ffffff;
      }

      /* Header topbar new color support */
      #section-header_index_new .topbar_account_info>a {
         color: #ffffff;
      }

      #section-header_index_new .topbar_account_info>a:hover {
         color: #d3122a;
      }

      #section-header_index_new .topbar_account_info {
         color: #ffffff;
      }

      #section-header_index_new .header-top-container .header-top-right .top-social-icons ul li a:hover {
         color: #d40000;
      }

      .theme-logo img {
         max-width: 300px;
      }
   </style>
   <!--======= offcanvas mobile menu =======-->
   <div class="topbar_offcanvas_overlay"></div>
   <div class="offcanvas-mobile-menu" id="mobile_topbar_menu_overlay">
      <a href="javascript:void(0)" class="offcanvas-menu-close" id="mobile_topbar_close_trigger"><i class="ti-close"></i> </a>
      <div class="offcanvas-wrapper">
         <div class="offcanvas-inner-content">
            <div class="header-top-left d-flex justify-content-center ">
               <div class="currency-change change-dropdown ">
                  
               </div>
            </div>
            <div class="topbar_account_info text-center mt-20">
                  <?php
                     $session = session();
                     // print_r($session);die();
                     $item = $session->get('customer_isLoggedIn');
                     if ($item) {
                        echo '
                           Xin chào <a href="' . base_url() . '/khach-hang/tai-khoan">' . $session->get('customer_name') . '</a> / <a href="' . base_url() . '/khach-hang/dang-xuat">Đăng xuất</a>
                           ';
                     } else {
                        echo '<a href="' . base_url() . '/khach-hang/dang-nhap">Đăng nhập</a> hoặc <a href="' . base_url() . '/khach-hang/dang-ky">đăng ký</a>';
                     }
                  ?>
            </div>
            <div class="order-online-text mt-20 text-center"><?= $base['ui']->text_top_header ?></div>
         </div>
      </div>
   </div>
   <div class="search-overlay" id="search-overlay">
      <span class="close-icon search-close-icon"><a href="javascript:void(0)" id="search-close-icon"> <i class="ti-close"></i></a> </span>
      <div class="search-overlay-content">
         <div class="input-box">
            <form action="/search" method="get" class="input-group search-bar" role="search" style="position: relative;">
               <input class="input__search" type="search" name="s" value="" placeholder="Tìm kiếm trong shop hoặc bài viết" aria-label="Tìm kiếm trong shop hoặc bài viết" autocomplete="off"> 
               <button type="submit">
                  <i class="ion-ios-search-strong"></i> 
                </button>
               <ul class="search-results home-two" style="position: absolute; left: 0px; top: 63px; display: none;"></ul>
            </form>
         </div>
      </div>
   </div>
   <style>
      @media only screen and (max-width: 480px) {
         .logo-with-offcanvas {
            max-width: 180px;
         }
      }

      @media only screen and (max-width: 370px) {
         .header-right-icons.justify-content-end {
            margin-right: 45px;
            justify-content: flex-start !important;
         }
      }
   </style>

</div>




