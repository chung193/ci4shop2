<?php 
   echo view('frontend/component/breadcrum', $test);
?>
<main>
   <div id="shopify-section-template--14488878940219__main-blog" class="shopify-section">
      <div class="blog-page-wrapper mb-100 mb-sm-50 mb-md-60 mt-100 mt-xs-80">
         <div class=" container ">
            <div class="row ">
               <div class="col-lg-3 order-2 order-lg-1">
                  <div class="page-sidebar">
                     <!--======= single sidebar widget =======--> 
                     <!-- <div class="single-sidebar-widget mb-40">
                        <div class="search-widget">
                           <form action="/search" method="get" role="search" style="position: relative;">
                              <input type="hidden" name="type" value="article"><input type="search" name="q" value="" placeholder="Search our store" aria-label="Search our store" autocomplete="off"><button type="submit"><i class="ion-android-search"></i> </button> 
                              <ul class="search-results home-two" style="position: absolute; left: 0px; top: 38px; display: none;"></ul>
                           </form>
                        </div>
                     </div> -->
                     <div class="single-sidebar-widget mb-40">
                        <h2 class="single-sidebar-widget--title">Bài viết gần đây</h2>
                        <div class="widget-post-wrapper">
                           <?php foreach($recent_post as $val){
                           ?>
                           <div class="single-widget-post">
                              <div class="image"> <a href="<?= $val['title']?>"><img src="<?= base_url().'/public/uploads/post/'.$val['img']?>" alt=""></a></div>
                              <div class="content">
                                 <h3 class="widget-post-title"><a href="<?= base_url().'/bai-viet/'.$val['slug']?>"><?= $val['title']?></a></h3>
                                 <p class="widget-post-date"><?= $val['createdat']?></p>
                              </div>
                           </div>
                           <?php } ?>
                        </div>
                        <!--======= End of widget post wrapper =======--> 
                     </div>

                     <!-- <div class="single-sidebar-widget mb-40">
                        <h2 class="single-sidebar-widget--title">Tags</h2>
                        <div class="tag-container"> <a href="/blogs/news/tagged/bestselling" class="">bestselling</a><a href="/blogs/news/tagged/chair" class="">chair</a><a href="/blogs/news/tagged/collection" class="">collection</a><a href="/blogs/news/tagged/door" class="">door</a><a href="/blogs/news/tagged/dress" class="">dress</a><a href="/blogs/news/tagged/fashion" class="">fashion</a><a href="/blogs/news/tagged/men" class="">men</a><a href="/blogs/news/tagged/style" class="">style</a><a href="/blogs/news/tagged/table" class="">table</a><a href="/blogs/news/tagged/waredrop" class="">waredrop</a> </div>
                     </div>
                     <div class="single-sidebar-widget mb-40">
                        <div class="blog-sidebar-banner"><a href="/products/new-watch-series-black"><img class=" ls-is-cached lazyloaded" data-src="//cdn.shopify.com/s/files/1/0023/4104/4283/files/fdfdfdf_grande.jpg?v=1643623055" alt="" src="//cdn.shopify.com/s/files/1/0023/4104/4283/files/fdfdfdf_grande.jpg?v=1643623055"> </a> </div>
                     </div> -->
                     
                  </div>
               </div>

               <div class=" col-lg-9 order-1 order-lg-2 mb-md-70 mb-sm-70">
                  <div class="row ">

                     <?php 
                        foreach($post as $val){
                     ?>
                     <div class="col-lg-12 col-md-12 col-sm-6 col-12  mb-60">
                        <div class="single-slider-post">
                           <div class="single-slider-post__image mb-30"><a href="<?= base_url().'/khuyen-mai/'.$val['slug']?>"> 
                           <img id="bannerImage-11720491067" class="lazyautosizes lazyloaded" 
                           src="<?= base_url().'/public/uploads/post/'.$val['img']?>" data-src="<?= base_url().'/public/uploads/post/'.$val['img']?>" data-sizes="auto" alt="" sizes="690px"></a> </div>
                           <div class="single-slider-post__content">
                              <div class="post-info d-flex flex-wrap align-items-center mb-10">
                                 <div class="post-user pr-30">
                                    <i class="ion-android-person"></i>
                                    <p><span>Bởi :</span> Admin</p>
                                 </div>
                                 <div class="post-date mb-0 pr-30">
                                    <i class="ion-android-calendar"></i>
                                    <p><?= formatDate($val['createdat']) ?> </p>
                                 </div>
                                 <!-- <div class="post-comment pr-30">
                                    <i class="ion-ios-chatbubble-outline"></i>
                                    <a href="/blogs/news/temporibus-autem-quibusdam-1#comments"> 2 comments</a> 
                                 </div> -->
                              </div>
                              <h2 class="post-title"><a href="<?= base_url().'/bai-viet/'.$val['slug'] ?> "><?= $val['title'] ?> </a></h2>
                              <p class="post-excerpt"><?= $val['description'] ?> </p>
                              <a class="blog-readmore-btn" href="<?= base_url().'/bai-viet/'.$val['slug'] ?>">Xem thêm</a> 
                           </div>
                        </div>
                     </div>

                     <?php } ?>

                  </div>

                  <div class="row">
                     <div class="col-lg-12"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>