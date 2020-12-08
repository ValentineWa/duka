<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Shoes;
use common\models\User;
use yii\helpers\ArrayHelper;
use\yii\helpers\Url;
use frontend\models\Images;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cart */
/* @var $form ActiveForm */
$shoes = Shoes::find()->JoinWith('shoesimages')->all();
$shoe = ArrayHelper::map(Shoes::find()->all(), 'shoesId', 'price');
$userId = User::find()->where(['id'=>Yii::$app->user->id])->one();

?>
<div class="addtocart">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'shoesId')->hiddenInput(['value' => $shoesId, 'readonly'=> true])->label(false) ?>
        <?= $form->field($model, 'userId')->hiddenInput(['value'=>$userId->id, 'readonly'=> true])->label(false) ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addtocart -->
