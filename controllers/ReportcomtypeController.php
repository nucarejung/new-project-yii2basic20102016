<?php

namespace app\controllers;

class ReportcomtypeController extends \yii\web\Controller
{
    public function actionIndex()
    { 
//สร้างการเชื่อมต่อ
        $conn=\Yii::$app->db;
        $sql='select * from com_type';
        $cmd=$conn->createCommand($sql);
        $data=$cmd->queryAll();
        
        //print_r($data);
        //die();
        return $this->render('index',["data"=>$data]);
    
    }

}
