
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
    <form action="<?php echo base_url()?>/manage/shop-producer/update" method="post" enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" id="title" class="form-control" name="name" value="<?php echo $shopproducer->name ?>" placeholder="tiêu đề">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">url</label>
            <input type="text" class="form-control" name="url" value="<?php echo $shopproducer->url ?>" placeholder="url">
        </div>

        <input type="hidden" class="form-control" name="id" value="<?php echo $shopproducer->id ?>">
        <input type="hidden" class="form-control" name="producer_img" value="<?php echo $shopproducer->img ?>">

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="img" id="imgus" class="custom-file-input form-control">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
        </div>

        <div id="preview" class="pb-3">
          <?php if($shopproducer->img != ''){?>
          <img src="<?php echo base_url() ?>/public/uploads/producer/<?php echo $shopproducer->img ?>" width="200" height="200">
          <?php } ?>
        </div>

        <button type="submit"  class="btn btn-1">Lưu</button>
        <button type="button"  class="btn btn-light border" onclick="history.back()">Hủy</button>
    </form>
    </div>
</div>