<div class="content-wrapper" style="min-height: 1345.6px">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm mới bài viết technews.com.vn</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Thêm mới bài viết</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
<form action="<?= base_url()?>/manage/crawl/post" method="post">
    <div class="row">
    <div class="col-md-8">
    <div class="card card-primary card-outline card-outline-tabs">
    <div class="card-header p-0 border-bottom-0">
    </div>

    <div class="card-body">
  
    <div class="mb-3">
            <label for="title" class="form-label">Chọn danh mục</label>
            <select name="parentid" class="form-control select2 select2-hidden-accessible" >
            <?php 
              foreach($category as $val){
            ?>
              <option value="<?= $val['id'] ?>"><?= $val['title'] ?></option>
            <?php } ?>
          </select>
    </div>

    <div class="mb-3">
            <label for="title" class="form-label">Chọn trạng thái xuất bản</label>
            <select name="published" class="form-control select2 select2-hidden-accessible" >
              <option value="0">Lưu nháp</option>
              <option value="1">Xuất bản</option>
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