<div class="content-wrapper">
    <div class="item p-2 border mt-4">
        <div class="filter"><strong><i class="bi bi-award"></i> Hot nhất</strong></div>
        <div class="filter"><strong><i class="bi bi-sun"></i> Mới nhất</strong></div>
        <div class="filter"><strong><i class="bi bi-arrow-up-right-circle"></i> Top bài viết</strong></div>
        <div class="filter"><strong>...</strong></div>
    </div>
<?php

    foreach($homePost as $value){
        echo '<div class="item p-4 border mt-4">';
        if($value['img']){
            echo '<span class="post-category"><a href="'.base_url().'/'.$value['catslug'].'">'.$value['cattitle'].'</a></span>';
            echo '<h3><a href="'.base_url().'/'.$value['slug'].'" >'.$value['title'].'</a></h3><p>'.$value['description'].'</p>';
            echo '<a style="display:inline-block" href="'.base_url().'/'.$value['slug'].'" ><img src="'.base_url().'/public/uploads/post/'.$value['img'].'" style="width: 100%;margin-bottom: 10px"></a>';

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
            echo '<h3><a href="'.base_url().'/'.$value['slug'].'" >'.$value['title'].'</a></h3><p>'.$value['description'].'</p>';
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
</div>