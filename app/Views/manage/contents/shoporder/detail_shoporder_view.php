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


    <table  class="table table-bordered">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Tên khách hàng</th>
                <th>Ngày đặt</th>
                <th style="width: 10%">Trạng thái</th>
                <th>Tổng tiền</th>
            </tr>
        </thead>
        <tbody>
            <tr>
              <td><?= $order->id?></td>
              <td><?= $order->cus_name?></td>
              <td><?= $order->created_at?></td>
              <td><?php 
              if($order->status){
                echo '<i class="fas fa-check"></i>';
              }else{
                echo '<i class="fas fa-times"></i>';
              }
              
              ?></td>
              <td><?= price_format($order->total)?></td>
            </tr>
        </tbody>
    </table>

    <div class="row mb-2 mt-2">
          <div class="col-sm-6">
            <h1>Chi tiết cho đơn hàng này </h1>
          </div>
    </div>   

    <table id="example2" class="table table-bordered table-striped dataTable dtr-inline">
        <thead>
            <tr>
                <th>Sản phẩm</th>
                <th>Số lượng</th>
                <th>Giá</th>
                <th>Khuyến mại áp dụng</th>
                <th>Giá sau khuyến mại</th>
                <th>Tổng tiền</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach($detail as $val){
            ?>
            <tr>
              <td><?= $val['pro_name']?></td>
              <td><?= $val['qty']?></td>
              <td><?= price_format($val['price'])?></td>
              <td><?php 
              if($val['dis_id'] != 1){
                echo $val['title'];
              }
              
              ?></td>
              <td><?php
              if($val['dis_id'] == 1){
                $sub_total = $val['price'];
                echo  price_format($val['price']);
              }else{
                $now = date('Y-m-d');
                $sub_total = 0;
                if($now > $val['from_date'] && $now < $val['to_date']){
                  if($val['ratio'] != 0){
                    $sub_total = $val['price']-(($val['price']/100)*$val['ratio']);
                    echo price_format($sub_total);
                  }elseif($val['money'] != 0){
                    $sub_total = $val['price']-$val['money'];
                    echo price_format($sub_total);
                  }
                }else{
                  $sub_total = $val['price'];
                  echo price_format($sub_total);
                }
              }
              ?></td>
              <td><?= price_format($sub_total*$val['qty']) ?></td>
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


