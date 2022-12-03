<main>
      <div class="customer-page theme-default-margin">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <div class="login">
          <div id="CustomerLoginForm">
            <form method="post" action="<?= base_url()?>/khach-hang/xac-thuc" id="customer_login" accept-charset="UTF-8">
            
            <div class="login-form-container">
              <div class="login-text">
                <h2>Đăng nhập</h2><p>Đằng nhập bằng cách điền các thông tin dưới đây.</p></div>
              <div class="login-form">
              <?php if(session()->getFlashdata('msgErr')):?>
                  <div class="alert alert-danger"><?= session()->getFlashdata('msgErr') ?></div>
              <?php endif;?>
                <input type="text" name="username" id="CustomerEmail" class="input-full" placeholder="Tên đăng nhập" autocorrect="off" autocapitalize="off" autofocus="">
                
                <input type="password" value="" name="password" id="CustomerPassword" class="input-full" placeholder="Mật khẩu">
                
                <div class="login-toggle-btn">
                  <div class="form-action-button">
                    <button type="submit" class="astor-button astor-button--medium">Đăng nhập</button>
                    
                    <!-- <a href="#recover" id="RecoverPassword">Quên mật khẩu?</a> -->
                    
                  </div>
                  <div class="account-optional-action">
                    <a href="<?= base_url()?>/khach-hang/dang-ky" id="customer_register_link">Tạo mới tài khoản</a>
                  </div>
                </div>
              </div>
            </div>
            </form>
          </div>
          <div id="RecoverPasswordForm" style="display: none;">
            <form method="post" action="/account/recover" accept-charset="UTF-8"><input type="hidden" name="form_type" value="recover_customer_password"><input type="hidden" name="utf8" value="✓">
            
            
            <div class="login-form-container">
              <div class="login-text">
                <h2>Đặt mật khẩu lại về mặc định</h2>
                <p>Chúng tôi sẽ gửi bạn 1 email để đặt lại mật khẩu.</p>
              </div>
              <div class="login-form">
                <input type="email" value="" name="email" id="RecoverEmail" class="input-full" placeholder="Email" autocorrect="off" autocapitalize="off">
                <div class="login-toggle-btn">
                  <div class="form-action-button">
                    <button type="submit" class="astor-button astor-button--medium">Gửi đi</button>
                    <a href="#" id="HideRecoverPasswordLink">Hủy</a>
                  </div>
                </div>
              </div>
            </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</div>


    </main>