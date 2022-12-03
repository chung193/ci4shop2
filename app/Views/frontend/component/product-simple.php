                <?php 
                    //print_r($product);
                    $product = (object)$product;
                ?>
                
                <div class="search-item">
                     <div class="search-item-image">
                        <a href="<?= base_url().'/san-pham/'.$product->slug?>">
                        <img src="<?= base_url().'/public/uploads/product/'.$product->img?>" alt="<?= $product->name ?>"></a>
                     </div>
                     <div class="search-item-content">
                        <h4>
                            <a href="<?= base_url().'/san-pham/'.$product->slug?>">
                                <?= search_text($product->name, $_GET['s']) ?>
                            </a>
                        </h4>
                        <div class="search-price">
                           <span><span class="money">
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
                           </span></span>
                           <!-- <span class="compare-price"><del><span class="money" data-currency-usd="$100.00">$100.00</span></del></span> -->
                        </div>
                        <p><?= $product->summary?></p>
                     </div>
                  </div>