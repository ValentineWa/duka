<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Shoesimage */
/* @var $form ActiveForm */
?>
<div class="addimage">

<?php $form = ActiveForm::begin(['id' => 'image-create'],[
        'options' => ['enctype' => 'multipart/form-data']
    ]); ?>

        <?= $form->field($model, 'shoesId')->hiddenInput(['value' => $shoesId])->label(false) ?>
        <?= $form->field($model, 'image')->fileInput(['maxlength' => true]) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addimage -->
