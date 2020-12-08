
<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use frontend\models\Shoes;
use frontend\models\Cart;
// use frontend\models\Shoesimage;



/* @var $this yii\web\View */
/* @var $model frontend\models\Listing */
/* @var $form yii\widgets\ActiveForm */

$cartList = Cart::find()->joinWith('shoes')->all();
$cartPrice = Cart::find()->joinWith('shoes')->sum('price');
// // $cartImage = Cart::find()->joinwith('shoes')->joinWith('shoesimages')->all();
// $posts = Cart::find()->joinWith('shoes','shoesimage')->all();
// $shot = Shoes::find()->joinWith('shoesimages')->all();
?>



  
<div class="container-fluid carrt" >
  
  <div class="row">
    <div class="col-md-12">
      <div class="row">
       
        <div class="card col-md-8 shopp shadow-lg p-3 mb-5 bg-white rounded ">
           <h4 class="d-flex justify-content-center">Shopping cart</h4>
        
         <!-- <div class="itemlist border-bottom">
          <div class="row">
          
            <div class="col-md-2 one">
             <div class="card border-0" style="width: 7rem;">
               <img src="" class="img-fluid">
             </div>
            </div>
        
            <div class="col-md-3">
              <h5></h5>
              <p></p>
              <p></p>
             <p> <i class="fa fa-trash-o trash" aria-hidden="true"></i></p>
            </div>
            <div class="col-md-2 four">
              <p><p>
            </div>
            <div class="col-md-3">
              <div class="quantity buttons_added">
                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="3" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
              </div>
            </div>
            <div class="col-md-2 four">
              <p><p>
            </div>
          </div>
         </div>
       -->

         <?php foreach ($cartList as $calist) { ?> 

         <div class="itemlist border-bottom">
          <div class="row">
            <div class="col-md-3 " style="width: 7rem;">
             <div class="card border-0">
               <img src="images/women3.jpg" class="img-fluid">
             </div>
            </div>
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
<!--         
        <div class="itemlist border-bottom">
          <div class="row">
            <div class="col-md-2">
             <div class="card border-0" style="width: 7rem;">
               <img src="images/women2.jpg" class="img-fluid">
             </div>
            </div>
            <div class="col-md-5">
              <p>Shoe Name</p>
              <p>Description</p>
              <p>Size</p>
              <p> <i class="fa fa-trash-o trash" aria-hidden="true"></i></p>
            </div>
            <div class="col-md-3">
              <div class="quantity buttons_added">
                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="3" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
              </div>
            </div>
            <div class="col-md-2">
              <p>Ksh.000</p>
            </div>
          </div>
        </div>
        <div class="itemlist border-bottom">
          <div class="row">
            <div class="col-md-2">
             <div class="card border-0" style="width: 7rem;">
               <img src="images/women6.jpg" class="img-fluid">
             </div>
            </div>
            <div class="col-md-5">
              <p>Shoe Name</p>
              <p>Description</p>
              <p>Size</p>
              <p> <i class="fa fa-trash-o trash" aria-hidden="true"></i></p>
            </div>
            <div class="col-md-3">
              <div class="quantity buttons_added">
                <input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="3" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
              </div>
            </div>
            <div class="col-md-2">
              <p>Ksh.000</p>
            </div>
          </div>
        </div> -->
        </div>
        <div class="col-md-4 proceed ">
          <div class="card shadow-lg p-3 mb-5 bg-white rounded " style="width: 18rem;">
            <button onclick="window.location.href='index.html';" class="btn btn-dark btn-lg btn-block rounded-0">Continue Shopping</button>
            <div class="card-header border-bottom">
              Order Summary
            </div>
            <div class="row">
              <div class="col-md-6">
               <p> Sub Total:</p>    
               <p>Tax:</p>
              <p>Total:</p>
              </div>
              <div class="col-md-6">
                <p>Ksh 00</p>
                <p>Ksh 00</p>
                <p><?=$cartPrice?></p>
              </div>
            </div>
             
          
           <a href="<?= Url::to(['shoes/checkout'])?>" class="btn btn-dark btn-lg" role="button">Checkout</a>
                
          </div>
         
        </div>
      </div>
    </div>

  </div>
</div>
