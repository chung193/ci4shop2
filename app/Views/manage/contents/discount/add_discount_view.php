
<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Thêm mới chương trình khuyến mại</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Text Editors</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="row">
    <div class="col-md-12">
    <div class="card card-primary card-outline card-outline-tabs">
    <div class="card-header p-0 border-bottom-0">
    </div>
    
    <div class="card-body">

    <?php if(session()->getFlashdata('msg')):?>
        <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
    <?php endif;?>
    <form action="<?php echo base_url()?>/manage/discount/save" method="post" enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" id="title" class="form-control" name="title" placeholder="tiêu đề chính">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Nội dung</label>
            <textarea class="form-control" name="description" style="min-heigh: 400px" placeholder="Nội dung"  id="content" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" placeholder="URL">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Tỉ lệ giảm (%)</label>
            <input type="number" id="title" class="form-control" name="ratio" placeholder="Tỉ lệ giảm (%)">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Số tiền</label>
            <input type="number" id="title" class="form-control" name="money" placeholder="Số tiền">
        </div>

        <div class="form-group">
            <label>Chương trình chạy từ:</label>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                    </span>
                </div>
                <input type="text" name="date" class="form-control float-right" id="reservation">
            </div>
            <!-- /.input group -->
        </div>

        <div class="input-group mb-3">
            <div class="custom-file">
                <input type="file" name="img" id="imgus" class="custom-file-input">
                <label class="custom-file-label" for="customFile">Chọn ảnh</label>
            </div>
        </div>

        <div id="preview" class="pb-3"></div>

        <button type="submit"  class="btn btn-primary">Lưu</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>

                    <script>
                        function renderImage(currentImage) {
                            var img = document.createElement("img");
                            var width = 400;
                            img.src = currentImage;
                            img.width = width;
                            img.alt = "user image";
                            document.getElementById("preview").innerHTML = '';
                            document.getElementById("preview").appendChild(img);
                        }

                        function readURL(evt) {
                            console.log(evt);
                            var file = evt.target.files[0];
                            if(!file.type.match('image.*')){
                                alert("unknow format");
                            }

                            var reader = new FileReader();

                            reader.onload = function(evt) {
                                currentImage = evt.target.result;            
                                renderImage(currentImage);
                            };

                            reader.readAsDataURL(file);
                        }

                        document.getElementById('imgus').addEventListener('change', readURL, false);
                        
                    </script>

    <!-- <script>
        $('#reservation').daterangepicker({ startDate: '03/05/2005', endDate: '03/06/2005' });
    </script> -->

