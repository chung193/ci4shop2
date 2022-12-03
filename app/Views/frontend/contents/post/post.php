<?php 
    echo view('frontend/component/breadcrum', $test);
?>
<main>
   <div id="shopify-section-template--14488878907451__main" class="shopify-section">
      <div class="blog-page-wrapper mb-100 mt-100 ">
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
                        <div class="blog-sidebar-banner"><a href="/products/apple-ipad-pro-12-9-inch"><img class=" ls-is-cached lazyloaded" data-src="//cdn.shopify.com/s/files/1/0023/4104/4283/files/fdfdfdf_grande.jpg?v=1643623055" alt="" src="//cdn.shopify.com/s/files/1/0023/4104/4283/files/fdfdfdf_grande.jpg?v=1643623055"> </a> </div>
                     </div> -->
                  </div>
               </div>
               <div class=" col-lg-9 order-1 order-lg-2 mb-md-70 mb-sm-70">
                  <div class="row">
                     <div class="col-md-12 mb-40">
                        <div class="single-slider-post single-slider-post--sticky pb-30">
                           <!--======= image =======-->
                           <div class="single-slider-post__image single-slider-post--sticky__image mb-30">
                              <img id="bannerImage-11720458299" 
                              class="lazyautosizes lazyloaded" 
                              data-src="//cdn.shopify.com/s/files/1/0023/4104/4283/articles/b5.jpg?v=1643792810" 
                              data-sizes="auto" alt="" sizes="690px" 
                              src="<?= base_url().'/public/uploads/post/'.$post->img ?>">
                           </div>
                           <!--======= End of image =======--> <!--======= content =======--> 
                           <div class="single-slider-post__content single-slider-post--sticky__content">
                              <h2 class="post-title"><?= $post->title ?></h2>
                              <div class="post-info d-flex flex-wrap align-items-center mb-50">
                                 <div class="post-user pr-30">
                                    <i class="ion-android-person"></i>
                                    <p><span></span> Admin</p>
                                 </div>
                                 <div class="post-date mb-0 pr-30">
                                    <i class="ion-android-calendar"></i>
                                    <p><?= formatDate($post->createdat) ?></p>
                                 </div>
                                 <div class="post-comment pr-30"><i class="ion-ios-chatbubble-outline"></i><a href="/blogs/news/the-standard-chunk-of-lorem-ipsum-used-since-1#comments"> 0 comments</a> </div>
                              </div>
                              <div class="single-blog-post-section">
                                 <?= $post->content ?>
                              </div>
                              <!--======= End of single blog post section =======-->
                              <div class="row mt-30 align-items-center">
                                 <div class="col-md-6 text-center text-md-left mb-sm-15">
                                    <div class="post-tags">
                                       <!-- <i class="ion-ios-pricetags"></i>  -->
                                       <!-- <ul class="tag-list">
                                          <li> <a href="/blogs/news/tagged/bestselling"> bestselling,</a> <a href="/blogs/news/tagged/chair"> chair,</a> <a href="/blogs/news/tagged/collection"> collection,</a> <a href="/blogs/news/tagged/door"> door,</a> <a href="/blogs/news/tagged/fashion"> fashion,</a> <a href="/blogs/news/tagged/men"> men,</a> <a href="/blogs/news/tagged/style"> style,</a> <a href="/blogs/news/tagged/table"> table,</a> <a href="/blogs/news/tagged/waredrop"> waredrop,</a> <a href="/blogs/news/tagged/women"> women</a> </li>
                                       </ul> -->
                                    </div>
                                 </div>
                                 <div class="col-md-6 text-center text-md-right ">
                                    <div class="post-share">
                                       <link href="//cdn.shopify.com/s/global/social/social-icons.css" rel="stylesheet" type="text/css" media="all">
                                       <style>.social-links a { display: -moz-inline-stack; display: inline-block; zoom: 1; *display: inline; margin: 0; padding: 0.05em; color: #555!important; font-size: 24px!important; } </style>
                                       <span>Chia sẻ bài viết:</span> 
                                       <ul class="action-button share-button " data-permalink="https://bigon-6.myshopify.com/blogs/news/the-standard-chunk-of-lorem-ipsum-used-since-1">
                                          <li>
                                             <a target="_blank" href="//www.facebook.com/sharer.php?u=<?= base_url().'/bai-viet/'.$post->slug?>" title="Chia sẻ lên Facebook" tabindex="0">
                                                <i class="fa fa-facebook"></i>
                                             </a> 
                                          </li>
                                          <li>
                                             <a target="_blank" href="//twitter.com/share?text=<?= $post->title?>&amp;url=<?= base_url().'/bai-viet/'.$post->slug?>;source=webclient" title="Chia sẻ lên Twitter" tabindex="0">
                                                <i class="fa fa-twitter"></i>
                                             </a> 
                                          </li>

                                       </ul>
                                    </div>
                                 </div>
                              </div>
                              <div class="article-next-previous mt-30">
                                 <hr>

                                 <p class="clearfix">
                                    <?php 
                                       $i = 0;
                                       if(count($recent_post) > 2){
                                          foreach($recent_post as $val){
                                             if($i < 2){
                                                if($i == 0){
                                                   $old = $val;
                                                }
                                                if($i == 1){
                                                   $new = $val;
                                                }
                                             }
                                             $i++;
                                          }
                                       }
                                       if(!empty($old)){
                                          echo '<span class="left"> ← <a href="'.base_url().'/bai-viet/'.$old['slug'].'" title="'.$old['title'].'">Cũ hơn</a></span>
                                          &nbsp;&nbsp;&nbsp;';
                                       }
                                       if(!empty($new)){
                                          echo '<span class="right"> <a href="'.base_url().'/bai-viet/'.$new['slug'].'" title="'.$new['title'].'">Mới hơn</a> →</span>
                                         ';
                                       }
                                    ?>
                                 </p>

                              </div>
                           </div>
                           <!--======= End of content =======-->
                        </div>
                     </div>
                     <div class="col-lg-12 mb-40">
                        <div id="comments" class="comment-success"></div>
                        <!--======= End of commenter info =======--> 
                     </div>


                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</main>