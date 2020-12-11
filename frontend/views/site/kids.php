<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use frontend\models\Shoes;
use frontend\models\Shoesimage;

// $shoeTotal = Shoes::find()->all();

$shoeTotal = Shoes::find()->where(['categoryId'=> 3])->joinWith('shoesimages')->all();


?>
<div class="container-fluid added">
<h1 class="d-flex justify-content-center">Kids Collection</h1>
  <h5 class="d-flex justify-content-center">Checkout our vast kids collection</h5>
  
   <div class="row">
   

     
          <div class="col-md-2 cate">
            <div class="card rounded-0" style="width: 12rem;">
              <div class="card-header">
                Featured
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Accessories</li>
                <li class="list-group-item">Men</li>
                <li class="list-group-item">Kids</li>
                <li class="list-group-item">Women</li>
              </ul>
            </div>
         </div>
         <div class="col-md-10">
<div class="row">
<?php foreach ($shoeTotal as $shoe) { ?>
  <div class="col-md-4">
    <div class="card border-0 woman">
      <img class="img-fluid" src="<?= Yii::$app->request->baseUrl.'/'.$shoe->shoesimages[0]->image ?>">
     <div> <p class="btitle font-italic"><?=$shoe->shoeName ?></p></div>
      <div><p class="btitlde font-weight-light">Ksh<span><?= $shoe->price ?></p></div>
       </div>
  </div>
  <?php } ?>
  <div class="col-md-4">
    <div class="card border-0 woman">
      <img class="img-fluid" src="images/women5.jpg">
      <div> <p class="btitle font-italic">Women</p></div>
      <div><p class="btitlde font-weight-light">Ksh 2000</p></div>
  </div>
  </div>
 
  
  

  <div class="col-md-12 mina">
  <div class="row">
    <div class="col-md-4">
      <div class="card border-0 woman">
        <img class="img-fluid" src="images/women5.jpg">
       <div> <p class="btitle font-italic">Women</p></div>
        <div><p class="btitlde font-weight-light">Ksh 2000</p></div>
         </div>
    </div>
    
    <div class="col-md-4">
      <div class="card border-0 woman">
        <img class="img-fluid" src="images/women5.jpg">
        <div> <p class="btitle font-italic">Women</p></div>
        <div><p class="btitlde font-weight-light">Ksh 2000</p></div>
    </div>
    </div>
    
    <div class="col-md-4">
      <div class="card border-0 woman">
        <img class="img-fluid" src="images/women5.jpg">
        <div> <p class="btitle font-italic">Women</p></div>
        <div><p class="btitlde font-weight-light">Ksh 2000</p></div>
    </div>
    </div>
  </div>
</div>

<div class="col-md-12 nina">
  <div class="row">
    <div class="col-md-4">
      <div class="card border-0 woman">
        <img class="img-fluid" src="images/women5.jpg">
       <div> <p class="btitle font-italic">Women</p></div>
        <div><p class="btitlde font-weight-light">Ksh 2000</p></div>
         </div>
    </div>
   
    <div class="col-md-4">
      <div class="card border-0 woman">
        <img class="img-fluid" src="images/women5.jpg">
        <div> <p class="btitle font-italic">Women</p></div>
        <div><p class="btitlde font-weight-light">Ksh 2000</p></div>
    </div>
    </div>
    
    <div class="col-md-4">
      <div class="card border-0 woman">
        <img class="img-fluid" src="images/women5.jpg">
        <div> <p class="btitle font-italic">Women</p></div>
        <div><p class="btitlde font-weight-light">Ksh 2000</p></div>
    </div>
    </div>
  </div>
 </div>
</div>
</div>


<!--end-->
