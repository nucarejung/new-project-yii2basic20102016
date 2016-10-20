<?php
/* @var $this yii\web\View */
?>
<h1>รายงานการซ่อมคอม</h1>


<div class="container">
  
    
    <table class="table table-bordered table-condensed table-striped">
        <thead>
            <tr class="success">
                <th>ลำดับ</th>
                <th>ชื่อ</th>
                <th>ปัญหา</th>
                <th>อีเมล์</th>
            </tr>
        </thead>
        <tbody>

<?php
foreach ($data as $i => $item) {
    
    echo '<tr>';
    echo '<td>'.($i+1).' </td>';
    echo '<td>'.$item['brand'].'</td>';
    echo '<td>'.$item['problem'].'</td>';
    echo '<td>'.$item['cpu_type'].'</td>';
    echo '</tr>';
}
?>

 
        </tbody>
    </table>
</div>
