<?php

namespace app\controllers;

class ReportcomserviceController extends \yii\web\Controller
{
    public function actionIndex()
    {
//สร้างการเชื่อมต่อ
        $conn=\Yii::$app->db;
        $sql='select t.com_type_name,count(c.com_id)as cdata from com c
left join com_type t on t.com_type_id=c.com_type_id
group by c.com_type_id
';
        $cmd=$conn->createCommand($sql);
        $data=$cmd->queryAll();
        
  
        

        return $this->render('index',["data"=>$data]);
    }

}
