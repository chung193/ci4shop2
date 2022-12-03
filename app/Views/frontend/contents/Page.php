<div class="content-wrapper">
    <div class="item p-4 border mt-4">
        <?php 
        $data = (object)$data[0];
        echo '<h3>'.$data->title.'</h3>';
        
        echo '<p><strong>'.$data->description.'</strong></p>';
        echo '<p>'.$data->content.'</p>';

        ?>
    </div>
    <div class="sticky-bar">
        <p><strong><i class="bi bi-share"></i></strong></p>
        <p><strong><i class="bi bi-twitter"></i></strong></p>
        <p><strong><i class="bi bi-facebook"></i></strong></p>
    </div>
</div>
