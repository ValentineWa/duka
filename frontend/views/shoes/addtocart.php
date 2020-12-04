<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cart */
/* @var $form ActiveForm */

$userId = user::find()->where(['id'=>Yii::$app->user->id])->one();
?>
<div class="addtocart card shadow-lg p-3 mb-5 bg-white rounded addcart">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'shoesId')->hiddenInput(['value' => $shoesId])->label(false) ?>
        <?= $form->field($model, 'userId')->hiddenInput(['value'=>$userId->id])->label(false) ?>
       
 
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addtocart -->
