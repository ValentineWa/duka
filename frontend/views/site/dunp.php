
<!--Releases-->
<div class="container-fluid">
  <div class="row">
      <div class="col-md-12 popular-category">
         <div class="row">
             <div class="col-md-1"></div>
               <div class="col-md-5 wom">
                <div class="card border border-light ">
                    <img src="images/women7.jpg" class="img-fluid">
                    <h5 class="ctitle">Women</h5>
                    <p class="btitle">Shop Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
                    
                </div>
                </div>
                <div class="col-md-5 man">
                    <div class="card border border-light">
                        <img src="images/men3.jpg" class="img-fluid">
                        <h5 class="ctitle">Men</h5>
                        <p class="btitle">Shop Now <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
                        
                    </div>
                </div>
                <div class="col-md-1"></div>
         </div>

</div>
</div>
</div>
<!--end-->


<!--New Releases carousel-->
<div class="container-fluid ">
    <div class="row">
     <h2 class="text-left"> New Releases</h2>
     <div class="col-md-12 ">
        <!--Carousel Wrapper-->
<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
          class="fa fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->
  
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
      
    </ol>
    <!--/.Indicators-->
  
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
    <?php $i = 0;
       foreach ($shoeTotal as $shoez) {
         if (++$i > 6) break; ?>
      <!--First slide-->
      <div class="carousel-item active">
  
        <div class="col-md-4" style="float:left;">
         <div class="card mb-2">
            <img class="card-img-top img-fluid" src="<?= $shoez->shoesimages[0]->image ?>" alt="">
          <a href="<?= Url::to(['shoes/addtocart', 'shoesId'=>$shoez->shoesId])?>" class="btn btn-outline-dark btitley" role="button">Add to Cart</a>
           <button class="btn btn-outline-dark centered ">Quick View</button>
          </div>
          <h4 class="card-title"><?= $shoez['shoeName'] ?></h4>
          <p class="card-text">Ksh<span><?= $shoez['price']?></p>
        </div>
        
       
        <!-- <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid " src="images/women3.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
           </div> -->
        
           <!-- <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid " src="images/men1.jpg" alt="Card image cap">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
           </div>
   --><?php } ?>
      </div>
      <!--/.First slide-->
  
      <!--Second slide-->
      <!-- <div class="carousel-item">
  
        <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid" src="images/men3.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
           </div> -->
  
           <!-- <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid" src="images/kid5.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
           </div>
   -->
<!--         
           <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid" src="images/kid2.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
           </div>
  
      </div> -->
      <!--/.Second slide-->
  
     
  
    </div>
    
    <!--/.Slides-->
  
  </div>
  <!--/.Carousel Wrapper-->
              


</div>
      
        </div>
        </div>
      <!--end-->






      <!--Top kicks carousel-->
<div class="container-fluid kick">
    <div class="row">
     <h2 class="text-center"> Top Kicks</h2>
     <div class="col-md-12 ">
        <!--Carousel Wrapper-->
<div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example2" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
      <a class="btn-floating" href="#multi-item-example2" data-slide="next"><i
          class="fa fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->
  
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#multi-item-example2" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example2" data-slide-to="1"></li>
      
    </ol>
    <!--/.Indicators-->
  
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
    <?php $i = 0;
       foreach ($shoeTotal as $shoe) {
         if (++$i > 6) break; ?>
  
      <!--First slide-->
      <div class="carousel-item active">
  
        <div class="col-md-4" style="float:left">
         <div class="card mb-3">
            <img class="card-img-top " src="<?= Yii::$app->request->baseUrl.'/'.$shoe->shoesimages[0]->image ?>" alt="">
            <a href="<?= Url::to(['shoes/addtocart', 'shoesId'=>$shoe->shoesId])?>" class="btn btn-outline-dark btitle" role="button">Add to Cart</a>
            <button class="btn btn-outline-dark centered">Quick View</button>
      
          </div>
          <h4 class="card-title"><?= $shoe['shoeName'] ?></h4>
          <p class="card-text">Ksh<span><?= $shoe['price']?></p>
        </div>
        
  
       
        <!-- <div class="col-md-4" style="float:left">
            <div class="card mb-3">
               <img class="card-img-top " src="images/women5.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
           </div> -->
        
           <!-- <div class="col-md-4" style="float:left">
            <div class="card mb-3">
               <img class="card-img-top " src="images/kid4.jpg" alt="Card image cap">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
           </div> -->
  
      </div>
      <!--/.First slide-->
  
      <!--Second slide-->
      <!-- <div class="carousel-item">
       
        
  
           
      </div>
      </div> -->
      <!--/.Second slide-->
  <?php } ?>
     
  
    </div>
    <!--/.Slides-->
  
  </div>
  <!--/.Carousel Wrapper-->
              

  

      
        </div>
        </div>
      <!--end-->


      
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Shoes;
use frontend\models\Cart;
use frontend\models\Myorder;

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
 
