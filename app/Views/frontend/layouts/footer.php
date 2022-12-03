<style>
    #section-footer_3.footer-container.footer-two {
  background: #f5f5f7 no-repeat scroll center center / cover;
}
#section-footer_3 .footer-single-widget h5.widget-title,
#section-footer_3 .footer-subscription-widget .footer-subscription-title {
  color: #1d1d1f;
}
#section-footer_3 .footer-single-widget .copyright-text p,
.footer-nav-container nav ul li a,
.footer-subscription-widget .subscription-subtitle,
.footer-single-widget p.footer-email,
.footer-single-widget p.footer-phone {
  color: #424245;
}
#section-footer_3 .footer-social-links ul li a i {
  color: #333333;
}
#section-footer_3.mailchimp-success {
  color: ;
}
#section-footer_3.footer-nav-container nav ul li a:hover,
.footer-subscription-widget--change-subscription-style
  .subscription-form
  button:hover,
.footer-single-widget p.footer-email a:hover {
  color: #333333;
}
.footer-subscription-widget .subscription-form input,
.footer-subscription-widget .subscription-form input:focus {
  border-color: #424245;
}
.footer-subscription-widget--change-subscription-style
  .subscription-form
  button {
  color: #424245;
}
.footer-subscription-widget .subscription-form input {
  color: #424245;
}
.footer-subscription-widget
  .subscription-form
  input::-webkit-input-placeholder {
  color: #424245;
}
.footer-subscription-widget .subscription-form input:-ms-input-placeholder {
  color: #424245;
}
.footer-subscription-widget .subscription-form input::-ms-input-placeholder {
  color: #424245;
}
.footer-subscription-widget .subscription-form input::placeholder {
  color: #424245;
}
.footer-subscription-widget .subscription-form input:-ms-input-placeholder {
  color: #424245;
}
.footer-subscription-widget .subscription-form input::-ms-input-placeholder {
  color: #424245;
}
#section-footer_3.footer_overlay::before {
  background: #000000;
  opacity: 0.5;
}

</style>
<div class="footer-container footer-two nrb_ftr pt-100 pt-sm-85 pt-xs-85" id="section-footer_3">
<div id="shopify-section-footer_3" class="shopify-section">
    <div class="footer-container footer-two nrb_ftr pt-100 pt-sm-85 pt-xs-85 " id="section-footer_3"> 
        <div class=" container wide ">
            <div class="row"> <!--======= single widget =======-->  
            <div class="col footer-single-widget">
                <div class="store-icons">  
                    <a href="<?= base_url()?>"> 
                        <img src="<?= base_url().'/public/uploads/logo/'.$base['info']->logo?>" class="img-fluid" alt=""> 
                    </a>
                </div>
                <div class="store-contact_info"> 
                    <p> 
                        <span> 
                            <i class="fa fa-home" aria-hidden="true"></i> 
                        </span> 
                        <?= $base['info']->address?>
                    </p>
                        <p> 
                            <span> 
                                <i class="fa fa-phone-square" aria-hidden="true"></i> 
                            </span> <a href="tel:<?= $base['info']->phone?>"><?= $base['info']->phone?> </a></p><p> <span> 
                                <i class="fa fa-envelope" aria-hidden="true"></i> 
                            </span> <a href="mailto:<?= $base['info']->email?> "><?= $base['info']->email?> </a>
                        </p>
                    </div> 
                </div> <!--======= End of single widget =======--> 
                <div class="col footer-single-widget">
                    <h5 class="widget-title">Về chúng tôi</h5>
                    <div class="footer-nav-container"> 
                        <nav>
                            <ul> 
                                <li><a href="<?= base_url().'/gioi-thieu'?>">Về chúng tôi</a></li>
                                <li><a href="<?= base_url().'/lien-he'?>">Liên hệ</a></li>
                                <li><a href="<?= base_url().'/chinh-sach-doi-tra'?>">Chính sách đổi trả</a></li>
                                <li><a href="<?= base_url().'/huong-dan-dat-hang'?>">Hướng dẫn đặt hàng</a></li> 
                            </ul> 
                        </nav>
                    </div><!--======= End of footer navigation container =======--> 
                </div> <!--======= End of single widget =======--> 
                <div class="col footer-single-widget">
                    <h5 class="widget-title">Thông tin</h5>
                    <div class="footer-nav-container"> 
                        <nav>
                            <ul> 
                                <li><a href="<?= base_url().'/danh-muc/tin-cong-nghe'?>"> Tin công nghệ</a></li>
                                <li><a href="<?= base_url().'/danh-muc/tuyen-dung'?>">Tuyển dụng</a></li>
                                <li><a href="<?= base_url().'/khuyen-mai'?>"> Khuyến mại</a></li>
                             </ul> 
                            </nav>
                        </div><!--======= End of footer navigation container =======--> 
                    </div> <!--======= End of single widget =======--> <!--======= single widget =======--> 
                    <div class="col footer-single-widget">
                        <h5 class="widget-title">Kết nối</h5>
                        <div class="footer-nav-container footer-social-links footer-social-links--change-color">
                             <nav>
                                <ul>
                                    <li><a href="<?= getenv('shop.facebook') ?>"><i class="fa fa-facebook"></i> facebook</a></li>
                                    <li><a href="<?= getenv('shop.instagram') ?>"><i class="fa fa-instagram"></i> instagram </a></li>  
                                    <li><a href="<?= getenv('shop.linkedin') ?>"><i class="fa fa-linkedin"></i> linkedin </a></li>
                                    <li><a href="<?= getenv('shop.pinterest') ?>"><i class="fa fa-pinterest"></i> pinterest </a></li>
                                 </ul> 
                                </nav>
                            </div> 
                        </div> 

                          <div class="col footer-single-widget">

                            <div class="footer-subscription-widget footer-subscription-widget--change-subscription-style">
                                <h5 class="widget-title">Kết nối</h5>  
                                <!--======= subscription form =======-->
                                <div class="fb-page" data-href="https://www.facebook.com/MacStoreHP" data-tabs="timeline" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/MacStoreHP" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/MacStoreHP">Mac Store HP</a></blockquote></div>                            </div>

                          </div>
                        </div>

                              <div class="row nrb_ftrb_c align-items-center mt-50 mt-sm-0 mt-xs-0 pb-15">
                                <div class=" col-lg-6 col-md-6 text-left col-sm-12 footer-single-widget mb-0 mb-sm-30">
                                    <div class="copyright-text">
                                        <p>Copyright © Macstore Hai Phong All Right Reserved.</p>
                                    </div>
                                </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                            <div class="zalo-chat">
                              <a href="<?= getenv('shop.zalo') ?>" target="_blank">
                                <img src="<?= base_url().'/public/frontend/assets/img/icon-zalo.png'?>">
                              </a>
                            </div>

                            <div class="call">
                              <a href="tel:<?= getenv('shop.call') ?>" target="_blank">
                                <img src="<?= base_url().'/public/frontend/assets/img/phone-call-icon.png'?>">
                              </a>
                            </div>

