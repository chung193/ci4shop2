<?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>
<form action="<?php echo base_url() ?>/manage/shop-category/save" method="post">
    <div class="row">
        <div class="col-md-8">

            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>

            <div class="mb-3">
                <label for="title" class="form-label">Tiêu đề</label>
                <input type="text" id="title" class="form-control" name="name" placeholder="tiêu đề">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Danh mục cha</label>
                <select class="form-control select2 select2-hidden-accessible" name="parent_id" aria-label="Default select example">
                    <option selected value="0">Chọn 1 danh mục</option>
                    <?php
                    showCategories($shopcategory);
                    ?>
                </select>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Slug</label>
                <input type="text" class="form-control" name="slug" placeholder="slug">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Nội dung</label>
                <textarea class="form-control" name="description" placeholder="Nội dung" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-1">Lưu</button>
            <button type="button" class="btn btn-light border" onclick="history.back()">Hủy</button>
        </div>
        <div class="col-12 col-md-4">
            <?php echo view('manage/contents/SEO/seo', $data) ?>
            <div class="form-group mt-3">
                <div class="form-check">
                    <input class="form-check-input" name="is_default" type="checkbox" id="is_default" value="1">
                    <label class="form-check-label" for="is_default">Danh mục mặc định</label>
                </div>
            </div>
        </div>

</form>

</div>