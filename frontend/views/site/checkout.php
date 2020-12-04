
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Shoes;
use frontend\models\Cart;

/* @var $this yii\web\View */
/* @var $model frontend\models\Listing */
/* @var $form yii\widgets\ActiveForm */
$cartPrice = Cart::find()->joinWith('shoes')->sum('price');
?>





<div class="container-fluid carrt">
    <h4 class="d-flex justify-content-center">Check Out</h4>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-8 card shadow-lg p-3 mb-5 bg-white rounded shopp">
 <h5>Billing Details</h5>
 <form>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
        <i class="fa fa-credit-card-alt" aria-hidden="true"></i><label class="form-check-label" for="exampleRadios1">
          Credit Card
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2"><i class="fa fa-cc-paypal" aria-hidden="true"></i>
        <label class="form-check-label" for="exampleRadios2">
         M-pesa
        </label>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Card Number</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="23458">
      </div>
      <button onclick="window.location.href='site.index';" class="btn btn-success btn-lg btn-block rounded-0">Place Order</button>
                
  </form>




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