<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Myorder */

$this->title = 'Update Myorder: ' . $model->orderId;
$this->params['breadcrumbs'][] = ['label' => 'Myorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->orderId, 'url' => ['view', 'id' => $model->orderId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="myorder-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
