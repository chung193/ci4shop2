                
                <?php 
                $i = 1;
                    foreach($base['banner'] as $val){
                ?>
                <div id="block-<?= $i?>" class="col-lg-4 col-md-6 mb-30">
                  <div class="single-banner single-banner--hoverborder">
                     <a class="img_rel" href="" style="padding-top:57.42677824267782%;">
                        <img id="Image-510499094587" 
                            class="responsive-image__image lazyautosizes lazyloaded" 
                            data-widths="[180,360,540,720,900,956]" 
                            data-aspectratio="1.7413479052823315" 
                            data-sizes="auto" tabindex="-1" alt="" 
                            data-srcset="<?= base_url().'/public/uploads/banner/'.$val['img']?>" 
                            sizes="290px" 
                            srcset="<?= base_url().'/public/uploads/banner/'.$val['img']?>">
                        <noscript>
                            <img class="" src="<?= base_url().'/public/uploads/banner/'.$val['img']?>" alt="">
                        </noscript>
                     </a>
                     <div class="banner-content banner-content--black-left">
                        <p> 
                            <span class="big-text"><?= $val['text_main']?></span> 
                            <span class="small-text d-block"><?= $val['text_sub']?></span></p>
                     </div>
                  </div>
               </div>

               <?php $i++; }?>

               
            <style>#block-1 .single-banner--hoverborder .banner-content span.big-text {color: #ffffff;} #block-1 .single-banner--hoverborder .banner-content span.small-text {color: #ffffff;}</style>
            <style>#block-2 .single-banner--hoverborder .banner-content span.big-text {color: #ffffff;} ##block-2 .single-banner--hoverborder .banner-content span.small-text {color: #ffffff;}</style>
            <style>#block-3 .single-banner--hoverborder .banner-content span.big-text {color: #ffffff;} #block-3 .single-banner--hoverborder .banner-content span.small-text {color: #ffffff;}</style>
