<div class="content row">
    <table id="datatable" class="display">
    <thead>
            <tr>
                <th>Tiêu đề chính</th>
                <th>Tiêu đề phụ</th>
                <th>Ảnh</th>
                <th>Url</th>
                <th>Vị trí</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach($banner as $row){
            ?>
            <tr>
                <th><?= $row->text_main?></th>
                <th><?= $row->text_sub?></th>
                <th><?= $row->img?></th>
                <th><?= $row->url?></th>
                <th><?= $row->location?></th>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>



