<div class="content-wrapper" style="min-height: 1345.6px">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm mới sản phẩm từ trang laptop 88</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm mới sản phẩm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
<form action="<?= base_url()?>/manage/crawl" method="post">
    <div class="row">
    <div class="col-md-8">
    <div class="card card-primary card-outline card-outline-tabs">
    <div class="card-header p-0 border-bottom-0">
    </div>

    <div class="card-body">
  
    <div class="mb-3">
            <label for="title" class="form-label">Chọn nhà cung cấp</label>
            <select name="producer_id" class="form-control select2 select2-hidden-accessible" >
            <?php 
              foreach($shop_producer as $val){
            ?>
              <option value="<?= $val['id'] ?>"><?= $val['name'] ?></option>
            <?php } ?>
          </select>
    </div>

    <div class="mb-3">
            <label for="title" class="form-label">Chọn nhà danh mục</label>
            <select name="category_id" class="form-control select2 select2-hidden-accessible" >
            <?php 
              foreach($shop_category as $val){
            ?>
              <option value="<?= $val['id'] ?>"><?= $val['name'] ?></option>
            <?php } ?>
          </select>
    </div>


    <div class="mb-3">
            <label for="title" class="form-label">URL</label>
            <input type="text" class="form-control" value='<?= $url?>' name="url" placeholder="url">
    </div>


  <input type="submit" class="btn btn-primary" value="Thêm">
</form> 
</div>
    </div>
    </div>
    </div>
    </form>
    </section>
    
</div>
</body>
</html>