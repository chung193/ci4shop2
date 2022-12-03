<main>
   <div class="theme-default-margin search-page">
      <div class="container">
         <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12">
               <h4 class="text-center page-search-title">Kết quả tìm kiếm cho từ khóa "<?= ($_GET['s'] == '')?'':$_GET['s']?>" của bạn:</h4>
               
               <div class="page-search-bar">
                  <form action="" method="get" class="page-search-form" role="search" style="position: relative;">
                     <input type="search" name="s" value="<?= $_GET['s']?>" placeholder="Tìm kiếm trong cửa hàng" class="" aria-label="Tìm kiếm trong cửa hàng" autocomplete="off">
                     <button type="submit">
                        <i class="ion-ios-search-strong"></i>
                     </button>
                     <ul class="search-results home-two" style="position: absolute; left: 0px; top: 38px; display: none;"></ul>
                  </form>
               </div>

               <div class="search-list">
                  
               <?php 
               if($_GET['s'] !== ''){
                  if(count($result) !== 0){
                     foreach($result as $val){
                        $data['product'] = $val;
                        echo view('frontend/component/product-simple',$data);
                     }
                  }
               }
                  
               ?>

               </div>
            </div>
         </div>
      </div>
   </div>
</main>