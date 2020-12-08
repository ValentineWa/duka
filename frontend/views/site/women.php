<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use frontend\models\Shoes;
use frontend\models\Shoesimage;

// $shoeTotal = Shoes::find()->all();

$shoeTotal = Shoes::find()->where(['categoryId'=> 1])->joinWith('shoesimages')->all();

$this->title = 'Women Collections';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

  </div>


<div class="container-fluid added">
 
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
     <div> <p class="btitle font-italic"><?= $shoe['shoeName'] ?></p></div>
      <div><p class="btitlde font-weight-light">Ksh<span><?= $shoe->price ?></p></div>
       </div>
  </div><?php } ?>
</div>

</div>


<!--end-->
