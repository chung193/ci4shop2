<!-- Necessary JS -->
<!-- Ajax Cart js -->
<script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/option_selection-9f517843f664ad329c689020fb1e45d03cac979f64b9eb1651ea32858b0ff452.js" defer="defer"></script><script src="//cdn.shopify.com/shopifycloud/shopify/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js" defer="defer"></script><script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/cart.api.js?v=125344961445282960871643859741" defer="defer"></script><script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/lazysizes.min.js?v=89644803952926230611643859776" async></script><script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/bootstrap.min.js?v=94033863239863277801643859739" defer="defer"></script><script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/owl.carousel.min.js?v=39625633880638491061643859784" defer="defer"></script><script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/tippy.min.js?v=157736563639682071161643859810" defer="defer"></script><script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/perfect-scrollbar.js?v=72721406015941749981643859791" defer="defer"></script><script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/ajax-mailchimp.js?v=28280222459219268381643859736" defer="defer"></script>
<script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/jquery.dlmenu.js?v=84071848359167876331643859772" defer="defer"></script>
<script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/jquery.zoom.min.js?v=127655014540499679121643859776" defer="defer"></script>
<script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/fancyApps.min.js?v=116292848392535759031643859748" defer="defer"></script>
<script src="//cdn.shopify.com/s/files/1/0023/4104/4283/t/4/assets/theme.min.js?v=104990965764202793601643859852" defer="defer"></script>

<script>
  
</script>
<!-- modalAddToCart --><div class="modal fade ajax-popup" id="modalAddToCart" tabindex="-1" role="dialog" aria-hidden="true"> <div class="modal-dialog white-modal modal-md"><div class="modal-content"> <div class="modal-body"><div class="modal-content-text"> <div class="popup-image"><p class="success-message"><i class="fa fa-check-circle"></i>Product Successfully Added To Your Shoping Cart</p><div class="cart_img_inner"> <div class="popup_img_inner"><img class="popupimage" src=""> </div> <div class="content_inner"><h6 class="productmsg"></h6><!-- <span class="pop_current_price"> </span> --> </div></div> </div> <div class="popup-content"><p class="total_item"> There are <span class="cart_count bigcounter">1</span> Items In Your Cart.</p><p class="cart_total"> <span class="total_price_label">Total Price: </span> <span class="shopping-cart__total"><span class=money>$150.00</span></span></p><div class="modal-button disabled"><a href="/collections/all" class="aplee-button aplee-button--medium"> Continue Shopping </a><a href="/cart" class="aplee-button aplee-button--medium">View Cart</a><input type="checkbox" id="popup_ageree_term_cond" value="1"><label for="popup_ageree_term_cond">I agree with the terms and conditions</label><a href="/checkout" class="aplee-button aplee-button--medium popup-checkout--btn">Checkout</a></div> </div></div><div class="modal-close"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button></div> </div></div> </div></div><!-- modalAddToCart --><!-- modalAddToCart Error --><div class="modal fade ajax-popup error-ajax-popup" id="modalAddToCartError" tabindex="-1" role="dialog" aria-hidden="true"> <div class="modal-dialog white-modal modal-md"><div class="modal-content "> <div class="modal-body"><div class="modal-content-text"> <p class="error_message"></p></div><div class="modal-close"> <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times-circle"></i></button></div> </div></div> </div></div><script>
 $(function(){var t=null;$('form[action="/search"]').css("position","relative").each(function(){var s=$(this).find('input[name="q"]'),a=s.position().top+s.innerHeight();$('<ul class="search-results home-two"></ul>').css({position:"absolute",left:"0px",top:a}).appendTo($(this)).hide(),s.attr("autocomplete","off").bind("keyup change",function(){var s=$(this).val(),a=$(this).closest("form"),e="/search?type=product&q="+s,n=a.find(".search-results");s.length>3&&s!=$(this).attr("data-old-term")&&($(this).attr("data-old-term",s),null!=t&&t.abort(),t=$.getJSON(e+"&view=json",function(t){n.empty(),0==t.results_count?n.hide():($.each(t.results,function(t,s){var a=$("<a></a>").attr("href",s.url);a.append('<span class="thumbnail"><img src="'+s.thumbnail+'" /></span>'),a.append('<span class="title">'+s.title+"</span>"),a.wrap("<li></li>"),n.append(a.parent())}),t.results_count>10&&n.append('<li><span class="title"><a href="'+e+'">See all results ('+t.results_count+")</a></span></li>"),n.fadeIn(100))}))})});$("body").bind("click",function(){$(".search-results").hide()})});
