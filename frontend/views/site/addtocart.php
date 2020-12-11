


<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Shoes;
use common\models\User;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use frontend\models\Images;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cart */
/* @var $form ActiveForm */
$shoes = Shoes::find()->JoinWith('shoesimages')->all();
$shoe = ArrayHelper::map(Shoes::find()->all(), 'shoesId', 'price');
$userId = User::find()->where(['id'=>Yii::$app->user->id])->one();
$shoey = ArrayHelper::map(Shoes::find()->all(), 'shoesId', 'shoeName');
?>

<div class="addtocart">

    <?php $form = ActiveForm::begin(['id'=> 'addtocarrt']); ?>
<div class="shoey">
        <?= $form->field($model, 'shoesId')->dropDownList($shoey) ?>
        
    </div>

        <?= $form->field($model, 'userId')->hiddenInput(['value'=>$userId->id, 'readonly'=> true])->label(false) ?>
       
        <div class="col-md-8">
              
              <div class="row no-gutters">
                <div class="col-md-6">
                  <img src="images/women4.jpg" class="card-img img-fluid" alt="...">
                </div>
                <div class="col-md-6">
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <p class="card-text lead">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <p class="card-title lead"><span>Ksh 1999</span></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star checked"></span>
                  <span class="fa fa-star"></span>

                </div>
              </div>
            </div>
              </div>
        
              <div class="form-group">
        	
            <?= Html::submitButton('Add to Cart', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addtocart -->