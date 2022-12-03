<?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>

<a href="<?php echo base_url() ?>/manage/shop-category/add/" class="btn btn-1">Thêm mới</a>

<!-- import from csv file-->

<form action="<?php echo base_url(); ?>/manage/import/importFile" method="post" class="p-3 mb-3 mt-3 border rounded" enctype="multipart/form-data">
    Upload excel file :
    <div class="input-group mb-3">
        <div class="custom-file">
            <input type="file" name="file" class="custom-file-input form-control" value="" />
            <label class="custom-file-label" for="customFile">Choose file</label>
        </div>
    </div>
    <input type="hidden" name="type" value="shopcategory" />
    <input type="submit" name="submit" class="btn btn-1" value="Upload" />
</form>

<table class="display border">
    <thead>
        <tr>
            <th>Tên danh mục</th>
            <th>Slug</th>
            <th style="width: 10%">Mặc định</th>
            <th style="width: 10%">Thao tác</th>
        </tr>
    </thead>
    <tbody>
        <?php
        shop_cat_table($shopcategory); ?>
    </tbody>
</table>
</div>
</div>