<?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>
    <table class="display border">
        <thead>
            <tr>
                <th>Tên khách hàng</th>
                <th>Email</th>
                <th>Điện thoại</th>
                <th>Địa chỉ</th>
                <th>Tỉnh/ Thành phố</th>
                <th>Ngày sinh</th>
                <th>Tuổi</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($customer as $row){
            ?>
            <tr>
                <td><?= $row['name']?></td>
                <td><?= $row['email']?></td>
                <td><?= $row['phone']?></td>
                <td><?= $row['address']?></td>
                <td><?= $row['ttp']?></td>
                <td><?= date('d-m-Y',strtotime($row['dob']))?></td>
                <td><?= calc_age(date('d-m-Y',strtotime($row['dob'])))?></td>
                <td>
                    <a data-toggle="tooltip" data-placement="top" title="sửa" class="text-info" href="<?php echo base_url()?>/manage/customer/edit/<?= $row['id'];?>"><i class="fas fa-edit"></i></a>
                    <a data-toggle="tooltip" data-placement="top" title="xóa" class="text-danger" href="<?php echo base_url()?>/manage/customer/delete/<?= $row['id'];?>"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>


