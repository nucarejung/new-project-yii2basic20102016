<?php
$this->title = 'รายงานประเภทคอมพิวเตอร์';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>reportcomtype/index</h1>


<div class="container">
    <h2>Striped Rows</h2>
    <p>The .table-striped class adds zebra-stripes to a table:</p>
   
    <?php
    use yii\helpers\Html;
    
    ?>
    <table class="table table-bordered table-condensed table-striped">
        <thead>
            <tr class="success">
                <th>ลำดับ</th>
                <th>รหัสประเภท</th>
                <th>ชื่อประเภท</th>
               <th>-</th>
            </tr>
        </thead>
        <tbody>

<?php
foreach ($data as $i => $item) {
    
    echo '<tr>';
    echo '<td>'.($i+1).' </td>';
    echo '<td>'.$item['com_type_id'].'</td>';
    echo '<td>'.$item['com_type_name'].'</td>';
    echo '<td>'.Html::a('<i class="glyphicon glyphicon-star"></i>รายละเอียด',['/report_com_detail','id'=>$item['com_type_id']]).'</td>';

    echo '</tr>';
}
?>

 
        </tbody>
    </table>
</div>