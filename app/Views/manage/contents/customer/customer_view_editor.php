<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Banner</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Banner</li>
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
    <a href="<?php echo base_url()?>/manage/banner/add/" class="text-success m-2">Thêm mới</a>
    <table id="example2" class="table table-bordered table-striped dataTable dtr-inline">
        <thead>
            <tr>
                <th>Tiêu đề chính</th>
                <th>Tiêu đề phụ</th>
                <th>Ảnh</th>
                <th>Url</th>
                <th>Vị trí</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($banner as $row){
            ?>
            <tr>
                <td><?= $row['text_main']?></td>
                <td><?= $row['text_sub']?></td>
                <td><img src="<?= base_url().'/public/uploads/banner/'.$row['img']?>" width="200"></td>
                <td><a href="<?= $row['url']?>"><?= $row['url']?></a></td>
                <td><?= $row['location']?></td>
                <td>
                    <a class="text-info" href="<?php echo base_url()?>/manage/banner/edit/<?= $row['id'];?>">Sửa</a>
                    <a class="text-danger" href="<?php echo base_url()?>/manage/banner/delete/<?= $row['id'];?>">Xóa</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
</div>
                </div>
              </div>
              <!-- /.card -->
        </div>
</div>
</div>
    </div>
    </div>
</div>
</section>
</div>

