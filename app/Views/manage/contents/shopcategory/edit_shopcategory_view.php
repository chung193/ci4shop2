<?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>
<form action="<?php echo base_url() ?>/manage/shop-category/update" method="post">


  <div class="row">
    <div class="col-12 col-md-8">
      <?php if (session()->getFlashdata('msg')) : ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
      <?php endif; ?>

      <div class="mb-3">
        <label for="title" class="form-label">Tiêu đề</label>
        <input type="text" id="title" class="form-control" name="name" value="<?php echo $shopcategory->title ?>" placeholder="tiêu đề">
      </div>


      <input type="hidden" class="form-control" name="id" value="<?php echo $shopcategory->id ?>">

      <div class="mb-3">
        <label for="title" class="form-label">Danh mục cha</label>
        <select class="form-control select2 select2-hidden-accessible" name="parent_id" aria-label="Default select example">
          <option selected value="0">Chọn 1 danh mục</option>
          <?php
          showShopCategories($shopcategory->parent_id, $shopcategory_list);
          ?>
        </select>
      </div>

      <div class="mb-3">
        <label for="title" class="form-label">Slug</label>
        <input type="text" class="form-control" name="slug" value="<?php echo $shopcategory->slug ?>" placeholder="slug">
      </div>
      <div class="mb-3">
        <label for="title" class="form-label">Nội dung</label>
        <textarea class="form-control" name="description" placeholder="Nội dung" rows="3"><?php echo $shopcategory->description ?></textarea>
      </div>

      



      <button type="submit" class="btn btn-1">Lưu</button>
      <button type="button" onclick="history.back()" class="btn btn-light border">Hủy</button>

    </div>
    <div class="col-12 col-md-4">
      <?php echo view('manage/contents/SEO/seo', $data) ?>
      <div class="form-check form-switch mt-3">
        <input class="form-check-input" name="is_default" type="checkbox" id="is_default" value="1" <?php if ($shopcategory->is_default) echo 'checked'; ?>>
        <label class="form-check-label" for="is_default">Mặc định</label>
      </div>
    </div>

  </div>
</form>