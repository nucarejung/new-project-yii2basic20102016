<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\ComType */

$this->title = 'Create Com Type';
$this->params['breadcrumbs'][] = ['label' => 'Com Types', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="com-type-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
