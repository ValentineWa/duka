<?php


use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Shoescategory;


/* @var $this yii\web\View */
/* @var $model frontend\models\Shoes */
/* @var $form yii\widgets\ActiveForm */

$categories = ArrayHelper::map(Shoescategory::find()->all(), 'categoryId', 'categoryName');

?>


<div class="shoes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'shoeName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shoeSize')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'brandId')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tags')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'categoryId')->dropDownList($categories) ?>

    <div class="form-group">
    <?= Html::submitButton('<span class="fa fa-forward"></span> Next', ['class' => 'btn btn-success']) ?>
  
    </div>

    <?php ActiveForm::end(); ?>

</div>
