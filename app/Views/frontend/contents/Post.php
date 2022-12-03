<div class="content-wrapper">
    <div class="item p-4 border mt-4">
        <?php 
        $data = (object)$data[0];
        echo '<h1>'.$data->title.'</h1>';
        echo '<span class="post-category"><a href="'.base_url().'/'.$data->catslug.'">'.$data->cattitle.'</a></span><hr>';
        if($data->img){
            echo '<img src="'.base_url().'/public/uploads/post/'.$data->img.'" class="img-fluid">';
        }
        
        echo '<p class="mt-2"><strong>'.$data->description.'</strong></p>';
        echo '<p>'.$data->content.'</p>';

        ?>
    </div>
    <div class="sticky-bar">
        <p><strong><i class="bi bi-share"></i></strong></p>
        <p><strong><i class="bi bi-twitter"></i></strong></p>
        <p><strong><i class="bi bi-facebook"></i></strong></p>
        <p><strong><i class="bi bi-caret-up"></i></strong></p>
        <p><strong><?php echo $data->view?></strong></p>
        <p><strong><i class="bi bi-caret-down"></i></strong></p>
    </div>
</div>

