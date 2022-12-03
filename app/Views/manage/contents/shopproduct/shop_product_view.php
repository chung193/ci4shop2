<?php
$data = array(
  'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>

<a href="<?php echo base_url() ?>/manage/shop-product/add/" class="btn btn-1 mb-3">Thêm mới</a>

<!-- import from csv file-->
<form action="<?php echo base_url(); ?>/manage/import/importFile" method="post" class="p-3 mb-4 mt-4 rounded border" enctype="multipart/form-data">
  <h3><strong>Thêm sản phẩm bằng file csv</strong></h3>
  <p>Bạn có thể thêm sản phẩm bằng file csv với mẫu có sẵn</p>
  Upload csv file :
  <div class="input-group mb-3">
    <div class="custom-file">
      <input type="file" name="file" class="custom-file-input form-control" value="" />
      <label class="custom-file-label" for="customFile">Chọn file csv</label>
    </div>
  </div>

  <div class="input-group mb-3">
    <div class="img-file">
      <label class="img-file-label" for="img">Chọn nhiều file ảnh</label>
      <input type="file" class="form-control" name="img_list[]" multiple="" value="" />
    </div>
  </div>

  <input type="hidden" name="type" value="product" />
  <button type="submit" name="submit" class="btn btn-1" />Upload</button>
</form>

<table class="display border">
  <thead>
    <tr>
      <th>Tên</th>
      <th>slug</th>
      <th>Giá</th>
      <th>Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <?php
    // print_r($shopproduct);
    // die();
    foreach ($shopproduct as $val) { ?>
      <tr>
        <td><?php echo $val['name'] ?></td>
        <td><?php echo $val['slug'] ?></td>
        <td><?php echo price_format($val['price']) ?></td>
        <td>
          <a data-toggle="tooltip" data-placement="top" title="sửa" href="<?php echo  base_url() ?>/manage/shop-product/edit/<?php echo  $val['id'] ?>" class="text-info"><i class="fas fa-edit"></i></a>
          <a data-toggle="tooltip" data-placement="top" title="xóa" href="<?php echo  base_url() ?>/manage/shop-product/delete/<?php echo  $val['id'] ?>" class="text-danger"><i class="fas fa-times"></i></a>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>