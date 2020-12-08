<?php

use yii\helpers\Html;
use common\models\User;
use frontend\models\Cart;
use yii\widgets\ActiveForm;
use frontend\models\Shoes;

/* @var $this yii\web\View */
/* @var $model frontend\models\Myorder */
/* @var $form ActiveForm */

$userId = user::find()->where(['id'=>Yii::$app->user->id])->one();
$total_shoes = Cart::find()->JoinWith('shoes')->all();
$cartPrice = Cart::find()->JoinWith('shoes')->sum('price');

?>
    
<div class="container-fluid carrt">
    <h4 class="d-flex justify-content-center">Check Out</h4>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-8 card shadow-lg p-3 mb-5 bg-white rounded shopp">
 <h5>Billing Details</h5>
 
<?php $form = ActiveForm::begin(); ?>
<?= $form->field($model, 'userId')->hiddenInput(['value'=>$userId->id, 'readonly'=> true])->label(false) ?> ?>
    <div class="form-group">
    <?= $form->field($model, 'emailAddress') ?>
    </div>
  
    <div class="form-check">
    <?= $form->field($model, 'paymentMethod')->dropDownList([ 'Credit Card' => 'Credit Card', 'M-Pesa' => 'M-Pesa', '' => '', ], ['prompt' => '']) ?>

     
      </div>
      
      <?= $form->field($model, 'phoneNo') ?>
        <!-- <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="23458"> -->
     
      <!-- <button onclick="window.location.href='site.index';" class="btn btn-success btn-lg btn-block rounded-0">Place Order</button>
                 -->
      <div class="form-group">
            <?= Html::submitButton('Place Order', ['class' => 'btn btn-success btn-lg btn-block rounded-0']) ?>
        </div>
  <?php ActiveForm::end(); ?>




           </div>
           <div class="col-md-4 ">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded " style="width: 18rem;">
                <button onclick="window.location.href='site/index';" class="btn btn-dark btn-lg btn-block rounded-0">Continue Shopping</button>
                <div class="card-header border-bottom">
                  Order Summary
                </div>
                <div class="row">
                  <div class="col-md-6">
                   <p> Sub Total:</p>    
                   <p>Tax:</p>
                  <h5>Total:</h5>
                  </div>
                  <div class="col-md-6">
                    <p>Ksh 00</p>
                    <p>Ksh 00</p>
                    <p><?=$cartPrice?></p>
                  </div>
                </div>
                 
              
                </div>
             
        </div>
        </div>
        </div>
    </div>
    </div>