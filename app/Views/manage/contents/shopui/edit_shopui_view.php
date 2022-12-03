<?php 
  // echo gettype($shopui);
?>
<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chỉnh sửa UI trang web</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Chỉnh sửa UI trang web</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="row">
    <div class="col-md-12">
    <div class="card card-primary card-outline card-outline-tabs">
    <div class="card-header p-0 border-bottom-0">
    </div>

    <div class="card-body">
    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
    <?php endif;?>
    <form action="<?php echo base_url()?>/manage/shop-ui/update" method="post" enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="title" class="form-label">Text trên top header</label>
            <input type="text" id="title" class="form-control" name="text_top_header" placeholder="Text trên top header" value="<?php echo $shopui->text_top_header?>">
        </div>
        

        <input type="hidden" class="form-control" name="id" placeholder="meta title" value="<?php echo $shopui->id?>">

        <button type="submit" class="btn btn-primary">Lưu lại</button>
    </form>
</div>
</div>
    </div>
    </div>
    </div>
    </section>
</div>


