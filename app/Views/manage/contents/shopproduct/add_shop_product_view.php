<?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>
<div class="row">
    <div class="col-12 col-md-8">

        <form action="<?php echo base_url() ?>/manage/shop-product/save" method="post" enctype='multipart/form-data'>


            <?php if (session()->getFlashdata('msgErr')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msgErr') ?></div>
            <?php endif; ?>

            <div class="mb-3">
                <label for="title" class="form-label">Tên</label>
                <input type="text" id="title" class="form-control" name="name" placeholder="Tên sản phẩm">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Giá</label>
                <input type="number" class="form-control" name="price" placeholder="Giá">
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Danh mục</label>
                        <select class="form-control select2 select2-hidden-accessible" name="category_id" aria-label="Default select example">
                            <?php
                            showCategories($shop_category);
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Nhà cung cấp</label>
                        <select class="form-control select2 select2-hidden-accessible" name="producer_id" aria-label="Default select example">
                            <?php
                            foreach ($shop_producer as $item) {
                                echo '<option value="' . $item['id'] . '">';
                                echo $item['name'];
                                echo '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Hiển thị giá</label>
                        <select class="form-control select2 select2-hidden-accessible" name="show_price" aria-label="Default select example">
                            <?php
                            echo '<option value="1" >Hiển thị giá</option>
                                <option value="0" >Hiển thị giá liên hệ</option>';
                            ?>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Áp dụng chương trình khuyến mại</label>
                        <select class="form-control select2 select2-hidden-accessible" name="id_discount" aria-label="Default select example">
                            <?php
                            foreach ($discount as $item) {
                                echo '<option value="' . $item['id'] . '">';
                                echo $item['title'];
                                echo '</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>

            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Slug</label>
                <input type="text" class="form-control" name="slug" placeholder="slug">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Chi tiết kỹ thuật</label>
                <textarea class="form-control" name="detail" id="content" rows="3"></textarea>
            </div>


            <div class="mb-3">
                <label for="title" class="form-label">Mô tả</label>
                <textarea class="form-control" name="summary" id="content" rows="3"></textarea>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Nội dung</label>
                <textarea class="form-control" name="description" style="min-heigh: 400px" placeholder="Nội dung" id="editor" rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-1">Lưu</button>
            <button type="button" onclick="history.back()" class="btn btn-light border">Hủy</button>
    </div>
    <div class="col-12 col-md-4">
        <?php echo view('manage/contents/SEO/seo', $data) ?>
        <div class="form-check form-switch mt-3">
            <input class="form-check-input" name="published" type="checkbox" id="flexSwitchCheckChecked" value="1" checked>
            <label class="form-check-label" for="flexSwitchCheckChecked">Xuất bản</label>
        </div>
        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="img" id="imgus" class="custom-file-input form-control">
                <label class="custom-file-label" for="customFile">Chọn ảnh đại diện</label>
            </div>
        </div>

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="img_list[]" multiple="" class="custom-file-input form-control">
                <label class="custom-file-label" for="customFile">Chọn nhiều ảnh</label>
            </div>
        </div>

        <div id="preview" class="pb-3"></div>
    </div>
    </form>
</div>