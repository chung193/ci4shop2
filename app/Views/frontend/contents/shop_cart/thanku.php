
<!DOCTYPE html>
<html lang="en-US" dir="ltr" class="no-js windows chrome desktop page--no-banner page--logo-main page--show page--show card-fields">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, height=device-height, minimum-scale=1.0, user-scalable=0">
      <meta name="referrer" content="origin">
      <title>Cám ơn, đơn hàng của bạn đã hoàn tất quá trình đặ<tt></tt></title>
      <meta data-browser="chrome" data-browser-major="106">
      <meta data-body-font-family="-apple-system, BlinkMacSystemFont, &#39;Segoe UI&#39;, Roboto, Helvetica, Arial, sans-serif, &#39;Apple Color Emoji&#39;, &#39;Segoe UI Emoji&#39;, &#39;Segoe UI Symbol&#39;" data-body-font-type="system">
      <meta id="shopify-digital-wallet" name="shopify-digital-wallet" content="/2341044283/digital_wallets/dialog">
      <meta name="shopify-checkout-authorization-token" content="30b80d3c5da05d4f358b939f74a1e360" />
      <meta id="shopify-regional-checkout-config" name="shopify-regional-checkout-config" content="{&quot;bugsnag&quot;:{&quot;checkoutJSApiKey&quot;:&quot;717bcb19cf4dd1ab6465afcec8a8de02&quot;,&quot;endpoint&quot;:&quot;https:\/\/notify.bugsnag.com&quot;}}" />
      <meta property="og:title" content="" />
      <meta property="og:image" content="" />
      <!--[if lt IE 9]>
      <link rel="stylesheet" media="all" href="//cdn.shopify.com/app/services/2341044283/assets/122704625723/checkout_stylesheet/v2-ltr-edge-dc8ca37e47688d82d8e99566084b3d8b-543/oldie" />
      <![endif]-->
      <!--[if gte IE 9]><!-->
      <link rel="stylesheet" href="//cdn.shopify.com/app/services/2341044283/assets/122704625723/checkout_stylesheet/v2-ltr-edge-dc8ca37e47688d82d8e99566084b3d8b-543" media="all" />
      <!--<![endif]-->
      
      
   </head>
   <body>
      
      
      <div class="content" data-content>
         <div class="wrap">
            <div class="main">
               <header class="main__header" role="banner">
                  <a class="logo logo--left" href="<?= base_url()?>"><span class="logo__text heading-1">Macstore</span></a>
                  
                  <nav aria-label="Breadcrumb">
                     <ol class="breadcrumb " role="list">
                     <li class="breadcrumb__item breadcrumb__item--completed">
                           <a class="breadcrumb__link" href="<?= base_url()?>">Trang chủ</a>
                           <svg class="icon-svg icon-svg--color-adaptive-light icon-svg--size-10 breadcrumb__chevron-icon" aria-hidden="true" focusable="false">
                              <use xlink:href="#chevron-right" />
                           </svg>
                        </li>
                        <li class="breadcrumb__item breadcrumb__item--completed">
                           <a class="breadcrumb__link" href="<?= base_url()?>/gio-hang/">Giỏ hàng</a>
                           <svg class="icon-svg icon-svg--color-adaptive-light icon-svg--size-10 breadcrumb__chevron-icon" aria-hidden="true" focusable="false">
                              <use xlink:href="#chevron-right" />
                           </svg>
                        </li>
                        <li class="breadcrumb__item breadcrumb__item--completed">
                           <a class="breadcrumb__link" href="<?= base_url()?>/checkout">Thông tin giỏ hàng</a>
                           <svg class="icon-svg icon-svg--color-adaptive-light icon-svg--size-10 breadcrumb__chevron-icon" aria-hidden="true" focusable="false">
                              <use xlink:href="#chevron-right" />
                           </svg>
                        </li>
                        <li class="breadcrumb__item breadcrumb__item--completed">
                           <a class="breadcrumb__link" href="#">Hoàn tất</a>
                        </li>
                        
                     </ol>
                  </nav>
                  <div class="shown-if-js" data-alternative-payments></div>
               </header>
               <main class="main__content" role="main">
                 
                 
                  <div class="step" data-step="payment_method" data-last-step="true">
                     <div class="step__sections">
                        <div class="section">
                           <div class="content-box">
                              <div role="table" class="content-box__row content-box__row--tight-spacing-vertical">
                                 <div role="row" class="review-block">
                                    <div class="review-block__inner">
                                       <div role="rowheader" class="review-block__label">
                                          Thông tin liên hệ
                                       </div>
                                       <?php $session = session();?>
                                       <div role="cell" class="review-block__content">
                                          <bdo dir="ltr"><?= $session->get('customer_phone')?></bdo>
                                       </div>
                                    </div>
                                    
                                 </div>
                                 <div role="row" class="review-block">
                                    <div class="review-block__inner">
                                       <div role="rowheader" class="review-block__label">
                                          Địa chỉ nhận hàng
                                       </div>
                                       <div role="cell" class="review-block__content">
                                          <address class="address address--tight">
                                          <?= $session->get('customer_address')?>
                                          </address>
                                       </div>
                                    </div>
                                   
                                 </div>

                                 

                              </div>
                           </div>
                        </div>
                        <form class="edit_checkout" data-payment-form="" action="" accept-charset="UTF-8" method="post" style="margin-top:40px">
                           
                           <div class="section section--payment-method" data-payment-method>
                              <div class="section__header">
                                 <h2 class="section__title" id="main-header" tabindex="-1">
                                    Lời cảm ơn
                                 </h2>
                                 <p class="section__text">
                                    Một email chứa thông tin đơn hàng đã được gửi vào mail của bạn. Chúng tôi sẽ sớm liên hệ với bạn để xác nhận đơn hàng.<br>
                                    Cám ơn bạn đã ủng hộ Macstore, chúc bạn 1 ngày mới tốt lành!
                                 </p>
                              </div>
                              
                           </div>

                           
                           <div class="step__footer" data-step-footer>

                              <a class="step__footer__previous-link" href="<?= base_url()?>">
                                 <svg focusable="false" aria-hidden="true" class="icon-svg icon-svg--color-accent icon-svg--size-10 previous-link__icon" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
                                    <path d="M8 1L7 0 3 4 2 5l1 1 4 4 1-1-4-4"/>
                                 </svg>
                                 <span class="step__footer__previous-link-content">Tiếp tục mua sắm</span>
                              </a>
                              <div class="step__footer__review-notice-text hidden-on-mobile">
                              </div>
                           </div>

                        </form>
                     </div>
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
                  <a class="logo logo--left" href="https://bigon-6.myshopify.com/"><span class="logo__text heading-1">astor</span></a>
                  <h1 class="visually-hidden">
                     Payment
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
                                       <th scope="col"><span class="visually-hidden">Số tiền</span></th>
                                    </tr>
                                 </thead>
                                 <tbody data-order-summary-section="line-items">

                                    <?php 
                                        $sum = 0;
                                        foreach($product as $val){
                                            $sum+=$val['total'];
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
                                          <span class="order-summary__emphasis skeleton-while-loading"><?= price_format($val['price'] * $val['qty'])?></span>
                                       </td>
                                    </tr>
                                    <?php } ?>

                                 </tbody>
                              </table>
                              <div class="order-summary__scroll-indicator" aria-hidden="true" tabindex="-1" id="order-summary__scroll-indicator">
                                 Kéo xuống để xem thêm
                                 <svg aria-hidden="true" focusable="false" class="icon-svg icon-svg--size-12">
                                    <use xlink:href="#down-arrow" />
                                 </svg>
                              </div>
                           </div>
                        </div>
                        <div class="order-summary__section order-summary__section--total-lines" data-order-summary-section="payment-lines">
                           <table class="total-line-table">
                              <caption class="visually-hidden">Tóm tắt giá trị đơn hàng</caption>
                              <thead>
                                 <tr>
                                    <th scope="col"><span class="visually-hidden">Mô tả</span></th>
                                    <th scope="col"><span class="visually-hidden">Số tiền</span></th>
                                 </tr>
                              </thead>
                              <tbody class="total-line-table__tbody">
                                 <!-- <tr class="total-line total-line--subtotal">
                                    <th class="total-line__name" scope="row">Subtotal</th>
                                    <td class="total-line__price">
                                       <span class="order-summary__emphasis skeleton-while-loading" data-checkout-subtotal-price-target="99900">
                                       $999.00
                                       </span>
                                    </td>
                                 </tr> -->
                                 <!-- <tr class="total-line total-line--shipping"> -->
                                    <!-- <th class="total-line__name" scope="row">
                                       <span>
                                       Shipping
                                       </span>
                                    </th> -->
                                    <!-- <td class="total-line__price">
                                       <span class="skeleton-while-loading order-summary__emphasis" data-checkout-total-shipping-target="2000">
                                       $20.00
                                       </span>
                                    </td> -->
                                 <!-- </tr> -->
                                 <!-- <tr class="total-line total-line--taxes hidden" data-checkout-taxes>
                                    <th class="total-line__name" scope="row">
                                       Taxes
                                    </th>
                                    <td class="total-line__price">
                                       <span class="order-summary__emphasis skeleton-while-loading" data-checkout-total-taxes-target="0">$0.00</span>
                                    </td>
                                 </tr> -->
                              </tbody>
                              <tfoot class="total-line-table__footer">
                                 <tr class="total-line">
                                    <th class="total-line__name payment-due-label" scope="row">
                                       <span class="payment-due-label__total">Tổng số tiền phải trả</span>
                                    </th>
                                    <td class="total-line__price payment-due" data-presentment-currency="USD">
                                       <span class="payment-due__currency remove-while-loading">VNĐ</span>
                                       <span class="payment-due__price skeleton-while-loading--lg" data-checkout-payment-due-target="101900">
                                       <?= price_format($sum)?>
                                       </span>
                                    </td>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                     </div>
                  </div>

                  <!-- <div class="visually-hidden" data-order-summary-section="accessibility-live-region">
                     <div aria-live="polite" aria-atomic="true" role="status">
                        Updated total price:
                        <span data-checkout-payment-due-target="101900">
                        $1,019.00
                        </span>
                     </div>
                  </div> -->

                  <div id="partial-icon-symbols" class="icon-symbols" data-tg-refresh="partial-icon-symbols" data-tg-refresh-always="true">
                     <svg xmlns="http://www.w3.org/2000/svg">
                        <symbol id="warning">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 22">
                              <path d="M15.286 2.386l7.91 13.857C25.01 19.423 23.65 22 20.16 22H3.84C.35 22-1.01 19.427.805 16.243l7.91-13.857c1.815-3.178 4.754-3.185 6.57 0zm-1.737.992c-1.05-1.838-2.05-1.837-3.1 0L2.54 17.235C1.468 19.122 1.93 20 3.84 20h16.32c1.91 0 2.374-.88 1.298-2.765l-7.91-13.857zM12 6.5c.552 0 1 .448 1 1V12c0 .552-.448 1-1 1s-1-.448-1-1V7.5c0-.552.448-1 1-1zm-1.5 10c0-.828.666-1.5 1.5-1.5.828 0 1.5.666 1.5 1.5 0 .828-.666 1.5-1.5 1.5-.828 0-1.5-.666-1.5-1.5z"/>
                           </svg>
                        </symbol>
                        <symbol id="info">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                              <path d="M12 11h1v7h-2v-5c-.552 0-1-.448-1-1s.448-1 1-1h1zm0 13C5.373 24 0 18.627 0 12S5.373 0 12 0s12 5.373 12 12-5.373 12-12 12zm0-2c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10zM10.5 7.5c0-.828.666-1.5 1.5-1.5.828 0 1.5.666 1.5 1.5 0 .828-.666 1.5-1.5 1.5-.828 0-1.5-.666-1.5-1.5z"/>
                           </svg>
                        </symbol>
                        <symbol id="caret-down">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
                              <path d="M0 3h10L5 8" fill-rule="nonzero"/>
                           </svg>
                        </symbol>
                        <symbol id="spinner-button">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                              <path d="M20 10c0 5.523-4.477 10-10 10S0 15.523 0 10 4.477 0 10 0v2c-4.418 0-8 3.582-8 8s3.582 8 8 8 8-3.582 8-8h2z"/>
                           </svg>
                        </symbol>
                        <symbol id="chevron-right">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 10 10">
                              <path d="M2 1l1-1 4 4 1 1-1 1-4 4-1-1 4-4"/>
                           </svg>
                        </symbol>
                        <symbol id="down-arrow">
                           <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 12 12">
                              <path d="M10.817 7.624l-4.375 4.2c-.245.235-.64.235-.884 0l-4.375-4.2c-.244-.234-.244-.614 0-.848.245-.235.64-.235.884 0L5.375 9.95V.6c0-.332.28-.6.625-.6s.625.268.625.6v9.35l3.308-3.174c.122-.117.282-.176.442-.176.16 0 .32.06.442.176.244.234.244.614 0 .848"/>
                           </svg>
                        </symbol>
                     </svg>
                  </div>
               </div>
            </aside>
         </div>
      </div>

      <link href="https://monorail-edge.shopifysvc.com" rel="dns-prefetch">
      <script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
         window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
         window.ShopifyAnalytics.meta.currency = 'USD';
         var meta = {"page":{"path":"\/checkout\/payment","search":"","url":"https:\/\/bigon-6.myshopify.com\/2341044283\/checkouts\/81c18273175153061f893380e93bcaa7"},"checkout":{"payment_due":101900}};
         for (var attr in meta) {
           window.ShopifyAnalytics.meta[attr] = meta[attr];
         }
      </script>
      <script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {
         };
      </script>
      <script class="analytics">(function () {
         var customDocumentWrite = function(content) {
           var jquery = null;
         
           if (window.jQuery) {
             jquery = window.jQuery;
           } else if (window.Checkout && window.Checkout.$) {
             jquery = window.Checkout.$;
           }
         
           if (jquery) {
             jquery('body').append(content);
           }
         };
         
         var hasLoggedConversion = function(token) {
           if (token) {
             return document.cookie.indexOf('loggedConversion=' + token) !== -1;
           }
           return false;
         }
         
         var setCookieIfConversion = function(token) {
           if (token) {
             var twoMonthsFromNow = new Date(Date.now());
             twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);
         
             document.cookie = 'loggedConversion=' + token + '; expires=' + twoMonthsFromNow;
           }
         }
         
         var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
         if (trekkie.integrations) {
           return;
         }
         trekkie.methods = [
           'identify',
           'page',
           'ready',
           'track',
           'trackForm',
           'trackLink'
         ];
         trekkie.factory = function(method) {
           return function() {
             var args = Array.prototype.slice.call(arguments);
             args.unshift(method);
             trekkie.push(args);
             return trekkie;
           };
         };
         for (var i = 0; i < trekkie.methods.length; i++) {
           var key = trekkie.methods[i];
           trekkie[key] = trekkie.factory(key);
         }
         trekkie.load = function(config) {
           trekkie.config = config || {};
           trekkie.config.initialDocumentCookie = document.cookie;
           var first = document.getElementsByTagName('script')[0];
           var script = document.createElement('script');
           script.type = 'text/javascript';
           script.onerror = function(e) {
             var scriptFallback = document.createElement('script');
             scriptFallback.type = 'text/javascript';
             scriptFallback.onerror = function(error) {
                     var Monorail = {
             produce: function produce(monorailDomain, schemaId, payload) {
               var currentMs = new Date().getTime();
               var event = {
                 schema_id: schemaId,
                 payload: payload,
                 metadata: {
                   event_created_at_ms: currentMs,
                   event_sent_at_ms: currentMs
                 }
               };
               return Monorail.sendRequest("https://" + monorailDomain + "/v1/produce", JSON.stringify(event));
             },
             sendRequest: function sendRequest(endpointUrl, payload) {
               // Try the sendBeacon API
               if (window && window.navigator && typeof window.navigator.sendBeacon === 'function' && typeof window.Blob === 'function' && !Monorail.isIos12()) {
                 var blobData = new window.Blob([payload], {
                   type: 'text/plain'
                 });
           
                 if (window.navigator.sendBeacon(endpointUrl, blobData)) {
                   return true;
                 } // sendBeacon was not successful
           
               } // XHR beacon   
           
               var xhr = new XMLHttpRequest();
           
               try {
                 xhr.open('POST', endpointUrl);
                 xhr.setRequestHeader('Content-Type', 'text/plain');
                 xhr.send(payload);
               } catch (e) {
                 console.log(e);
               }
           
               return false;
             },
             isIos12: function isIos12() {
               return window.navigator.userAgent.lastIndexOf('iPhone; CPU iPhone OS 12_') !== -1 || window.navigator.userAgent.lastIndexOf('iPad; CPU OS 12_') !== -1;
             }
           };
           Monorail.produce('monorail-edge.shopifysvc.com',
             'trekkie_checkout_load_errors/1.1',
             {shop_id: 2341044283,
             theme_id: 122704625723,
             app_name: "checkout",
             context_url: window.location.href,
             source_url: "https://cdn.shopify.com/s/trekkie.storefront.e695302c3cd17296c85e559451c496db44e32e17.min.js"});
         
             };
             scriptFallback.async = true;
             scriptFallback.src = 'https://cdn.shopify.com/s/trekkie.storefront.e695302c3cd17296c85e559451c496db44e32e17.min.js';
             first.parentNode.insertBefore(scriptFallback, first);
           };
           script.async = true;
           script.src = 'https://cdn.shopify.com/s/trekkie.storefront.e695302c3cd17296c85e559451c496db44e32e17.min.js';
           first.parentNode.insertBefore(script, first);
         };
         trekkie.load(
           {"Trekkie":{"appName":"checkout","development":false,"defaultAttributes":{"shopId":2341044283,"isMerchantRequest":null,"themeId":122704625723,"themeCityHash":"6942124855711102416","contentLanguage":"en","currency":"USD","checkoutToken":"81c18273175153061f893380e93bcaa7"},"isServerSideCookieWritingEnabled":true},"Session Attribution":{},"S2S":{"facebookCapiEnabled":false,"source":"trekkie-checkout-classic"}}
         );
         
         var loaded = false;
         trekkie.ready(function() {
           if (loaded) return;
           loaded = true;
         
           window.ShopifyAnalytics.lib = window.trekkie;
           
         
           var originalDocumentWrite = document.write;
           document.write = customDocumentWrite;
           try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
           document.write = originalDocumentWrite;
         
           window.ShopifyAnalytics.lib.page("Checkout - Payment",{"path":"\/checkout\/payment","search":"","url":"https:\/\/bigon-6.myshopify.com\/2341044283\/checkouts\/81c18273175153061f893380e93bcaa7"});
         
           var match = window.location.pathname.match(/checkouts\/(.+)\/(thank_you|post_purchase)/)
           var token = match? match[1]: undefined;
           if (!hasLoggedConversion(token)) {
             setCookieIfConversion(token);
             
           }
         });
         
         
             var eventsListenerScript = document.createElement('script');
             eventsListenerScript.async = true;
             eventsListenerScript.src = "//cdn.shopify.com/shopifycloud/shopify/assets/shop_events_listener-65cd0ba3fcd81a1df33f2510ec5bcf8c0e0958653b50e3965ec972dd638ee13f.js";
             document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);
           
         })();
      </script>
   </body>
</html>