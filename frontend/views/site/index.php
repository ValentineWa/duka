<?php


use frontend\models\Shoes;
use frontend\models\Shoesimage;
use yii\helpers\Html;
use yii\helpers\Url;

$shoeTotal = Shoes::find()->joinWith('shoesimages')->all();


/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index d-flex align-items-center">
<div class="container-fluid">


<div class="explore">
        <h1>Built</h1>
            <h1>for flight</h1>
            <p>Introducing product name</p>
            <p>Our lightest shoe,Ever.</p>
            <p><button class="btn btn-dark btn-lg">Shop</button></p>
         </div>
      </div>
    </div>
  </div>
</div>
</div>


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
  
      <!--First slide-->
      <div class="carousel-item active">
  
        <div class="col-md-4" style="float:left;">
         <div class="card mb-2">
            <img class="card-img-top img-fluid" src="images/men4.jpg" alt="">
            
          </div>
          <h4 class="card-title">Product Name</h4>
          <p class="card-text">Ksh.2000</p>
        </div>
  
       
        <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid " src="images/women3.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
           </div>
        
           <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid " src="images/men1.jpg" alt="Card image cap">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
           </div>
  
      </div>
      <!--/.First slide-->
  
      <!--Second slide-->
      <div class="carousel-item">
  
        <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid" src="images/men3.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
           </div>
  
           <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid" src="images/kid5.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
           </div>
  
        
           <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid" src="images/kid2.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
           </div>
  
      </div>
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
  
      <!--First slide-->
      <div class="carousel-item active">
  
        <div class="col-md-4" style="float:left">
         <div class="card mb-3">
            <img class="card-img-top " src="images/men5.jpg" alt="">
            
          </div>
          <h4 class="card-title">Product Name</h4>
          <p class="card-text">Ksh.2000</p>
        </div>
  
       
        <div class="col-md-4" style="float:left">
            <div class="card mb-3">
               <img class="card-img-top " src="images/women5.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
           </div>
        
           <div class="col-md-4" style="float:left">
            <div class="card mb-3">
               <img class="card-img-top " src="images/kid4.jpg" alt="Card image cap">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
           </div>
  
      </div>
      <!--/.First slide-->
  
      <!--Second slide-->
      <div class="carousel-item">
       <?php foreach ($shoeTotal as $shoe) { ?>
        <div class="col-md-4" style="float:left">
            <div class="card mb-3">
            <!-- //shoesimages is a ...found on the shoes model -->
               <img class="card-img-top " src="<?= $shoe->shoesimages[0]->image ?>" alt="">
               
             </div>
             <h4 class="card-title"><?= $shoe['shoeName'] ?></h4>
             <p class="card-text">Ksh<span><?= $shoe['price']?></p>
           </div>
  <?php } ?>
           
      </div>
      </div>
      <!--/.Second slide-->
  
     
  
    </div>
    <!--/.Slides-->
  
  </div>
  <!--/.Carousel Wrapper-->
              



      
        </div>
        </div>
      <!--end-->






      <!--Subscribe section-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 subscribe">
            <div class="row">

                <div class="col-md-4"></div>
              <div class="col-md-4 tex">
                <h1 >Never miss a</h1>
                <h1 >drop</h1>
                <p>Recieve updates about new products and </p>
                <p>promotions.</p>
                <p><button type="button" class="btn btn-outline-dark btn-lg">Join Mailing List</button></p></div>
              <div class="col-md-4"></div>
        
        </div>
        </div>
    </div>
</div>
      <!--end-->


