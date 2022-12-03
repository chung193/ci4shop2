<div id="shopify-section-template--14537261547579__16438769245f2e10a3" class="shopify-section">
      
    <section class="category_menu_slider_banner mt-30 mt-sm-0 mt-md-0" data-section="heroOwlSlider" id="section-template--14537261547579__16438769245f2e10a3">
         <div class="container">
            <div class="row">
               <div class="col-lg-3">
                  <div class="caetgory_menu_container">
                     <div class="category_menu_container_lg d-none d-lg-block">
                        <div class="categories_title" id="categories_title_trigger">
                           <h3>Danh mục</h3>
                        </div>
                        <div class="categories_menu_inner" id="categories_menu_collapse">
                           <ul>
                            <?php foreach($base['menu'] as $val){
                                echo '<li><a href="'.base_url().'/danh-muc-san-pham/'.$val['slug'].'">'.$val['name'].'</a></li>';
                            }?>
                           </ul>
                        </div>
                     </div>
                     <div class="category_menu_container_sm d-block d-lg-none mb-sm-30">
                        <div class="categories_title" id="category_mobile_trigger">
                           <h3>Danh mục</h3>
                        </div>
                        <div class="mobile_category">
                           <div class="offcanvas_overlay"></div>
                           <div class="offcanvas-mobile-menu" id="category-mobile-menu-overlay">
                              <a href="javascript:void(0)" class="offcanvas-menu-close" id="category-mobile-menu-close-trigger"><i class="ti-close"></i> </a> 
                              <div class="offcanvas-wrapper">
                                 <div class="offcanvas-inner-content">
                                    <nav class="offcanvas-navigation" id="offcanvas__category--menu">
                                       <ul>
                                       <?php foreach($base['menu'] as $val){
                                            echo '<li><a href="'.base_url().'/danh-muc-san-pham/'.$val['slug'].'">'.$val['name'].'</a></li>';
                                        }?>
                                       </ul>
                                    </nav>
                                 </div>
                              </div>
                           </div>
                           <script> $("#category_mobile_trigger").on('click', function(){$("#category-mobile-menu-overlay,.offcanvas_overlay").addClass("active"); }); $("#category-mobile-menu-close-trigger,.offcanvas_overlay").on('click', function(){$("#category-mobile-menu-overlay,.offcanvas_overlay").removeClass("active"); });/*==============================================offcanvas mobile menu==============================================*/ var $offCanvasNav = $('#offcanvas__category--menu'), $offCanvasNavSubMenu = $offCanvasNav.find('.sub-cat-menu'); /*Add Toggle Button With Off Canvas Sub Menu*/ $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i></i></span>'); /*Close Off Canvas Sub Menu*/ $offCanvasNavSubMenu.slideUp(); /*Category Sub Menu Toggle*/ $offCanvasNav.on('click', 'li a, li .menu-expand', function(e) {var $this = $(this);if ( ($this.parent().attr('class').match(/\b(cat-item-has-children)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) { e.preventDefault(); if ($this.siblings('ul:visible').length){$this.parent('li').removeClass('active');$this.siblings('ul').slideUp(); } else {$this.parent('li').addClass('active');$this.closest('li').siblings('li').removeClass('active').find('li').removeClass('active');$this.closest('li').siblings('li').find('ul:visible').slideUp();$this.siblings('ul').slideDown(); }} });</script>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-9">

                  <div class="slider_wrapper ct_menu_sl owl-carousel owl-loaded owl-drag" data-owl-carousel="{&quot;margin&quot;:0,&quot;loop&quot;: true,&quot;nav&quot;: true, &quot;autoplay&quot;: false,&quot;autoplayTimeout&quot;: 5000,&quot;dots&quot;: false,&quot;items&quot;:1, &quot;navText&quot;: [&quot;<i class='ti-arrow-left'></i>Prev&quot;,&quot;Next<i class='ti-arrow-right'></i>&quot;] }">
                     <?php foreach($base['slider'] as $val){ ?>
                        <div class="single_slider " id="block-1643876923aa6bea79-0">
                                 <div class="slider_thumb_bg" 
                                 style="background-image: url('<?= base_url().'/public/uploads/slider/'.$val['img']?>');"></div>
                                 <div class="slider__content">
                                    <h5><?= $val['sub_title']?></h5>
                                    <h1><?= $val['main_title']?></h1>
                                    <a class="astor-button astor-button--small text-size-2" href="<?= $val['url']?>">Mua sắm ngay</a>
                                 </div>
                                 <style> 
                                 
                                </style>
                        </div>
                    <?php } ?>

                    

               </div>
            </div>
         </div>
      </section>

      <style>
        .ct_menu_sl #block-1643876923aa6bea79-0 .slider__content h5 {
            color: #333333;
        }
        .ct_menu_sl #block-1643876923aa6bea79-0 .slider__content h1 {
            color: #333333;
        }
        .ct_menu_sl #block-1643876923aa6bea79-0 .slider__content a.astor-button {
            background: #333333;
            border-color: #333333;
            color: #ffffff !important;
        }
        .ct_menu_sl #block-1643876923aa6bea79-0 .slider__content a.astor-button:hover {
            background: transparent;
            border-color: #333333;
            color: #333333 !important;
        }

        #section-template--14537261547579__16438769245f2e10a3 .slide-overlay::before {
            background: #000000;
            opacity: 0.2;
        }
        #section-template--14537261547579__16438769245f2e10a3
        .slider_wrapper.ct_menu_sl
        .owl-nav
        > div {
            color: #333333;
        }
        #section-template--14537261547579__16438769245f2e10a3
        .slider_wrapper.ct_menu_sl
        .owl-dots
        .owl-dot {
            background: #999999;
        }
        #section-template--14537261547579__16438769245f2e10a3
        .slider_wrapper.ct_menu_sl.owl-carousel
        .owl-dots
        .owl-dot.active {
            border-color: #333333;
            background: transparent;
        }

      </style>
   </div>