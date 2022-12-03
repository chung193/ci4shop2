

<div class="content-wrapper">

    <div class="item p-4 border mt-4">
        <?php 
        $data = (object)$data[0];
        echo '<h3>'.$data->title.'</h3>';
        echo '<p>'.$data->content.'</p>';

        ?>
    </div>

    <?php 
    foreach($post as  $value){
        echo '<div class="item p-4 border mt-4">';
        if($value['img']){
            echo '<span class="post-category"><a href="'.base_url().'/'.$value['catslug'].'">'.$value['cattitle'].'</a></span>';
            echo '<h3><a href="'.base_url().'/bai-viet/'.$value['slug'].'" >'.$value['title'].'</a></h3><p>'.$value['description'].'</p>';
            echo '<a style="display:inline-block" href="'.base_url().'/'.$value['slug'].'" ><img src="'.base_url().'/public/uploads/post/'.$value['img'].'" width="200"></a>';

            echo '<div class="row">';
            echo '<div class="col-md-6 button-redirect">
            </div>';
            echo '<div class="col-md-6 author d-flex align-items-end flex-column">
                <p>'.$value['username'].'</p>
                <p class="created">'.formatDate($value['createdat']).'</p>
            </div>';
            echo '</div>';
            echo '</div>';
        }else{
            echo '<span class="post-category"><a href="'.base_url().'/'.$value['catslug'].'">'.$value['cattitle'].'</a></span>';
            echo '<h3><a href="'.base_url().'/bai-viet/'.$value['slug'].'" >'.$value['title'].'</a></h3><p>'.$value['description'].'</p>';
            echo '<div class="row">';
            echo '<div class="col-md-6 button-redirect">
            </div>';
            echo '<div class="col-md-6 author d-flex align-items-end flex-column">
                <p>'.$value['username'].'</p>
                <p class="created">'.formatDate($value['createdat']).'</p>
            </div>';
            echo '</div>';
            echo '</div>';
        }
    }
    ?>

    <div class="sticky-bar">
        <p><strong><i class="bi bi-share"></i></strong></p>
        <p><strong><i class="bi bi-twitter"></i></strong></p>
        <p><strong><i class="bi bi-facebook"></i></strong></p>
    </div>
</div>
