

<?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>


    <table class="display border">
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
            <?php 
                foreach($shoporder as $val){
            ?>
            <tr>
              <td>
              <a data-toggle="tooltip" data-placement="top" title="xem chi tiết đơn hàng" href="<?= base_url().'/manage/order/detail/'.$val['id']?>"><i class="fas fa-info-circle"></i>&nbsp;&nbsp;&nbsp;<?= $val['id']?></a>
              </td>
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
            </tr>
            <?php }
            ?>
        </tbody>
    </table>



