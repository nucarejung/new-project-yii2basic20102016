<?php
/* @var $this yii\web\View */
?>
<h1>report-com-detail/index</h1>


<div class="container">
    <h2>Striped Rows</h2>
    <p>The .table-striped class adds zebra-stripes to a table:</p>
    <table class="table table-bordered table-condensed table-striped">
        <thead>
            <tr class="success">
                <th>ลำดับ</th>
                <th>ชื่อ</th>
                <th>นามสกุล</th>
                <th>อีเมล์</th>
            </tr>
        </thead>
        <tbody>

<?php
foreach ($data as $i => $item) {
    
    echo '<tr>';
    echo '<td>'.($i+1).' </td>';
    echo '<td>'.$item['brand'].'</td>';
    echo '<td>'.$item['asset_code'].'</td>';
    echo '<td>'.$item['cpu_type'].'</td>';
    echo '</tr>';
}
?>

 
        </tbody>
    </table>
</div>