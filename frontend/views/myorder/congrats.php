<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use frontend\models\Shoes;
use frontend\models\Myorder;

/* @var $this yii\web\View */
/* @var $model frontend\models\Shoesimage */
/* @var $form ActiveForm */


$shoel = Shoes::find()->joinWith('shoesimages')->all();

?>
<div class="col-md-3"></div>
<div class="congrats card col-md-6">
    <br>
<h1>CONGRATULATIONS</h1>
<br>
<br>
<br>
<h2>Your Order is successful </h2>
<h4>Thank You </h4>
<h4>for shopping with us</h4>

<br></div>

<div class="col-md-3"></div>