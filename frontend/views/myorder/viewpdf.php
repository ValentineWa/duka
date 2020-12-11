<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\widgets\DetailView;
use frontend\models\Shoes;
use frontend\models\Cart;

$cartList = Cart::find()->joinWith('shoes')->all();
$cartPrice = Cart::find()->joinWith('shoes')->sum('price');




?>
<h1>CONGRATULATIONS </h1><p><?= \Yii::$app->User->username ?></p>
<br>
<h2>Your Order is successful </h2>
<h4>Thank You for shopping with us</h4>



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
  <h4>Total Price Order:<?= $cartPrice ?></h4>
  <div class="card col-md-8 shopp shadow-lg p-3 mb-5 bg-white rounded ">
           
        
                 <?php foreach ($cartList as $calist) { ?> 

         <div class="itemlist border-bottom">
          <div class="row">
            
            <div class="col-md-6">
              <p><b>Name:</b> <?=$calist->shoes->shoeName ?></p>
              <p><b>Description:</b> <?=$calist->shoes->description ?></p>
              <p><b>Size:</b> <?=$calist->shoes->shoeSize ?></p>
              <!-- <p> <i class="fa fa-trash-o trash" aria-hidden="true"></i></p> -->
            </div>
            
            <!-- <div class="col-md-3">
              <div class="quantity buttons_added">
                <input type="button" onchange="quantityChannge(this)" value="-" id="quantity" class="minus"><input type="number" step="1" min="1" max="3" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
              </div>
            </div> -->
            <div class="col-md-3">
              <p>Ksh<?=$calist->shoes->price?></p>
            </div>
          </div>
        </div>
        <?php } ?>

        </div>
   


         </div>