
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