<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Myorder */

$this->title = $model->orderId;
$this->params['breadcrumbs'][] = ['label' => 'Myorders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="myorder-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->orderId], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->orderId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Generate Order Report', ['viewpdf', 'id' => $model->orderId], [     'class' => 'btn btn-success'])?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'orderId',
            'userId',
            'paymentMethod',
            'phoneNo',
            'emailAddress:email',
        ],
    ]) ?>
   <?= Html::a('Finish', ['congrats'], [     'class' => 'btn btn-success'])?>
  
    
</div>
