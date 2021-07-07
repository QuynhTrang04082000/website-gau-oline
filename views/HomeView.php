<?php 
	//load LayoutTrangChu.php
	$this->layoutPath = "LayoutTrangChu.php";
 ?>
<div class="special-collection">
          <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
              <div class="col-lg-10">
                <h2 style="margin-top: 10px;">HOT PRODUCT</h2>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="tabs-content row">
            <div id="content-tabb1" class="content-tab content-tab-proindex" style="display:none">
              <div class="clearfix"> 
              	<?php 
              		$products = $this->modelHotProducts();
              	 ?>
              	 <?php foreach($products as $rows): ?>
                <!-- box product -->
                <div class="col-xs-6 col-md-2 col-sm-6 " style="position: relative;">
                  <div style="position: absolute; width: 30px; line-height: 30px; border-radius: 30px; background: black; color:white; text-align: center;"><?php echo $rows->discount; ?>%</div>
                  
                  <div class="product-grid" id="product-1168979" style="height: 350px; overflow: hidden;">
                    <div class="image"> <a href="#"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a> </div>
                    <div class="info">
                      <h3 class="name" style="font-size: 16px;"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                     
                      <p class="price-box"> <span class="special-price"> <span  class="product-price" style="color: #FF6666;font-size: 20px;" > <b><?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?></b> </span><b style="font-size: 20px; color: #FF3E96">₫ </b></span> </p>
                      <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
                      <div class="action-btn">
                        <form>
                          <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button" style="background:#FF99CC; color: white;">Add to Cart</a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end box product --> 
                <?php endforeach; ?>
                
              </div>
            </div>
          </div>
        </div>
         <div class="row">
          <div>
        <div class="kobolg-banner style-02 left-center">
            <div class="banner-inner">
                <figure class="banner-thumb">
                    <img src="assets/images/biagau.png" style="width: 1170px;height: 280px;margin-left: 15px;" class="attachment-full size-full" alt="img"></figure>
                <div class="banner-info container" style="margin-left: 25px;">
                    <div class="banner-content">
                        <div class="title-wrap" style="margin-top: -45px;" >
                            <div class="banner-label" style="color: #00FFFF;">
                                Bộ sưu tập Gấu Bông mini
                            </div>
                            <h6 class="title"style="color: #00FFFF;">
                                BEST SELLER </h6>
                        </div>
                        <div class="button-wrap">
                           
                            <a class="button" target="_self" href="#" ><span>Shop now</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        </div>
        <?php 
        	$categories = $this->modelGetCategories();
         ?>
         <?php foreach($categories as $rowsCategories): ?>
        <!-- category product -->
        <div class="special-collection">
          <div class="tabs-container">
            <div class="row" style="margin-top:10px;">
              <div class="head-tabs head-tab1 col-lg-11">
                <h2><?php echo $rowsCategories->name; ?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <div class="tabs-content row">
            <div id="content-taba4" class="content-tab content-tab-proindex"> 
              
              <?php 
              		$products = $this->modelGetProducts($rowsCategories->id);
              	 ?>
              	 <?php foreach($products as $rows): ?>
                <!-- box product -->
                <div class="col-xs-6 col-md-2 col-sm-6 ">
                   <div class="product-grid" id="product-1168979" style="height: 350px; overflow: hidden;">
                    <div class="image"> <a href="#"><img src="assets/upload/products/<?php echo $rows->photo; ?>" title="<?php echo $rows->name; ?>" alt="<?php echo $rows->name; ?>" class="img-responsive"></a> </div>
                    <div class="info">
                      <h3 class="name" style="font-size: 16px;"><a href="index.php?controller=products&action=detail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                     
                      <p class="price-box"> <span class="special-price"> <span  class="product-price" style="color: #FF6666;font-size: 20px;" > <b><?php echo number_format($rows->price-($rows->price*$rows->discount)/100); ?></b> </span><b style="font-size: 20px; color: #FF3E96">₫ </b></span> </p>
                      <p class="price-box"> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=1"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=2"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=3"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=4"><img src="assets/frontend/images/star.jpg"></a> <a href="index.php?controller=products&action=rating&id=<?php echo $rows->id; ?>&star=5"><img src="assets/frontend/images/star.jpg"></a> </p>
                      <div class="action-btn">
                        <form>
                          <a href="index.php?controller=cart&action=create&id=<?php echo $rows->id; ?>" class="button" style="background:#FF99CC; color: white;">Add to Cart</a>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- end box product --> 
                <?php endforeach; ?>
               
            </div>
          </div>
        </div>
        <!-- /category product --> 
        <?php endforeach; ?>
        
        
        
        <!-- hot news -->
        <div class="home-blog">
          <h2 class="title"> <span>Tin tức</span></h2>
          <div class="row">
            <div class="owl-home-blog owl-home-blog-bottompage"> 
            <?php 
            	$hotNews = $this->modelGetHotNews();
             ?>
             <?php foreach($hotNews as $rows): ?>
              <!-- new item -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news&action=detail&id=<?php echo $id; ?>" class="image"> <img src="assets/upload/news/<?php echo $rows->photo; ?>" alt="<?php echo $rows->name; ?>" title="<?php echo $rows->name; ?>" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a class="text3line" href="index.php?controller=news&action=detail&id=<?php echo $rows->id; ?>" style="font-weight: bold;"><?php echo $rows->name; ?></a></h3>
                    <p class="desc"><?php echo $rows->description; ?></p>
                  </div>
                </div>
              </div>
              <!-- /news item --> 
             <?php endforeach; ?> 
               
              
            </div>
          </div>
        </div>
        <!-- /hotnews -->