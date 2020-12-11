<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\MyorderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="myorder-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'orderId') ?>

    <?= $form->field($model, 'userId') ?>

    <?= $form->field($model, 'paymentMethod') ?>

    <?= $form->field($model, 'phoneNo') ?>

    <?= $form->field($model, 'emailAddress') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
