<!DOCTYPE html>
<html lang="en-US" dir="ltr" class="no-js windows chrome desktop page--no-banner page--logo-main page--show page--show card-fields">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, user-scalable=0">
      <meta name="referrer" content="origin">
      <title><?=$test['title'] ?></title>
      <meta data-browser="chrome" data-browser-major="106">
      <meta data-body-font-family="-apple-system, BlinkMacSystemFont, &#39;Segoe UI&#39;, Roboto, Helvetica, Arial, sans-serif, &#39;Apple Color Emoji&#39;, &#39;Segoe UI Emoji&#39;, &#39;Segoe UI Symbol&#39;" data-body-font-type="system">
      <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/2341044283/digital_wallets/dialog">
      <meta name="shopify-checkout-authorization-token" content="30b80d3c5da05d4f358b939f74a1e360" />
      <meta id="shopify-regional-checkout-config" name="shopify-regional-checkout-config" content="{&quot;bugsnag&quot;:{&quot;checkoutJSApiKey&quot;:&quot;717bcb19cf4dd1ab6465afcec8a8de02&quot;,&quot;endpoint&quot;:&quot;https:\/\/notify.bugsnag.com&quot;}}" />
      <meta property="og:title" content="Checkout" />
      <meta property="og:image" content="" />
      <!--[if lt IE 9]>
      <link rel="stylesheet" media="all" href="//cdn.shopify.com/app/services/2341044283/assets/122704625723/checkout_stylesheet/v2-ltr-edge-dc8ca37e47688d82d8e99566084b3d8b-543/oldie" />
      <![endif]-->
      <!--[if gte IE 9]><!-->
      <link rel="stylesheet" href="//cdn.shopify.com/app/services/2341044283/assets/122704625723/checkout_stylesheet/v2-ltr-edge-dc8ca37e47688d82d8e99566084b3d8b-543" media="all" />
      <!--<![endif]-->
      <script src="//cdn.shopify.com/app/services/2341044283/javascripts/checkout_countries/122704625723/en-US/countries-ad7b26273bacc6638147f0939f78e77f0029a8b9-ad7b26273bacc6638147f0939f78e77f0029a8b9-0-d295b8ba1ab1e296ee2c6d377b1e79b7a1dddd34.js?version=edge" crossorigin="anonymous"></script>
      <script src="//cdn.shopify.com/shopifycloud/shopify/assets/checkout-01727298a67252103e047b8cb9ab3b59505a7bcdab06c3cbdb2583df499b077b.js" crossorigin="anonymous"></script>
      <script id="__st">var __st={"a":2341044283,"offset":-14400,"reqid":"5a3e80a0-bfc5-4a91-9ee4-153b7fd4036b","pageurl":"bigon-6.myshopify.com\/2341044283\/checkouts\/81c18273175153061f893380e93bcaa7","u":"8c2c4ec1476b","t":"checkout","offsite":1};</script>
   </head>
   <body>
      
      <header class="banner" data-header role="banner">
         <div class="wrap">
            <a class="logo logo--left" href="<?= base_url()?>"><span class="logo__text heading-1"><?= $test['base']['info']->name?></span></a>
            <h1 class="visually-hidden">
               Thông tin đơn hàng
            </h1>
         </div>
      </header>


      <div class="content" data-content>
         <div class="wrap">
            <div class="main">
               <header class="main__header" role="banner">
                  <a class="logo logo--left" href="<?= base_url()?>">
                  <span class="logo__text heading-1">
                  <?= $test['base']['info']->name?>
                  </span>
                  </a>
                  <h1 class="visually-hidden">
                     Thông tin đơn hàng
                  </h1>

                  <nav aria-label="Breadcrumb">
                     <ol class="breadcrumb " role="list">
                        <li class="breadcrumb__item breadcrumb__item--completed">
                           <a class="breadcrumb__link" href="<?= base_url().'/gio-hang'?>">Giỏ hàng</a>
                           <svg class="icon-svg icon-svg--color-adaptive-light icon-svg--size-10 breadcrumb__chevron-icon" aria-hidden="true" focusable="false">
                              <use xlink:href="#chevron-right" />
                           </svg>
                        </li>
                        <li class="breadcrumb__item breadcrumb__item--current" aria-current="step">
                           <span class="breadcrumb__text">Thông tin giỏ hàng</span>
                        </li>
                        
                     </ol>
                  </nav>
                  <div class="shown-if-js" data-alternative-payments></div>
               </header>
               <main class="main__content" role="main">
                  <div class="step" data-step="contact_information" data-last-step="false">

                     <form data-customer-information-form="true" data-email-or-phone="true" class="edit_checkout" novalidate="novalidate" 
                     action="<?= base_url().'/gio-hang/hoan-tat'?>" accept-charset="UTF-8" method="post">
                        
                        <div class="step__sections">
                           <div class="section section--contact-information">
                              <div class="section__header">
                                 <div class="layout-flex layout-flex--tight-vertical layout-flex--loose-horizontal layout-flex--wrap">
                                    <h2 class="section__title layout-flex__item layout-flex__item--stretch" id="main-header" tabindex="-1">
                                       Thông tin liên hệ
                                    </h2>
                                    <?php 
                                       $session = session();
                                       if(!$session->get('customer_isLoggedIn'))
                                       {
                                          echo '<p class="layout-flex__item">
                                             Bạn đã có tài khoản?
                                             <a href="'.base_url().'/khach-hang/dang-nhap/">
                                             Đăng nhập
                                             </a>          
                                          </p>';
                                       }else{

                                       }
                                    ?>
                                    
                                 </div>
                              </div>
                              <div class="section__content" data-section="customer-information" data-shopify-pay-validate-on-load="false">
                                 <div class="fieldset">
                                    <div data-email-or-phone-input-wrapper="true" data-shopify-pay-email-flow="false" class="field field--email_or_phone">
                                       <label class="field__label" for="checkout_email_or_phone">Email</label>
                                       <div class="field__input-wrapper"></div>
                                          <input 
                                          <?php 
                                             if($session->get('customer_email')){
                                                echo 'value="'.$session->get('customer_email').'"';
                                             }
                                          ?>
                                          placeholder="Email " data-autofocus="true" aria-required="true" class="field__input" size="30" type="email" name="checkout[email]" id="checkout_email_or_phone" />
                                       </div>
                                    </div>
                                 </div>
                                 
                                 
                              </div>
                           </div>
                           <div class="section section--shipping-address" data-shipping-address>
                              <div class="section__header">
                                 <h2 class="section__title" id="section-delivery-title">
                                    Địa chỉ nhận hàng
                                 </h2>
                              </div>
                              <div class="section__content">
                                 <div class="fieldset">
                                    <div class="address-fields" data-address-fields>

                                       
                                       
                                       <div class="field field--optional" data-address-field="first_name">
                                          <label class="field__label" for="checkout_shipping_address_first_name">Tên người nhận</label>
                                          <div class="field__input-wrapper">
                                             <input placeholder="Tên người nhận" 
                                             <?php 
                                                if($session->get('customer_name')){
                                                   echo 'value="'.$session->get('customer_name').'"';
                                                }
                                             ?> 
                                          class="field__input" size="30" type="text" name="checkout[name]" id="checkout_shipping_address_first_name" />
                                          </div>
                                       </div>

                                       <div data-address-field="address2" data-autocomplete-field-container="true" class="field field--optional">
                                          <label class="field__label" for="checkout_shipping_address_address2">Số điện thoại (bắt buộc)</label>
                                          <div class="field__input-wrapper">
                                             <input placeholder="Số điện thoại (bắt buộc)"
                                             <?php 
                                                if($session->get('customer_phone')){
                                                   echo 'value="'.$session->get('customer_phone').'"';
                                                }
                                             ?>
                                           autocomplete="shipping address-line2" autocorrect="off" data-backup="address2" class="field__input" size="30" type="text" name="checkout[phone]" id="checkout_shipping_address_address2" />
                                          </div>
                                       </div>

                                       <div data-address-field="address1" data-autocomplete-field-container="true" class="field field--required">
                                          <label class="field__label" for="checkout_shipping_address_address1">Địa chỉ</label>
                                          <div class="field__input-wrapper">
                                             <input placeholder="Số nhà, xã, phường, thị trấn..." 
                                             <?php 
                                                if($session->get('customer_address')){
                                                   echo 'value="'.$session->get('customer_address').'"';
                                                }
                                             ?>
                                             autocomplete="shipping address-line1" autocorrect="off" class="field__input"size="30" type="text" name="checkout[address]" id="checkout_shipping_address_address1" />
                                             <p class="field__additional-info visually-hidden" data-address-civic-number-warning>
                                                <svg class="icon-svg icon-svg--size-16 field__message__icon" aria-hidden="true" focusable="false">
                                                   <use xlink:href="#info" />
                                                </svg>
                                             </p>
                                          </div>
                                       </div>
                                       
                                       <div data-address-field="city" data-autocomplete-field-container="true" class="field field--required">
                                          <label class="field__label" for="checkout_shipping_address_city">Tỉnh/ Thành phố</label>
                                          <div class="field__input-wrapper">
                                             <select name="checkout[matp]" class="field__input field__input--select">
                                                <?php 
                                                   foreach($test['city'] as $val){
                                                      if($session->get('customer_city') == $val['matp']){
                                                         echo '<option value="'.$val['matp'].'" selected>'.$val['name'].'</option>';
                                                      }else{
                                                         echo '<option value="'.$val['matp'].'">'.$val['name'].'</option>';
                                                      } 
                                                   }
                                                ?>
                                             </select>
                                          </div>
                                       </div>


                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <div class="step__footer" data-step-footer="">
                           <?php 
                              if($session->get('customer_isLoggedIn')){
                                    echo '
                                    <input type="hidden" name="customer_id" id="checkout_total_price" value="'.$session->get('customer_id').'" autocomplete="off">
                                    <input type="hidden" name="is_login" value="'.$session->get('customer_isLoggedIn').'" autocomplete="off">';
                              }
                           ?>
                           

                           <div class="shown-if-js">
                              <button name="button" type="submit" id="continue_button" class="step__footer__continue-btn btn" aria-busy="false">
                                 <span class="btn__content" data-continue-button-content="true">Hoàn tất đặt hàng</span>
                                 <svg class="icon-svg icon-svg--size-18 btn__spinner icon-svg--spinner-button" aria-hidden="true" focusable="false">
                                    <use xlink:href="#spinner-button"></use>
                                 </svg>
                              </button>
                              <div class="shown-on-mobile">
                              </div>
                           </div>
                           <div class="hidden-if-js">
                              <button name="button" type="submit" id="continue_button" class="step__footer__continue-btn btn" aria-busy="false">
                                 <span class="btn__content" data-continue-button-content="true">Hoàn tất đặt hàng</span>
                                 <svg class="icon-svg icon-svg--size-18 btn__spinner icon-svg--spinner-button" aria-hidden="true" focusable="false">
                                    <use xlink:href="#spinner-button"></use>
                                 </svg>
                              </button>
                           </div>
                           <a class="step__footer__previous-link" href="<?= base_url()?>/gio-hang"">
                              <svg focusable="false" aria-hidden="true" class="icon-svg icon-svg--color-accent icon-svg--size-10 previous-link__icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
                                 <path d="M8 1L7 0 3 4 2 5l1 1 4 4 1-1-4-4"></path>
                              </svg>
                              <span class="step__footer__previous-link-content">Quay lại giỏ hàng</span>
                           </a>
                           <div class="step__footer__review-notice-text hidden-on-mobile">
                           </div>
                        </div>

                     </form>
                  </div>
                  
               </main>
               <footer class="main__footer" role="contentinfo">
                  <p class="copyright-text ">
                     Bản quyền thuộc về Macstore
                  </p>
               </footer>
            </div>

            <aside class="sidebar" role="complementary">
               <div class="sidebar__header">
                  <a class="logo logo--left" href="<?= base_url();?>"><span class="logo__text heading-1">Macstore</span></a>
                  <h1 class="visually-hidden">
                     Thông tin
                  </h1>
               </div>
               <div class="sidebar__content">
                  <div id="order-summary" class="order-summary order-summary--is-collapsed" data-order-summary>
                     <h2 class="visually-hidden-if-js">Tóm tắt đơn hàng</h2>
                     <div class="order-summary__sections">
                        <div class="order-summary__section order-summary__section--product-list">
                           <div class="order-summary__section__content">
                              <table class="product-table">
                                 <caption class="visually-hidden">Giỏ hàng</caption>
                                 <thead class="product-table__header">
                                    <tr>
                                       <th scope="col"><span class="visually-hidden">Ảnh sản phẩm</span></th>
                                       <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                       <th scope="col"><span class="visually-hidden">Số lượng</span></th>
                                       <th scope="col"><span class="visually-hidden">Giá</span></th>
                                    </tr>
                                 </thead>
                                 <tbody data-order-summary-section="line-items">
                                    <?php 
                                       $product = $test['product'];
                                       $total = 0;
                                       foreach($product as $val){
                                        $total += ($val['qty'] * $val['price']);
                                       ?>
                                    <tr class="product" data-product-id="6765951647803" data-variant-id="39989196226619" data-product-type="" data-customer-ready-visible>
                                       <td class="product__image">
                                          <div class="product-thumbnail ">
                                             <div class="product-thumbnail__wrapper">
                                                <img alt="<?= $val['name']?>" class="product-thumbnail__image" 
                                                   src="<?= base_url().'/public/uploads/product/'.$val['img']?>" />
                                             </div>
                                             <span class="product-thumbnail__quantity" aria-hidden="true"><?= $val['qty']?></span>
                                          </div>
                                       </td>
                                       <th class="product__description" scope="row">
                                          <span class="product__description__name order-summary__emphasis"><?= $val['name']?></span>
                                          <!-- <span class="product__description__variant order-summary__small-text">128GB / magenta</span> -->
                                       </th>
                                       <td class="product__quantity">
                                          <span class="visually-hidden">
                                          1
                                          </span>
                                       </td>
                                       <td class="product__price">
                                          <span class="order-summary__emphasis skeleton-while-loading"><?= price_format($val['price']*$val['qty'])?> đ</span>
                                       </td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                              <div class="order-summary__scroll-indicator" aria-hidden="true" tabindex="-1" id="order-summary__scroll-indicator">
                                 Scroll for more items
                                 <svg aria-hidden="true" focusable="false" class="icon-svg icon-svg--size-12">
                                    <use xlink:href="#down-arrow" />
                                 </svg>
                              </div>
                           </div>
                        </div>
                        <div class="order-summary__section order-summary__section--total-lines" data-order-summary-section="payment-lines">
                           <table class="total-line-table">
                              <caption class="visually-hidden">Tóm tắt tiền hàng</caption>
                              <thead>
                                 <tr>
                                    <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                    <th scope="col"><span class="visually-hidden">Giá</span></th>
                                 </tr>
                                 
                              <tfoot class="total-line-table__footer">
                                 <tr class="total-line">
                                    <th class="total-line__name payment-due-label" scope="row">
                                       <span class="payment-due-label__total">Tổng tiền hàng</span>
                                    </th>
                                    <td class="total-line__price payment-due" data-presentment-currency="USD">
                                       <span class="payment-due__currency remove-while-loading">VNĐ</span>
                                       <span class="payment-due__price skeleton-while-loading--lg" data-checkout-payment-due-target="99900">
                                       <?= price_format($total)?>
                                       </span>
                                    </td>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                     </div>
                  </div>
                 


               </div>
            </aside>
         </div>
      </div>
      <div id="partial-icon-symbols" class="icon-symbols" data-tg-refresh="partial-icon-symbols" data-tg-refresh-always="true"><svg xmlns="http://www.w3.org/2000/svg"><symbol id="info"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12 11h1v7h-2v-5c-.552 0-1-.448-1-1s.448-1 1-1h1zm0 13C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12-5.373 12-12 12zm0-2c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zM10.5 7.5c0-.828.666-1.5 1.5-1.5.828 0 1.5.666 1.5 1.5 0 .828-.666 1.5-1.5 1.5-.828 0-1.5-.666-1.5-1.5z"/></svg></symbol>
      <symbol id="caret-down"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"><path d="M0 3h10L5 8" fill-rule="nonzero"/></svg></symbol>
      <symbol id="spinner-button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M20 10c0 5.523-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0v2c-4.418 0-8 3.582-8 8s3.582 8 8 8 8-3.582 8-8h2z"/></svg></symbol>
      <symbol id="chevron-right"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10"><path d="M2 1l1-1 4 4 1 1-1 1-4 4-1-1 4-4"/></svg></symbol>
      <symbol id="down-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12"><path d="M10.817 7.624l-4.375 4.2c-.245.235-.64.235-.884 0l-4.375-4.2c-.244-.234-.244-.614 0-.848.245-.235.64-.235.884 0L5.375 9.95V.6c0-.332.28-.6.625-.6s.625.268.625.6v9.35l3.308-3.174c.122-.117.282-.176.442-.176.16 0 .32.06.442.176.244.234.244.614 0 .848"/></svg></symbol></svg></div>

   </body>
</html>