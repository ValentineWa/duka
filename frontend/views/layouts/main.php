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
<div class="wrap" style="background: url(images/desert1.jpg)">
<header class="header">
<nav class="navbar nav-boot navbar-expand-lg fixed-top navbar-light bg-light navbar-fixed">
        <a class="navbar-brand" href="index.html">Duka Prototype</a>
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
              <a class="nav-link" href="women.html">Women</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="men.html">Men</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="site/about">Kids</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="site/searchresult">result</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="site/cart">cart</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accessories</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="access.html">Gold</a>
                <a class="dropdown-item" href="access.html">Silver</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="access.html">Platinum</a>
              </div>
            </li>
          </ul>
        </div>
         <!-- ! search-cart-nav -->
            <div class="search-cart-nav">
              <ul class="navbar-nav mr-auto right">
            <li class="nav-item search">
              <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search">
                  <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </div>
              </form> </li><!--/.search-->
           
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="shoes/cart.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="shoes/cart.php">Item(s)  <span class="centered">Quality</span> <span class="pull-right">Price</span></a>
                <a class="dropdown-item" href="shoes/cart.php">Vans 1   <span class="centered">1</span><span class="pull-right">200</span></a>
                <a class="dropdown-item" href="shoes/cart.php">Jordan x <span class="centered">1</span> <span class="pull-right">200</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Total price <span class="pull-right">400</span></a>
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
  </footer>-->
   <!--footer-->
<div class="container-fluid ">
  <div class="row ">
    <div class="col-lg-12 footer">
      <div class="row">
                        
          <div class="col-lg-2">
            <h5 class="foot">My Account</h5>
              <ul>
                <li>Sign in</li>
                <li>Register</li>
                <li>Order Status</li>
               </ul>
          </div>
           <div class="col-lg-2">
               <h5 class="foot">Help</h5>
                 <ul>
                  <li>Shipping</li>
                  <li>Returns</li>
                  <li>Sizing</li>
                 </ul>
           </div>
                   
           <div class="col-lg-2 ">
             <h5  class="foot">About</h5>
              <ul>
                <li>Our story</li>
                <li>Media</li>
                <li>Sustainability</li>
              </ul>
            </div>
                       
            <div class="col-lg-2 ">
              <h5 class="foot">Legal stuff</h5>
                <ul>
                 <li>Terms of use</li>
                 <li>Terms of sale</li>
                 <li>Privacy Policy</li>
                </ul>
             </div>


            <div class="col-lg-3">
             <h5 class="foot">Follow Sam's</h5>
               <ul id="social" >
                 <li><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></li>
                 <li><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></li>
                 <li><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></li>
                 <li><i class="fa fa-linkedin-square fa-lg" aria-hidden="true"></i></li>
               </ul>
            </div>
           </div>
           <div class="row">
             <div class="col-lg-12 copy">
              <i class="fa fa-copyright" aria-hidden="true"></i>2020 Sam's Shoes In. All Rights Reserved.             </div>
           </div>
                </div> 

            </div>

          </div>
          <!--end-->
            <!--footer-->
<?php $this->endBody() ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>












</body>
</html>
<?php $this->endPage() ?>
