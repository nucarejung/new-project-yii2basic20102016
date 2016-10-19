<?php
/* @var $this yii\web\View */
?>
<h1> <?php echo $title; ?> </h1>

<?php
print_r($person);
echo '<hr>';
foreach ($person as $key => $item) {
    echo $key . ' : ' . $item['fname'] . ' / ' . $item['lname'] . ' / ' . $item['email'] . '<br>';
}
echo '<hr>';
?>


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
foreach ($person as $key => $value) {
    
    echo '<tr>';
    echo '<td>'.($key+1).' </td>';
    echo '<td>'.$value['fname'].'</td>';
    echo '<td>'.$value['lname'].'</td>';
    echo '<td>'.$value['email'].'</td>';
    echo '</tr>';
}
?>

 
        </tbody>
    </table>
</div>