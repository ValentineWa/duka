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
<div class="container-fluid bloody" >


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






      <!--New Releases-->

<div class="container-fluid kick">
<h2 class="text-center">New Releases</h2>
    <div class="row">
        <div class="col-md-12 subscribe">
            <div class="row">
            <?php $i = 0;
       foreach ($shoeTotal as $shoez) {
         if (++$i > 4) break; ?>
  
            <div class="col-md-3 ">
                    <div class="card border border-light rounded"> <a href="<?= Url::to(['site/viewitem', 'shoesId'=>$shoez->shoesId])?>">
                   
                        <img src="images/men3.jpg" class="img-fluid">
                       
                       <!-- modal btn -->
               <a href="<?= Url::to(['shoes/addtocart', 'shoesId'=>$shoez->shoesId])?>" class="btn btn-outline-info btitley" role="button">Add to Cart</a>
               <a href="" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-info  centered" role="button">Quick View
              
                <p></p>
            </a>
               

                 </div>
                 </a>
                    <h4 class="card-title"><?= $shoez['shoeName'] ?></h4>
              <p class="card-text">Ksh<span><?= $shoez['price']?></p>
                </div>
                </a>
                <?php } ?>
             
               
       </div>
       </div>
       </div>
       </div>
       <!-- single add to cart modal -->
       <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                <div class="col-md-4">
                  <img src="" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                  <h3><?= $shoez->shoeName?></h3>
                  <hr>
                  <p>There are many variations of passages of Lorem Ipsum.</p>
                  <hr>
                  <span> Ksh<?= $shoez->price?></span>
                  <div class="clear-fix"></div>
                  <h4><?= $shoez->description ?></h4>
                  <p class="text-muted">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; es</p>
                </div>
                </div>
              </div>
              <div class="modal-footer">
              <a href="<?= Url::to(['shoes/addtocart', 'shoesId'=>$shoez->shoesId])?>" class="btn btn-dark" role="button">Add to Cart</a>
              
              </div>
            </div>
          </div>
        </div>
        <!-- end single add to cart modal -->
       <!--end-->
       <!--Top Kicks-->
<div class="container-fluid kick">
<h2 class="text-center"> Top Kicks</h2>
    <div class="row">
        <div class="col-md-12 subscribe">
            <div class="row">
            <?php $i = 0;
       foreach ($shoeTotal as $shoe) {
         if (++$i > 4) break; ?>
  
            <div class="col-md-3">
                    <div class="card border border-light rounded"> <a href="<?= Url::to(['site/viewitem', 'shoesId'=>$shoez->shoesId])?>" >
                        <img src="images/men5.jpg" class="img-fluid">
                        
                         <a href="<?= Url::to(['shoes/addtocart', 'shoesId'=>$shoe->shoesId])?>" class="btn btn-outline-info btitley" role="button">Add to Cart</a>
                            <!-- modal btn -->
              <a href="" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-info  centered" role="button">Quick View
              
                <p></p>
            </a>
                 </div>
                 </a>
                    <h4 class="card-title"><?= $shoe['shoeName'] ?></h4>
              <p class="card-text">Ksh<span><?= $shoe['price']?></p>
                </div>
                <?php } ?>
            
              </div>
       </div>
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
