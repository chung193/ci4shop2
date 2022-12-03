<?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>
    <a href="<?php echo base_url()?>/manage/shop-producer/add/" class="btn btn-1">Thêm mới</a>

    <!-- import from csv file-->
    <form action="<?php echo base_url();?>/manage/import/importFile" method="post" class="p-3 border rounded mt-3 mb-3" enctype="multipart/form-data">
      Upload excel file : 
      <div class="input-group mb-3">
          <div class="custom-file">
              <input type="file" name="file" class="custom-file-input form-control" value="" />
              <label class="custom-file-label" for="customFile">Choose file</label>
          </div>
      </div>
      <input type="hidden" name="type" value="producer" />
      <input type="submit" name="submit" class="btn btn-1" value="Upload" />
    </form>
    
    <table class="display border">
        <thead>
            <tr>
                <th>Tên</th>
                <th>url</th>
                <th>Hinh anh</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            // print_r($producer);
            // die();
            foreach($producer as $val){?>
            <tr>
                <td><?php echo $val['name']?></td>
                <td><?php echo $val['url']?></td>
                <td><?php echo $val['img']?></td>
                <td>
                    <a data-toggle="tooltip" data-placement="top" title="sửa" href="<?php echo  base_url()?>/manage/shop-producer/edit/<?php echo  $val['id']?>" class="text-info"><i class="fas fa-edit"></i></a>
                    <a data-toggle="tooltip" data-placement="top" title="xóa" href="<?php echo  base_url()?>/manage/shop-producer/delete/<?php echo  $val['id']?>" class="text-danger"><i class="fas fa-times"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>


