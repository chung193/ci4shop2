<div id="shopify-section-template--14488879071291__16272984271dd9cdb1" class="shopify-section">
   <div class="slider-area" id="section-template--14488879071291__16272984271dd9cdb1" data-section="heroOwlSlider">
      <div class="hero-slider-wrapper nav--two owl-carousel owl-loaded owl-drag" data-owl-carousel="{&quot;margin&quot;:0,&quot;loop&quot;: true,&quot;nav&quot;:true,&quot;autoplay&quot;: false,&quot;autoplayTimeout&quot;: 5000,&quot;smartSpeed&quot;:1000,&quot;dots&quot;: false,&quot;items&quot;:1,&quot;navText&quot;: [&quot;<i class='ti-angle-left'></i>&quot;,&quot;<i class='ti-angle-right'></i>&quot;],&quot;responsive&quot;:{ &quot;540&quot;:{ &quot;items&quot;: 1 }, &quot;991&quot;:{ &quot;items&quot;: 1 }, &quot;1199&quot;:{ &quot;items&quot;: 1 }}}">
         

               <?php 
                  foreach($base['slider'] as $val){
               ?>
                  <div class="hero-single-slider data-img" id="block-3d8597a4-2e34-4882-aab3-b041f9e10ddc">
                     <div class="slider__image_ratio img_rel d-none d-md-block" style="padding-top:41.66666666666667%;">
                        <img id="Image-21416481816635" class="responsive-image__image lazyautosizes lazyloaded" 
                        data-widths="[180,360,540,720,900,1080,1296,1512,1728,1920]" data-aspectratio="2.4" data-sizes="auto" tabindex="-1" alt="" 
                        data-srcset="<?= base_url().'/public/uploads/slider/'.$val['img']?>">
                        <noscript><img class="" src="<?= base_url().'/public/uploads/slider/'.$val['img']?>" alt=""></noscript>
                     </div>
                     <div class="slider__image_ratio img_rel d-block d-md-none" style="padding-top:41.66666666666667%;">
                        <img id="Image-21416481816635" class="responsive-image__image lazyload " 
                        data-src="<?= base_url().'/public/uploads/slider/'.$val['img']?>" data-widths="[180,360,540,720,900,1080,1296,1512,1728,1920]" data-aspectratio="2.4" data-sizes="auto" tabindex="-1" alt="">
                        <noscript><img class="" src="<?= base_url().'/public/uploads/slider/'.$val['img']?>" alt=""></noscript>
                     </div>
                     <div class="slide_content__position">
                        <div class="row justify-content-start ">
                           <div class="hero-slider-content text-left ">
                              <h5><?= $val['main_title']?></h5>
                              <div class="main-title">
                                 <h2><?= $val['sub_title']?></h2>
                              </div>
                              <a href="<?= $val['url']?>" class="aplee-button aplee-button--medium">Xem ngay</a>
                           </div>
                        </div>
                     </div>
                     <style>
                        #block-3d8597a4-2e34-4882-aab3-b041f9e10ddc .hero-slider-content > h5 {
                        color: #333333;
                        font-family: sans-serif;
                        font-weight: 400;
                        font-style: normal;
                        }
                        #block-3d8597a4-2e34-4882-aab3-b041f9e10ddc
                        .hero-slider-content
                        .main-title
                        h2 {
                        color: #333333;
                        font-family: sans-serif;
                        font-weight: 400;
                        font-style: normal;
                        }
                        #block-3d8597a4-2e34-4882-aab3-b041f9e10ddc
                        .hero-slider-content
                        a.aplee-button {
                        background: #333333;
                        border-color: #333333;
                        color: #ffffff !important;
                        }
                        #block-3d8597a4-2e34-4882-aab3-b041f9e10ddc
                        .hero-slider-content
                        a.aplee-button:hover {
                        background: transparent;
                        border-color: #333333;
                        color: #333333 !important;
                        }

                     </style>
                  </div>
               <?php 
                  }
               ?>
         <!-- <div class="owl-nav">
            <div class="owl-prev"><i class="ti-angle-left"></i></div>
            <div class="owl-next"><i class="ti-angle-right"></i></div>
         </div> -->

         <!-- <div class="owl-dots disabled"></div> -->

      </div>

      <!-- <noscript>
         <div class="hero-single-slider" style="background-image: url(' https://via.placeholder.com/1920x710');" id="block-"></div>
      </noscript> -->

   </div>
   <style>#section-template--14488879071291__16272984271dd9cdb1 .hero-slider-wrapper.owl-carousel .owl-nav > div{background:#ffffff;color:#999999;}#section-template--14488879071291__16272984271dd9cdb1 .hero-slider-wrapper.owl-carousel .owl-nav > div:hover{background:#222222;color:#ffffff;}#section-template--14488879071291__16272984271dd9cdb1 .hero-slider-wrapper.owl-carousel .owl-dots .owl-dot{background:#999999;}#section-template--14488879071291__16272984271dd9cdb1 .hero-slider-wrapper.owl-carousel .owl-dots .owl-dot.active{border-color:#333333;background:transparent;}#section-template--14488879071291__16272984271dd9cdb1 .hero-single-slider::before{background:#ffffff;opacity:0;}</style>
</div>