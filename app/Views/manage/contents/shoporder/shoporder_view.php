<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Đơn hàng</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Đơn hàng</li>
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


    <table id="example2" class="table table-bordered table-striped dataTable dtr-inline">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Ngày đặt</th>
                <th style="width: 10%">Trạng thái</th>
                <th>Tổng tiền</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($shoporder as $val){
            ?>
            <tr>
              <td><?= $val['id']?></td>
              <td><?= $val['cus_name']?></td>
              <td><?= $val['created_at']?></td>
              <td><?php 
              if($val['status']){
                echo '<i class="fas fa-check"></i>';
              }else{
                echo '<i class="fas fa-times"></i>';
              }
              
              ?></td>
              <td><?= $val['total']?></td>
              <td>
                <a href="<?= base_url().'/manage/order/detail/'.$val['id']?>">Xem chi tiết đơn hàng</a>&nbsp;&nbsp;&nbsp;
                <!-- <a class="text-danger" href="<?= $val['total']?>">Đã xử lý/ ẩn</a> -->
              </td>
            </tr>
            <?php }
            ?>
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


