<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chương trình khuyến mại</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Chương trình khuyến mại</li>
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
    <a href="<?php echo base_url()?>/manage/discount/add/" class="text-success m-2">Thêm mới</a>
    <table id="example2" class="table table-bordered table-striped dataTable dtr-inline">
        <thead>
            <tr>
                <th style="width:20%">Tiêu đề</th>
                <th>Ảnh</th>
                <th>Từ ngày</th>
                <th>Đến ngày</th>
                <th>Tỉ lệ giảm</th>
                <th>Số tiền giảm</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($discount as $row){
            ?>
            <tr>
                <td><?= $row['title']?></td>
                <td><img src="<?= base_url().'/public/uploads/discount/'.$row['banner']?>" width="200"></td>
                <td><?= $row['from_date']?></td>
                <td><?= $row['to_date']?></td>
                <td><?= $row['ratio']?></td>
                <td><?= $row['money']?></td>
                <td>
                    <a class="text-info" href="<?php echo base_url()?>/manage/discount/edit/<?= $row['id'];?>"><i class="fas fa-edit"></i></a>
                    <a class="text-danger" href="<?php echo base_url()?>/manage/discount/delete/<?= $row['id'];?>"><i class="fas fa-times"></i></a>
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

