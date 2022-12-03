<div class="content row">
    <table id="datatable" class="display">
        <thead>
            <tr>
                <th>Name</th>
                <th>Metatitle</th>
                <th>Default</th>
            </tr>
        </thead>
        <tbody>
        <?php showCategories($category);?>
        </tbody>
    </table>
</div>

<?php 
    function showCategories($categories, $parent_id = 0, $char = '')
    {
        foreach ($categories as $key => $row)
        {
            // Nếu là chuyên mục con thì hiển thị
            if ($row['parentid'] == $parent_id)
            {
                    echo '</option>';
                    echo '<tr>
                        <td>'.$char.$row['title'].'</td>
                        <td>'.$row['metatitle'].'</td>
                        <td>';
                            if($row['is_default']){
                                echo '<i class="bi bi-check-lg"></i>';
                            }
                    echo '</td>
                        
                    </tr>';
            }
                
                 
                // Xóa chuyên mục đã lặp
                unset($categories[$key]);
                 
                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                showCategories($categories, $row['id'], $char.'— ');
        }
    }
?>