</script>

<style>
  .search-results {z-index: 8889;list-style-type: none;   width: 300px;margin: 0;padding: 0;background: #ffffff;border: 1px solid #cccccc;border-radius: 0px;-webkit-box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);overflow: hidden;}.search-results li {display: block;width: 100%;height: 38px;margin: 0;padding: 0;border-top: 1px solid #cccccc;line-height: 38px;overflow: hidden;}.search-results li:first-child{border-top:none}.search-results .title{float:left;width:{};}.search-results .thumbnail{float:left;display:block;width:32px;height:32px;margin:3px 0 3px 3px;padding:0;text-align:center;overflow:hidden;border-radius:0}
</style>



<!-- <script>  
var mainImage = '';jQuery(function ($) { quiqview = function(product_handle) {Shopify.getProduct(product_handle);}
Shopify.onProduct = function(product) { $('.viewfullinfo').attr('href', product.url); text_truncate = function(str, length, ending) {if (length == null) {length = 500;}if (ending == null) {ending = '...';}if (str.length > length) {return str.substring(0, length - ending.length) + ending;} else {return str;}}; var _parent = '#quickViewModal';  $(_parent+' .product_title').text(product.title); $(_parent+' .rating').empty(); $(_parent+' .rating').append("<span class=\"shopify-product-reviews-badge\" data-id=\""+product.id+"\"></span>"); var variant = ''; for (i = 0; i < product.variants.length; i++) { if(product.variants[i].inventory_quantity > 0) {variant = product.variants[i];break;}}if(variant == '') {for (i = 0; i < product.variants.length; i++) {if(product.variants[i].inventory_policy == "continue") {variant = product.variants[i];break; }}if(variant == '') {variant = product.variants[0];} } mainImage = product.featured_image; var shopifyimgurl = variant.featured_image ? variant.featured_image.src : product.featured_image; var imgurl = "<img class=\"full-width\" alt=\"\" src = \""+shopifyimgurl+"\" >"; jQuery(_parent+' .product-main-image__item .img_box_1').empty(); jQuery(_parent+' .product-main-image__item .img_box_1').append(imgurl); jQuery(_parent+' .product-main-image__item .img_box_2').empty(); jQuery(_parent+' .product-main-image__item .img_box_2').append(imgurl); var desc = product.description; if (desc.indexOf("[short_description]") >= 0) { desc = desc.split("[short_description]"); desc = desc[1].split("[/short_description]"); $(_parent+' .product-des').show(); $(_parent+' .product-des').html(desc[0]);}else { $(_parent+' .product-des').html(text_truncate(product.description,250));}var inv_qua = variant.inventory_quantity;if(variant.price < variant.compare_at_price) { $('.price-part .main').addClass('amount'); $('.price-part .price-box__new').show(); changePriceValue('.price-part .main', variant.compare_at_price); changePriceValue('.price-part .price-box__new', variant.price); } else { $('.price-part .price-box__new').hide(); $('.price-part .main').removeClass('amount'); changePriceValue('.price-part .main', variant.price);} if(product.variants.length > 1) {var variants_margin = product.options.length == 2 ? 'variants_margin' : '';var select = '<select id="product-select-qv" name="id">';var selected = 'selected';for (i = 0; i < product.variants.length; i++) {var _var = product.variants[i];if(_var.available) {select += '<option value="' + _var.id + '"' + selected +'>' + _var.title + ' - ' + Shopify.formatMoney(_var.price, "<span class=money>${{amount}}</span>") + '</option>'; selected = '';}}select += '</select>';var variant_select = '<div class="variants_selects ' + variants_margin + '">';variant_select += select;variant_select += '</div><div class="divider divider--sm"></div>';select = variant_select;}else { var select = '<input type="hidden" name="id" value="' + product.variants[0].id + '" />';}$('.variants').empty();$('.variants').html(select);setParametresText(_parent+' .product-sku', variant.sku); if(jQuery(_parent + ' .product-sku').length) {var $ava = jQuery(_parent + " .product-info__availabilitu");if(variant.sku != "") {if($ava.hasClass('pull-left')){ $ava.removeClass('pull-left') }} else { if(!$ava.hasClass('pull-left')){ $ava.addClass('pull-left') }}}var out_of_stock = false;if(variant.inventory_management) {if(inv_qua > 0) { $(_parent+' .product-availability').text(inv_qua + " In Stock");}else {out_of_stock = true;$(_parent+' .product-availability').text("In Stock");}}else {$(_parent+' .product-availability').text("Many in stock"); }if(!out_of_stock || variant.inventory_policy == "continue") {         $('.product-available').show(); $('.product-disable').hide(); $('.addtocartqv').attr('id', product.id ); } else { $('.product-available').hide(); $('.product-disable').show();}if (product.available && product.variants.length > 1) { new Shopify.OptionSelectors("product-select-qv", { product: product, onVariantSelected: selectCallbackQv, enableHistoryState: true });if($('#quickViewModal .variants_selects .selector-wrapper').length > 0) { $.each( jQuery('#quickViewModal .variants_selects .selector-wrapper'), function(index) {$(this).find('label').text(product.options[index].name);});} }else { jQuery('.currency .active').trigger('click');}selectGrid(_parent);if($(".spr-badge").length > 0) {$.getScript(window.location.protocol + "//productreviews.shopifycdn.com/assets/v4/spr.js");}if($(".selector-wrapper label").length) {$(".selector-wrapper label").each(function( index ) { $(this).text(jQuery(this).text() + ":") }) } $(_parent).modal('show'); if( !( 'ontouchstart' in window ) && !navigator.msMaxTouchPoints && !navigator.userAgent.toLowerCase().match( /windows phone os 7/i ) ) return false; $j('body').css("top", -$j('body').scrollTop()); $j('body').addClass("no-scroll"); $j('.close').click(function(){ var top = parseInt($j('body').css("top").replace("px", ""))*-1; $j('body').removeAttr("style"); $j('body').removeClass("no-scroll"); $j('body').scrollTop(top)});}
function setParametresText(obj, value) {if(value != '') {$(obj).parent().show();$(obj).text(value);}else {$(obj).parent().hide();}}function changePriceValue (cell, value) {$(cell).html(Shopify.formatMoney(value, "<span class=money>${{amount}}</span>"))}});var selectCallbackQv = function(variant, selector) {var _parent = '#quickViewModal'; var _parentprice = _parent + ' .price-part';if (!variant) {jQuery(_parent + " .price-box").hide();jQuery(_parent + " .qwt").hide();jQuery(_parent + " .control-console").hide();jQuery(_parent + ' .addtocartqv').attr('disabled','disabled');jQuery(_parent + ' .addtocartqv').text('Unavailable');return false;}jQuery(_parent+" .price-box").show(),jQuery(_parent+" .qwt").show(),jQuery(_parent+" .control-console").show();if(variant.price < variant.compare_at_price){jQuery(_parentprice + ' .main').addClass('price-box__old');jQuery(_parentprice + ' .price-box__new').show();changePriceValue(_parentprice + ' .main', variant.compare_at_price);changePriceValue(_parentprice + ' .price-box__new', variant.price);} else {jQuery(_parentprice + ' .price-box__new').hide();jQuery(_parentprice + ' .main').removeClass('price-box__old');changePriceValue(_parentprice + ' .main', variant.price);}newVariantTextDataQv(_parent + ' .product-sku', variant.sku);if(jQuery(_parent+" .product-sku").length){var $ava=jQuery(_parent+" .product-info__availabilitu");""!=variant.sku?$ava.hasClass("pull-left")&&$ava.removeClass("pull-left"):$ava.hasClass("pull-left")||$ava.addClass("pull-left")}if (variant.available) {if (variant.inventory_management == null) {jQuery(_parent + " .product-availability").text("Many in stock")} else {jQuery(_parent + " .product-availability").text(" Many in stock") }} else {jQuery(_parent + " .product-availability").text("Sold Out"); } var shopifyimgurl = variant.featured_image ? variant.featured_image.src : mainImage; var imgurl = "<img class=\"full-width\" alt=\"\" src = \""+shopifyimgurl+"\" >"; if(jQuery(_parent+' .product-main-image__item .img_box_1').children().length > 0) { var detach = jQuery(_parent+' .product-main-image__item .img_box_1 img').detach(); jQuery(_parent+' .product-main-image__item .img_box_2').empty(); jQuery(_parent+' .product-main-image__item .img_box_2').append(detach);}jQuery(_parent+' .product-main-image__item .img_box_1').empty(); jQuery(_parent+' .product-main-image__item .img_box_1').append(imgurl); if (variant && variant.available) { jQuery(_parent + ' .addtocartqv').removeAttr('disabled'); jQuery(_parent + ' .addtocartqv').html('Add to Cart'); jQuery(_parent + " .control-console").show(); } else { jQuery(_parent + ' .addtocartqv').attr('disabled','disabled'); jQuery(_parent + ' .addtocartqv').text('Unavailable'); jQuery(_parent + " .control-console").hide(); } jQuery('.currency .active').trigger('click');}; function changePriceValue (cell, value) {jQuery(cell).html(Shopify.formatMoney(value, "<span class=money>${{amount}}</span>"))} function newVariantTextDataQv(e,t){""!=t?(jQuery(e).parent().show(),jQuery(e).text(t)):jQuery(e).parent().hide()}function selectGrid(_parent) {setTimeout(timeout, 5);function timeout() {if(jQuery(_parent + " .selector-wrapper").length > 2){jQuery(_parent + " .single-option-selector").addClass("select--wd");} else if(jQuery(_parent + " .selector-wrapper").length == 1){jQuery(_parent + " .single-option-selector").before("<label>Storage</label>");jQuery(_parent + " .single-option-selector").addClass("select--wd");}}};

</script> -->





<div class="loading-modal compare_modal">translation missing: en.general.search.loading</div><div class="ajax-success-compare-modal compare_modal" id="moda-compare" tabindex="-1" role="dialog" style="display:none"> <div class="overlay"> </div> <div class="modal-dialog modal-lg"><div class="modal-content content" id="compare-modal"> <div class="modal-header"><div class="modal-close"> <span class="compare-modal-close"><i class="fa fa-times-circle"></i></span></div><h4 class="modal-title">Compare Product</h4> </div> <div class="modal-body"><div class="table-wrapper table-responsive"> <table class="table table-hover"><thead> <tr class="th-compare"><th></th> </tr></thead><tbody id="table-compare"></tbody> </table></div> </div></div> </div></div><!-- scroll to top  -->
  <a href="#" class="scroll-top"></a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.4.0/jquery-migrate.min.js" integrity="sha512-QDsjSX1mStBIAnNXx31dyvw4wVdHjonOwrkaIhpiIlzqGUCdsI62MwQtHpJF+Npy2SmSlGSROoNWQCOFpqbsOg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php echo base_url('/public/frontend/assets/js/toastr.min.js')?>"></script>

    <script>
      $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        asNavFor: '.slider-nav'
      });
      $('.slider-nav').slick({
        // slidesToShow: 3,
        // slidesToScroll: 1,
        asNavFor: '.slider-for',
        slidesToShow: 3,
        // dots: true,
        centerMode: true,
        focusOnSelect: true
      });
    </script>

