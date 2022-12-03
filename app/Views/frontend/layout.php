
<!doctype html>
<html lang="vi">
  <?php echo view('frontend/layouts/head', $test);?>

  <body id="astor" class="template-index  ">
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="xloDK4eR"></script>
      <style>
        main,.wrapper, .shopify-section, html{
          background-color:#fbfbfb;
        }

        .single-widget-product,.item{
          padding:10px 10px 0 10px;
          border-radius: 10px;
          background:white
        }

        .item{
          margin: 4px;
        }
        </style>
    </div>

  <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js#xfbml=1&version=v2.12&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v15.0" nonce="8uWAps4u"></script>    


    <div class="wrapper">
            <?php echo view('frontend/layouts/header', $test);?>
            <?php 
              echo view($test['subview'], $test);
            ?>
            <?php echo view('frontend/layouts/footer', $test);?>
    </div>
    <?php echo view('frontend/layouts/endbody', $test);?>
    <div class="fb-customerchat"
      attribution=setup_tool
      page_id="231744405452433"
      theme_color="#67b868"
      logged_in_greeting="Macstore Hải Phòng xin chào quý khách!"
      logged_out_greeting="Macstore Hải Phòng xin chào quý khách!"
      greeting_dialog_display="hide">
    </div>
  </body>
</html>

