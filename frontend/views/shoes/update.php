<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Shoes */

$this->title = 'Update Shoes: ' . $model->shoesId;
$this->params['breadcrumbs'][] = ['label' => 'Shoes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->shoesId, 'url' => ['view', 'id' => $model->shoesId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="shoes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