<?php $form = ActiveForm::begin(); ?>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
  
    <div class="form-check">
        <? echo $form->field($model, 'myattribute')->radioList( [0=>'zero', 1 => 'one', 2 => 'two'], ['unselect' => null] );



 ?>
        <!-- <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
        <i class="fa fa-credit-card-alt" aria-hidden="true"></i><label class="form-check-label" for="exampleRadios1">
          Credit Card
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2"><i class="fa fa-cc-paypal" aria-hidden="true"></i>
        <label class="form-check-label" for="exampleRadios2">
         M-pesa
        </label> -->
      </div>
      
        <?= $form->field($model, 'cardNo')->textInput(); ?>
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
    <div class="checkout">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'cartId') ?>
        <?= $form->field($model, 'orderNo') ?>
        <?= $form->field($model, 'userId') ?>
        <?= $form->field($model, 'paymentMethod') ?>
        <?= $form->field($model, 'cardNo') ?>
        <?= $form->field($model, 'createdBy') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>



<!-- 
<?php
        Modal::begin([
            'header'=>'<h4>add to cart</h4>',
            'id'=>'addtocart',
            'size'=>'modal-md'
            ]);

        echo "<div id='addtocartContent'></div>";
        Modal::end();
      ?> -->



      

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Shoes;
use frontend\models\Cart;
use frontend\models\Myorder;

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
 
<?php $form = ActiveForm::begin(); ?>
    <div class="form-group">
      <label for="exampleFormControlInput1">Email address</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
  
    <div class="form-check">
        <? echo $form->field($model, 'myattribute')->radioList( [0=>'zero', 1 => 'one', 2 => 'two'], ['unselect' => null] );



 ?>
        <!-- <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
        <i class="fa fa-credit-card-alt" aria-hidden="true"></i><label class="form-check-label" for="exampleRadios1">
          Credit Card
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2"><i class="fa fa-cc-paypal" aria-hidden="true"></i>
        <label class="form-check-label" for="exampleRadios2">
         M-pesa
        </label> -->
      </div>
      
        <?= $form->field($model, 'cardNo')->textInput(); ?>
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
    <div class="checkout">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'cartId') ?>
        <?= $form->field($model, 'orderNo') ?>
        <?= $form->field($model, 'userId') ?>
        <?= $form->field($model, 'paymentMethod') ?>
        <?= $form->field($model, 'cardNo') ?>
        <?= $form->field($model, 'createdBy') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
    <?= Html::a('Generate', ['view-pdf', 'id' => $model->orderId], ['class' => 'btn btn-primary']) ?>

    public function actionCreate()
    {
        $model = new Myorder();
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            \Yii::$app->mailer->compose([
            
            ])
                ->setFrom(\Yii::$app->params['senderEmail'])
                ->setTo('awesomewaweru@gmail.com')
                ->setSubject('Your order has been successfull')
                ->send();
                Yii::$app->session->setFlash('success', 'Thank you for your purchase');
            return $this->redirect(['site/congrats', 'id' => $model->orderId]);
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }
</div>
<!-- <a href="<?= Url::to(['shoes/addtocart', 'shoesId'=>$shoe->shoesId])?>" class="btn btn-outline-info btitley" role="button">Add to Cart</a> -->
<a href="<?= Url::to(['shoes/addtocart', 'shoesId'=>$shoez->shoesId])?>" class="btn btn-outline-info btitley" role="button">Add to Cart</a>
<a href="<?= Url::to(['shoes/addtocart', 'shoesId'=>$shoez->shoesId])?>" class="btn btn-outline-info btitley" role="button">Add to Cart</a>
<a href="<?= Url::to(['shoes/addtocart', 'shoesId'=>$shoez->shoesId])?>" class="btn btn-outline-info btitley" role="button">Add to Cart</a>

<?= Html::a('Generate Pdf', ['viewpdf', 'shoesId' => $model->shoesId], ['class' => 'btn btn-primary'])?>
, 'shoesId'=>$shoeTotal->shoesId

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cart */
/* @var $form ActiveForm */

?>
<div class="addtocart">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'shoesId') ?>
        <?= $form->field($model, 'userId') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div>
'shoe




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
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cart */
/* @var $form ActiveForm */
?>
<div class="addtocart">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'shoesId') ?>
        <?= $form->field($model, 'userId') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- addtocart -->