<script>

        function output(inp) {
          $(inp).appendTo("#cart-product");
        }

        function removeAllChildNodes(parent) {
            while (parent.firstChild) {
                parent.removeChild(parent.firstChild);
            }
        }

        function getDataCart(){
          var strurl="<?php echo base_url();?>"+'/gio-hang/lay-gio-hang';
            jQuery.ajax({
               url: strurl,
               type: 'GET',
               success: function(data) {
                  var str = data;
                  
                  str.replace(/\\n/g, "\\n")  
                    .replace(/\\'/g, "\\'")
                    .replace(/\\"/g, '\\"')
                    .replace(/\\&/g, "\\&")
                    .replace(/\\r/g, "\\r")
                    .replace(/\\t/g, "\\t")
                    .replace(/\\b/g, "\\b")
                    .replace(/\\f/g, "\\f");
                  // remove non-printable and other non-valid JSON chars
                  str = str.replace(/[\u0000-\u0019]+/g,""); 
                  str = JSON.parse(str);
                  removeAllChildNodes(document.getElementById("cart-product"));
                  output(str);   
                  countCart();              
               }
            });
         }
         function countCart(){
          var strurl="<?php echo base_url();?>"+'/gio-hang/dem-gio-hang';
            jQuery.ajax({
               url: strurl,
               type: 'GET',
               success: function(data) {
                  num = JSON.parse(data);
                  $("#countcartitem").text(num);
               }
            });
         }

         $("#offcanvas-cart-icon").click(function(){
            getDataCart();
         });

         function removeItemCart(id) {
            // alert(id);
            var strurl = "<?php echo base_url();?>" + '/gio-hang/xoa-khoi-gio';
            jQuery.ajax({
              url: strurl,
              type: 'GET',
              dataType: 'json',
              data: {
                id: id,
              },
              success: function(data) {
                getDataCart();
                if(window.location.href == '<?=base_url()?>/gio-hang/' || window.location.href == '<?=base_url()?>/gio-hang'){
                     location.reload();
                }
              }
            });
        }
   </script>

<script>

// my javascript

function addToCart(id){
   console.log(id);
}

$('.sp-plus').on('click', function(){
   var oldVal = $('#input').val();
   var newVal = (parseInt($('#input').val(),10) +1);
   $('input').val(newVal);
});

$('.sp-minus').on('click', function(){
   var oldVal = $('#input').val();
   if(oldVal > 0){
      var newVal = (parseInt($('#input').val(),10) -1);
   }else{
      var newVal = 0;
   }
  
   $('#input').val(newVal);
});

$('.sp-plus-cart').on('click', function(){
  var parent = $(this).parent();
  var input = parent.find("input");
  var oldVal = input.val();
  var newVal = (parseInt(input.val(),10) +1);
  input.val(String(newVal));
});

$('.sp-minus-cart').on('click', function(){
  var parent = $(this).parent();
  var input = parent.find("input");
   var oldVal = input.val();
   if(oldVal > 0){
      var newVal = (parseInt(input.val(),10) -1);
   }else{
      var newVal = 0;
   }
   input.val(newVal);
});


function onAddCart(id, qty){
   var strurl="<?php echo base_url();?>"+'/gio-hang/them-vao-gio';
   jQuery.ajax({
      url: strurl,
      type: 'POST',
      dataType: 'json',
      data: {
         id: id,
         qty: qty,
      },
      success: function(data) {
         document.location.reload(true);
         alert('Thêm sản phẩm vào giỏ hàng thành công !');
      }
   });
}

function onUpdateCart(){
   var strurl="<?php echo base_url();?>"+'/gio-hang/capnhat';
   jQuery.ajax({
      url: strurl,
      type: 'POST',
      dataType: 'json',
      data: {
         id: id,
         qty: qty,
         // option: option
      },
      success: function(data) {
         document.location.reload(true);
         alert('Thêm sản phẩm vào giỏ hàng thành công !');
      }
   });
}

function showResult(str) {
  if (str.length==0) {
      // var ele = document.getElementById("livesearch");
      // removeAllChildNodes(ele);
      document.getElementById("livesearch").innerHTML="";
      document.getElementById("livesearch").style.border="0px";
      return;
  }
  
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {

          var response = this.responseText;
          response = response.replace(/\\n/g, "\\n")  
             .replace(/\\'/g, "\\'")
             .replace(/\\"/g, '\\"')
             .replace(/\\&/g, "\\&")
             .replace(/\\r/g, "\\r")
             .replace(/\\t/g, "\\t")
             .replace(/\\b/g, "\\b")
             .replace(/\\f/g, "\\f");
          // remove non-printable and other non-valid JSON chars
          response = response.replace(/[\u0000-\u0019]+/g,""); 
          response = JSON.parse(response);
          
          if(typeof(response) == 'object'){
              response.forEach(showitem, removeAllChildNodes(document.getElementById("livesearch")));
          }else{
                  if(typeof(response) == 'string'){
                      shownotfound(response, removeAllChildNodes(document.getElementById("livesearch")));
                  }
          }
      }
  }
  xmlhttp.open("GET","<?= base_url()?>/livesearch/"+str,true);
  xmlhttp.send();
  }
  function shownotfound(response){
      const a = document.createElement('p');
      var linkText = document.createTextNode(response);
      a.appendChild(linkText);
      document.getElementById("livesearch").appendChild(a);
      document.getElementById("livesearch").style.border="1px solid #A5ACB2";
  }

  function showitem(item, index){
      var base_url = '<?= base_url()?>';
      const a = document.createElement('a');
      var linkText = document.createTextNode(item.name);
      a.appendChild(linkText);
      a.title = item.name;
      a.href = base_url+'/san-pham/'+item.slug;
      document.getElementById("livesearch").appendChild(a);
      document.getElementById("livesearch").style.border="1px solid #e5e5e5";
  }

  function removeAllChildNodes(parent) {
      while (parent.firstChild) {
          parent.removeChild(parent.firstChild);
      }
  }

  x=document.getElementsByClassName("toc-title");  // Find the elements
  for(var i = 0; i < x.length; i++){
    x[i].innerText="Mục lục";    // Change the content
  }


// end my javascript

</script>
<!-- toastr -->
<script>
   <?php 
   $session = session();
   $toastr = $session->get('msg');
   $toastrErr = $session->get('msgErr');
   if($toastr){
      echo "toastr.info('.$toastr.')";
   }

   if($toastrErr){
      echo "toastr.error('.$toastrErr.')";
   }
   ?>

</script>



  