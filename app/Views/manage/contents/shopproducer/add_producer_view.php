<div class="row">
  <div class="col-12 col-md-6">
  <?php
$data = array(
    'title' => $title
);
echo view('manage/components/breadcrumb', $data)
?>

    <?php if(session()->getFlashdata('msgErr')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msgErr') ?></div>
    <?php endif;?>
    <form action="<?php echo base_url()?>/manage/shop-producer/save" method="post" enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" id="title" class="form-control" name="name" placeholder="tiêu đề">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">url</label>
            <input type="text" class="form-control" name="url" placeholder="url">
        </div>

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="img" id="imgus" class="custom-file-input form-control">
            </div>
        </div>

        <div id="preview" class="pb-3"></div>

        <button type="submit"  class="btn btn-1">Lưu</button>
        <button type="button"  class="btn btn-light border" onclick="history.back()">Hủy</button>
    </form>
  </div>
</div>




