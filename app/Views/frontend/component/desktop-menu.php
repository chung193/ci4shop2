<div class="header-bottom header_index_new header-sticky pt-md-20 pb-md-20 d-none d-lg-block" style="">
         <div class=" container wide ">
            <div class="header_new_index_container">
               <div class="site-main-nav">
                  <nav class="site-nav center-menu">
                     <ul>

                        <li><a href="<?= base_url()?>">Trang chủ</a></li>
                        <?php 
                            foreach($base['menu'] as $val){
                                if($val['parent_id'] == 0){
                                    foreach($base['menu'] as $row){
                                        $flag = false;
                                        if($row['parent_id'] == $val['id']){
                                            $flag = true;
                                            break;
                                        }
                                    }
                                    if($flag){
                                        echo '<li class="menu-item-has-children ">
                                            <a href="'.base_url().'/danh-muc-san-pham/'.$val['slug'].'">'.$val['name'].'</a>
                                            <ul class="sub-menu single-column-menu">';
                                        
                                        foreach($base['menu'] as $temp){
                                            if($temp['parent_id'] == $val['id']){
                                                echo '<li class="drop_item"><a href="'.base_url().'/danh-muc-san-pham/'.$temp['slug'].'">'.$temp['name'].'</a></li>';
                                            }
                                        }
                                        echo '</ul>
                                        </li>';
                                    }else{
                                        echo '<li class="drop_item"><a href="'.base_url().'/danh-muc-san-pham/'.$val['slug'].'">'.$val['name'].'</a></li>';
                                    }
                                }
                            }
                        ?>
                        <!-- <li class="menu-item-has-children ">
                           <a href="/collections/macbook">MAC</a>
                           <ul class="sub-menu single-column-menu">
                              <li class="drop_item"><a href="/products/macbook-air-with-m1">iMac</a></li>
                              <li class="drop_item"><a href="/products/macbook-air-with-m1">Mac Mini</a></li>
                              <li class="drop_item"><a href="/products/macbook-air-with-m1">Macbook</a></li>
                              <li class="drop_item"><a href="/products/macbook-air-with-m1">Macbook Air</a></li>
                              <li class="drop_item"><a href="/products/macbook-pro-13-with-m1">Macbook Pro</a></li>
                           </ul>
                        </li> -->
                        <li><a href="<?= base_url() ?>/gioi-thieu">Giới thiệu</a></li>
                        <li><a href="<?= base_url() ?>/lien-he">Liên hệ</a></li>
                     </ul>
                     <script> /* Mega Menu */ $('.mega_dropdown').parent('ul').addClass('mega-menu'); $('.drop_item').parent('ul').addClass('single-column-menu'); $('.multi_item').parent('ul').addClass('single-column-menu ');</script> 
                  </nav>
               </div>
            </div>
         </div>
      </div>

