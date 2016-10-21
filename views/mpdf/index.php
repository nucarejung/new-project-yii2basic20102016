<table class="table table-bordered table-condensed table-striped">
        <thead>
            <tr class="success">
                <th>ลำดับ</th>
                <th>รหัสประเภท</th>
                <th>ชื่อประเภท</th>

            </tr>
        </thead>
        <tbody>

<?php
foreach ($data as $i => $item) {
    
    echo '<tr>';
    echo '<td>'.($i+1).' </td>';
    echo '<td>'.$item['com_type_id'].'</td>';
    echo '<td>'.$item['com_type_name'].'</td>';
   

    echo '</tr>';
}
?>

 
        </tbody>
    </table>