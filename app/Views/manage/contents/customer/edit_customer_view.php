
<div class="content-wrapper" style="min-height: 1345.6px">

<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chỉnh sửa customer</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url().'/manage/dashboard'?>">Trang chủ</a></li>
              <li class="breadcrumb-item active">Chỉnh sửa customer</li>
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
    <form action="<?php echo base_url()?>/manage/customer/update" method="post" enctype='multipart/form-data'>
        <div class="mb-3">
            <label for="title" class="form-label">Tên khách hàng</label>
            <input type="text" id="title" class="form-control" name="name" value="<?= $customer->name ?>" placeholder="tiêu đề chính">
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Email</label>
            <input type="text" class="form-control" name="email" value="<?= $customer->email ?>" placeholder="Tiêu đề phụ">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Điện thoại</label>
            <input type="text" class="form-control" name="phone" value="<?= $customer->phone ?>" placeholder="Điện thoại">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Điạ chỉ</label>
            <input type="text" class="form-control" name="address" value="<?= $customer->address ?>" placeholder="Số nhà, xã phường">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Thành phố</label>
            <select class="form-control select2 select2-hidden-accessible"  name="matp" aria-label="Default select example">
                <option selected>Chọn một thành phố</option>
                <?php 
                        foreach ($ttp as $item)
                        {
                         // Nếu là chuyên mục con thì hiển thị
                             if($item['matp'] == $customer->matp){
                                 echo '<option value="'.$item['matp'].'" selected>';
                                     echo $item['name'];
                                 echo '</option>';
                             }else{
                                 echo '<option value="'.$item['matp'].'">';
                                     echo $item['name'];
                                 echo '</option>';
                             }
                        }  
                ?>
        </select>
        </div>

        

        <div class="mb-3">
            <label for="title" class="form-label">Ngày sinh khách hàng</label>
            <input type="date" class="form-control" name="dob" value="<?= $customer->dob ?>" placeholder="Ngày sinh">
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Đổi mật khẩu</label>
            <input type="text" class="form-control" name="pw" value="" placeholder="Mật khẩu tùy chọn">
            <button type="submit"  class="btn btn-primary mt-3">Reset về mặc định (123456)</button>
        </div>

        <input type="hidden" class="form-control" name="id" value="<?= $customer->id ?>" >


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

