<div class="single-widget-product">
    <div class="single-widget-product__image"> 
        <a href="<?= base_url().'/san-pham/'.$product->slug?>">
            <img id="bannerImage-29136599482427" class="lazyautosizes lazyloaded" data-src="<?= base_url().'/public/uploads/product/'.$product->img?>" data-sizes="auto" alt="<?= $product->name?>" sizes="93px" src="<?= base_url().'/public/uploads/product/'.$product->img?>">
        </a>
        </div>
        <div class="single-widget-product__content">
            <h3 class="title">
                <a href="<?= base_url().'/san-pham/'.$product->slug?>"><?= $product->name ?></a>
            </h3>
            <div class="price">
                <span class="discounted-price">
                    <span class="money">
                    <?php 
                     $now = date('Y-m-d');
                     if($product->qty>0){
                        if (!$product->show_price) {
                           echo 'Giá liên hệ';
                        } elseif($now > $product->from_date && $now < $product->to_date){
                           if($product->ratio != 0){
                              $price = $product->price - ($product->price/100)*$product->ratio;
                              echo '<del class="text-dark">'.price_format($product->price) .' đ</del> &nbsp;<span class="text-danger">'.price_format($price).' đ</span>';
                           }elseif($product->money != 0){
                              $price = $product->price - $product->money;
                              echo '<del class="text-dark">'.price_format($product->price) .' đ</del> &nbsp;<span class="text-danger">'.price_format($price).' đ</span>';
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
            </div>
        </div>
    </div>
