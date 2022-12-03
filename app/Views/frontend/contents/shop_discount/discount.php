<?php
   echo view('frontend/component/breadcrum', $test);
?>
<main>
   <div id="shopify-section-template--14488879333435__main" class="shopify-section">
      <div class="create-custom-page">
         <div class="container">

                           <div class="single-slider-post__image mb-30">
                              <a href="<?= base_url().'/khuyen-mai/'.$discount->slug?>"> 
                                 <img id="bannerImage-11720491067" class="lazyautosizes lazyloaded" 
                                 src="<?= base_url().'/public/uploads/discount/'.$discount->banner?>" 
                                 data-src="<?= base_url().'/public/uploads/discount/'.$discount->banner?>"
                                 data-sizes="auto" alt="" sizes="690px">
                              </a> 
                           </div>

            <p class="text-danger"><?php 
            $now = date('Y-m-d');
            if($now > $discount->to_date){
               echo 'Khuyến mại đã kết thúc';
            }elseif($now < $discount->from_date){
               echo 'Khuyến mại sắp bắt đầu';
            }else{
               echo 'Chương trình đang diễn ra';
            }
            ?></p>
            <h2><?= $discount->title ?></h2>
            <?= $discount->description ?></br>
         </div>
      </div>
      <div class="fb-comments" data-href="<?= current_url()?>" data-width="" data-numposts="5"></div>
   </div>
</main>