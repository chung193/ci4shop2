<style>
  .errors ul{
    margin:0px;
  }

  .errors ul li{
    list-style: none;
}
.errors{
    color: #d02e2e;
    background-color: #f8d7da;
    border: none;
}
  </style>

<main>
      <div class="customer-page theme-default-margin">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2">
        <div class="login">
          <div class="login-form-container">
            <div class="login-text">
              <h2>Tạo mới tài khoản thành viên</h2>
              
              <p>Đăng ký bằng cách điền các thông tin phía dưới.</p>
              
            </div>
            <div class="register-form">
              <?php if(session()->getFlashdata('msgErr')):?>
                  <div class="alert alert-danger"><?= session()->getFlashdata('msgErr') ?></div>
              <?php endif;?>
              <form method="post" action="<?= base_url()?>/khach-hang/luu-thong-tin" id="create_customer" accept-charset="UTF-8">
              
                <label for="FirstName" class="hidden-label">Họ và tên</label>
                <input type="text" name="name" id="FirstName" class="input-full" placeholder="Họ và tên" autocapitalize="words" autofocus="">

                <label for="FirstName" class="hidden-label">Số điện thoại</label>
                <input type="text" name="phone" id="FirstName" class="input-full" placeholder="Số điện thoại" autocapitalize="words" autofocus="">

                <label for="Email" class="hidden-label">Email</label>
                <input type="email" name="email" id="Email" class="input-full" placeholder="Email" autocorrect="off" autocapitalize="off">

                <label for="LastName" class="hidden-label">Tên đăng nhập</label>
                <input type="text" name="username" id="LastName" class="input-full" placeholder="Tên đăng nhập" autocapitalize="words">

                <label for="CreatePassword" class="hidden-label">Mật khẩu</label>
                <input type="password" name="password" id="CreatePassword" class="input-full" placeholder="Mật khẩu">

                <label for="CreatePassword" class="hidden-label">Xác nhận lại mật khẩu</label>
                <input type="password" name="confirmpassword" id="CreatePassword" class="input-full" placeholder="Xác nhận lại mật khẩu">

                <div class="form-action-button">
                  <button type="submit" class="astor-button astor-button--medium">Tạo tài khoản</button>
                </div>
              </form>
              
              <div class="account-optional-action">
              	<a href="<?= base_url() ?>">Quay trở lại cửa hàng</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
    </main>