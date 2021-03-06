<?php

namespace app\controllers;

class First1Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $title='Zumojung';
        
        $person= [
            ['fname' => 'สมชาย', 'lname' => 'ใจดี', 'email' => 'som@hotmail.com'],
            ['fname' => 'สมหญิง', 'lname' => 'ใจงาม', 'email' => 'ying@hotmail.com'],
            ['fname' => 'สมปอง', 'lname' => 'ใจแสน', 'email' => 'pong@hotmail.com']
        ];
        
        return $this->render('index',['title'=>$title,'person'=>$person]);
    }

}
