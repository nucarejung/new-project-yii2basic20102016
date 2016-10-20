<?php
use miloschuman\highcharts\Highcharts;
/*
echo Highcharts::widget([
   'options' => [
      'title' => ['text' => 'Fruit Consumption'],
      'xAxis' => [
         'categories' => ['Apples', 'Bananas', 'Oranges']
      ],
      'yAxis' => [
         'title' => ['text' => 'Fruit eaten']
      ],
      'series' => [
         ['name' => 'Jane', 'data' => [1, 0, 4]],
         ['name' => 'John', 'data' => [5, 7, 3]]
      ]
   ]
]);
?>
*/

echo Highcharts::widget([
    'options' => [
        'chart' => [
            'type' => 'column'
        ],
        'title' => ['text' => 'จำนวนคอมพิวเตอร์'],
        'xAxis' => [
            'categories' => ['ทั้งหมด'],
        ],
        'yAxis' => [
            'title' => ['text' => 'ครั้ง']],
        'series'=>$chart,
        ],
    
]);


