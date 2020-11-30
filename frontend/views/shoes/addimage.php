<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Shoesimage */
/* @var $form ActiveForm */
?>
<div class="addimage">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'shoesId') ?>
        <?= $form->field($model, 'image')->fileInput() ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addimage -->
