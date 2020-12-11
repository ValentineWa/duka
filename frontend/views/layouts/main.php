<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="h-75">
<?php $this->beginBody() ?>
<div class="wrap" style="background: url(images/desert2.jpg)">
<header class="header">
<nav class="navbar nav-boot navbar-expand-lg fixed-top navbar-light bg-light navbar-fixed">
        <a class="navbar-brand" href="site/index">Duka Prototype</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="container">
          <div class="collapse navbar-collapse pull-right" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="site/index">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="site/women">Women</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="site/men">Men</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="site/kids">Kids</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accessories</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="site/access">Gold</a>
                <a class="dropdown-item" href="site/access">Silver</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="site/access">Platinum</a>
              </div>
            </li>
          </ul>
        </div>
         <!-- ! search-cart-nav -->
            <div class="search-cart-nav">
              <ul class="navbar-nav mr-auto right">
            <li class="nav-item search">
              <form class="navbar-form navbar-left" action="<?= Url::to(['shoes/_search']) ?>" >
                <div class="input-group">
                  <input type="text" class="form-control" type="search" name="keyword" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-default" >
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
              </form> </li><!--/.search-->
           
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="cart_button" onlick="show_cart();" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item" href="site/cart">Total price <span class="pull-right">400</span></a>
              </div>
            </li>
            </ul>
          </div>
          <!-- end search -->
      </div>
      </nav>
</header>
<div class="container-fluid">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>
            <!--footer
<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="/docs/4.5/assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
        <small class="d-block mb-3 text-muted">© 2017-2020</small>
      </div>
      <div class="col-6 col-md">
        <h5>Features</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Cool stuff</a></li>
          <li><a class="text-muted" href="#">Random feature</a></li>
          <li><a class="text-muted" href="#">Team feature</a></li>
          <li><a class="text-muted" href="#">Stuff for developers</a></li>
          <li><a class="text-muted" href="#">Another one</a></li>
          <li><a class="text-muted" href="#">Last time</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Resources</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Resource</a></li>
          <li><a class="text-muted" href="#">Resource name</a></li>
          <li><a class="text-muted" href="#">Another resource</a></li>
          <li><a class="text-muted" href="#">Final resource</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>About</h5>
        <ul class="list-unstyled text-small">
          <li><a class="text-muted" href="#">Team</a></li>
          <li><a class="text-muted" href="#">Locations</a></li>
          <li><a class="text-muted" href="#">Privacy</a></li>
          <li><a class="text-muted" href="#">Terms</a></li>
        </ul>
      </div>
    </div>
  </footer>--><!--footer-->
<div class="container-fluid footer">
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2">
          <h5>My Account</h5>
         <p class="froot"><a href="site/login">Sign in</a></p>
         <p class="froot"><a href="duka/site/logout">Sign out</a></p>
         
         <p class="froot"><a href="site/signup"> Register</a></p>
         <p> Order Status</p>

        </div>
        <div class="col-md-2">
          <h5>Help</h5>
          <p>Shipping</p>
          <p>Returns</p>
          <p>Sizing</p>
        </div>
        <div class="col-md-2">
          <h5>About</h5>
          <p>Our Story</p>
          <p>Media</p>
          <p>Sustainability</p>
        </div>
        <div class="col-md-2">
          <h5>Legal Stuff</h5>
          <p>Terms of Use</p>
          <p>Terms of Sale</p>
          <p>Privacy Policy</p>
        </div>
        <div class="col-md-2 social">
          <h5>Follow Sam's</h5>
          <p><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></p>
          <p><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></p>
          <p><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></p>
          <p><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></p>
          
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4 copy">
          <p><i class="fa fa-copyright" aria-hidden="true"></i>2020 Sam's Shoes In. All Rights Reserved.</p>
       
        </div>
        <div class="col-md-4">

        </div>
      </div>
    </div>
  </div>
</div>








<!--end-->

            <!--footer-->
<?php $this->endBody() ?>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>












</body>
</html>
<?php $this->endPage() ?>
