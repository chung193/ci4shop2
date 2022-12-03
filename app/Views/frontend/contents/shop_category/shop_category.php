<?php
echo view('frontend/component/breadcrum_category', $test);
?>
<style>
   .status::after,
   .price::after {
      display: none
   }

   .item {
      width: 210px
   }
</style>
<main>
   <div id="shopify-section-template--14537261482043__main" class="shopify-section">
      <div class="shop-page-wrapper" data-section="collectionTemplate">
         <div class="shop-page-header">
            <div class=" container ">
               <div class="row align-items-center">
                  <div class="col-6 col-md-3 col-xl-3 col-lg-3 col-sm-2">
                     <!--======= filter icons =======-->
                     <div class="filter-icons">
                        <div class="single-icon grid-icons">
                           <a data-target="five-column" class="active" href="javascript:void(0)"><i class="ti-layout-grid4-alt"></i></a>
                           <!-- <a data-target="four-column" href="javascript:void(0)"  ><i class="ti-layout-grid3-alt"></i></a> 
                           <a data-target="three-column" href="javascript:void(0)" ><i class="ti-layout-grid2-alt"></i></a> 
                           <a data-target="grid-list" href="javascript:void(0)" ><i class="ti-view-list-alt"></i></a> -->
                        </div>
                     </div>
                     <!--======= End of filter icons =======-->
                  </div>
                  <div class="col-6 col-xl-9 col-lg-9 col-md-9 col-sm-10">
                     <!--======= End of grid icons =======-->

                     <div class="shopbar_right_info">
                        <!-- <div class="showing_result d-none d-lg-block">Hiển thị 1 - 3 của 3 kết quả </div> -->

                        <div class="single-icon filter-dropdown">
                           <label for="SortBy">Sắp xếp theo: </label>
                           <select name="SortBy" id="selectEl">
                              <option value="<?= current_url() ?>">Sắp xếp theo</option>
                              <option value="<?= current_url() . '?order=asc' ?>">Giá, thấp đến cao</option>
                              <option value="<?= current_url() . '?order=desc' ?>">Giá, cao đến thấp</option>
                           </select>
                        </div>
                        <!--======= advance filter icon =======-->
                        <div class="single-icon advance-filter-icon d-lg-none">
                           <a id="sidebar-filter-active-btn" href="javascript:void(0)"><i class="ion-android-funnel"></i> Lọc</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>



         <div class="shop-page-content mt-80 mt-md-70 mt-sm-65 mb-60 mb-md-30 mb-sm-25">
            <div class=" container ">
               <div class="row  ">
                  <div class="col-lg-3 mb-md-80 mb-sm-80">
                     <div class="page-sidebar">
                        <div class="single-sidebar-widget mb-40 widget-collapse outSideCollapse">
                           <h2 class="single-sidebar-widget--title">Danh mục</h2>
                           <div class="sidebar-body widget-collapse-hide">

                              <ul class="single-sidebar-widget--list single-sidebar-widget--list--category">
                                 <?php foreach ($base['menu'] as $val) {
                                    if (current_url() == base_url() . '/danh-muc-san-pham/' . $val['slug']) {
                                       echo '<li class="active"><a href="' . base_url() . '/danh-muc-san-pham/' . $val['slug'] . '">' . $val['name'] . ' <span>(' . $val['count'] . ')</span></a></li>';
                                    } else {
                                       echo '<li><a href="' . base_url() . '/danh-muc-san-pham/' . $val['slug'] . '">' . $val['name'] . ' <span>(' . $val['count'] . ')</span></a></li>';
                                    }
                                 } ?>

                              </ul>

                           </div>
                        </div>

                        <style>
                           .form-check-label {
                              margin-left: 25px;
                           }

                           .form-check {
                              padding-left: 0;
                           }

                           .form-check-input {
                              margin-top: 6px !important;
                           }
                        </style>

                        <div class="single-sidebar-widget mb-40 widget-collapse">
                           <h2 class="single-sidebar-widget--title status">Trạng thái </h2>
                           <div class="sidebar-body widget-collapse-hide">
                              <ul class="checkbox-container categories-list">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="filter-all" <?php
                                                                                                               if (!empty($_GET['status'])) {
                                                                                                                  if ($_GET['status'] == "all") {
                                                                                                                     echo 'checked';
                                                                                                                  }
                                                                                                               }
                                                                                                               ?>>
                                    <label class="form-check-label" for="flexCheckDefault">
                                       Tất cả
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="filter-availability" <?php
                                                                                                                        if (!empty($_GET['status'])) {
                                                                                                                           if ($_GET['status'] == "available") {
                                                                                                                              echo 'checked';
                                                                                                                           }
                                                                                                                        } ?>>
                                    <label class="form-check-label" for="flexCheckChecked">
                                       Chỉ sản phẩm còn hàng
                                    </label>
                                 </div>
                              </ul>
                           </div>
                        </div>



                        
                        </form>
                        <!-- <div class="single-sidebar-widge widget__banner">
                           <div class="sidebar-body" style="background: #f2f2f2;"><img src="//cdn.shopify.com/s/files/1/0023/4104/4283/files/fdfdfdf_grande.jpg?v=1643623055" alt=""> </div>
                        </div> -->
                     </div>
                     <style>
                        /* Before */
                        .single-filter-widget--list--color li a {
                           text-indent: -9999px;
                        }

                        .single-filter-widget--list--size li {
                           display: inline-block;
                           margin-right: 5px;
                        }

                        .single-filter-widget--list--size li:last-child {
                           margin-right: 0;
                        }

                        .single-filter-widget--list--size li a {
                           width: 30px;
                           height: 30px;
                           border: 1px solid #ccc;
                           text-align: center;
                           line-height: 30px;
                        }

                        .single-filter-widget--list li.active a {
                           border-color: #333;
                        }

                        .single-filter-widget--list li.active:before {
                           position: absolute;
                           content: "\f36e";
                           font-family: Ionicons;
                           top: -11px;
                           right: -3px;
                           font-size: 14px;
                           pointer-events: none;
                           color: #333;
                           z-index: 9;
                        }

                        .single-filter-widget--list li.active {
                           position: relative;
                        }
                     </style>
                  </div>
                  <div class="col-lg-9 col-12 ">
                     <div class="single-sidebar-widget selected-filter-value">
                        <ul class="filters__active_list">
                           <li class="active"> <a href="/collections/macbook" class="active-filters-clear">Clear all</a></li>
                        </ul>
                     </div>

                     <div class="row product-isotope shop-product-wrap ">

                        <?php
                        //print_r($product); die();
                        foreach ($product as $val) {
                           $data['product'] = (object)$val;
                           echo view('frontend/component/l-single-product', $data);
                        } ?>

                     </div>

                     <div class="row">
                        <div class="col-lg-12 text-center mt-30 mt-md-0 mt-sm-0">
                           <div class="theme-default-pagination text-center">
                              <nav class="pagination">
                                 <ul class="pagination">

                                    <?= $pager_links ?>

                                 </ul>
                              </nav>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
      <style>
         .widget-collapse .widget-collapse-hide {
            display: block;
            padding-top: 10px;
         }

         .single-sidebar-widget--title {
            position: relative;
            cursor: pointer;
         }

         .widget-collapse h2:after {
            position: absolute;
            content: "\f106";
            left: auto;
            right: 0;
            top: 0;
            font-family: FontAwesome;
            transition: .3s;
         }

         .widget-collapse h2.widget-collapse-show:after {
            content: "\f107";
         }

         .facets__item {
            display: flex;
            align-items: center;
         }

         .facets__item input[type=checkbox],
         .facets__item label {
            cursor: pointer;
         }

         .facet-checkbox {
            flex-grow: 1;
            position: relative;
            font-size: 16px;
            display: flex;
            word-break: break-word;
            line-height: 1.5;
            align-items: center;
            padding: 6px 0;
            color: #333;
         }

         .facet-checkbox input[type=checkbox] {
            position: absolute;
            opacity: 1;
            width: 1.6rem;
            height: 1.6rem;
            top: .7rem;
            left: -.4rem;
            z-index: -1;
            appearance: none;
            -webkit-appearance: none;
            display: none;
         }

         .facet-checkbox>svg {
            background-color: #fff;
            margin-right: 12px;
            flex-shrink: 0;
         }

         .facet-checkbox .icon-checkmark {
            visibility: hidden;
            position: absolute;
            left: 3px;
            z-index: 5;
            top: 15px;
         }

         .facet-checkbox>input[type=checkbox]:checked~.icon-checkmark {
            visibility: visible;
         }

         .filter-range-from input,
         .filter-price-range-to input {
            width: 100%;
            border-radius: 3px;
            padding: 0 20px 0 25px;
            height: 45px;
         }

         /* Chrome, Safari, Edge, Opera */
         input::-webkit-outer-spin-button,
         input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
         }

         /* Firefox */
         input[type=number] {
            -moz-appearance: textfield;
         }

         .filter_range_input {
            position: relative;
         }

         .filter-range-from span,
         .filter-price-range-to span {
            position: absolute;
            left: 12px;
            top: 10px;
         }

         .sidebar-price-filter>div+div {
            margin-top: 15px;
         }

         .filter-range-from input::-webkit-input-placeholder,
         .filter-price-range-to input::-webkit-input-placeholder {
            /* Edge */
            color: #ccc;
         }

         .filter-range-from input:-ms-input-placeholder,
         .filter-price-range-to input:-ms-input-placeholder {
            /* Internet Explorer 10-11 */
            color: #ccc;
         }

         .filter-range-from input::placeholder,
         .filter-price-range-to input::placeholder {
            color: #ccc;
         }

         .active-facets__button {
            display: block;
            margin-right: 10px;
            margin-top: 10px;
            text-decoration: none;
         }

         span.active-facets__button-inner {
            color: #000;
            border-radius: 20px;
            font-size: 16px;
            min-height: 0;
            min-width: 0;
            padding: 3px 10px;
            background: #e8e8e8;
            font-weight: 500;
            transition: .3s;
            line-height: 1;
         }

         .active-facets__button svg {
            margin-right: -6px;
            pointer-events: none;
            width: 20px;
         }

         a.active-filters-clear {
            font-size: 18px;
            text-decoration: underline;
            text-underline-offset: 2px;
            margin-top: 10px;
            color: #333;
         }

         .selected-filter-value ul li:only-child {
            display: none;
         }

         .selected-filter-value ul li.active {
            padding-bottom: 40px;
         }

         span.active-facets__button-inner:hover {
            background: #000;
            color: #fff;
         }

         span.active-facets__button-inner:hover svg path {
            stroke: #fff;
         }

         .facet-checkbox--disabled {
            color: rgba(19, 19, 19, .4);
         }

         ul.filters__active_list {
            display: flex;
            flex-wrap: wrap;
         }

         .category__menu li a {
            font-size: 16px;
         }

         .category__menu li {
            line-height: 32px;
         }

         .category__menu li ul {
            padding-left: 10px;
         }

         .category__menu li a:hover {
            color: #333 !important;
         }
      </style>
      <script>
         $('.grid-icons a').on('click', function(e) {
            e.preventDefault();
            var shopProduct = $('.item');
            var viewMode = $(this).data('target');
            $('.grid-icons a').removeClass('active');
            $(this).addClass('active');
            /*---------- reinitialize isotope ----------*/
            // shopProductWrap.isotope();
            // shopProductWrap.isotope('destroy');

            shopProduct.removeClass('three-column four-column five-column grid-list').addClass(viewMode);
         });

         $('.grid-icons a').on('click', function(e) {
            e.preventDefault();
            var shopProduct = $('.item');
            var viewMode = $(this).data('target');
            $('.grid-icons a').removeClass('active');
            $(this).addClass('active');
            /*---------- reinitialize isotope ----------*/
            // shopProductWrap.isotope();
            // shopProductWrap.isotope('destroy');

            shopProduct.removeClass('three-column four-column five-column grid-list').addClass(viewMode);
         });

         $('#filter-price').on('click', function(e) {
            window.location = "<?= current_url() ?>?price=" + $('#price-1').val() + '-' + $('#price-2').val();
         });

         $('#filter-availability').change(function() {
            console.log('bla bla');
            $(this).prop('checked', true);
            window.location = "<?= current_url() ?>?status=available";
         });

         $('#filter-all').change(function() {
            $(this).prop('checked', true);
            window.location = "<?= current_url() ?>?status=all";
         });

         $('#selectEl').change(function() {
            // set the window's location property to the value of the option the user has selected
            window.location = $(this).val();
         });
      </script>
   </div>
</main>

