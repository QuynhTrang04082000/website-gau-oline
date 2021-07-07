<!doctype html>
<!--[if !IE]><!-->
<html lang="vi">
<!--<![endif]-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta http-equiv="content-language" content="vi" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="robots" content="noodp,index,follow" />
<meta name='revisit-after' content='1 days' />
<meta name="keywords" content="">
<title>Gấu Bông Online</title>
<link rel="canonical" href="index.html">
<link rel="shortcut icon" href="assets/frontend/images/logo2.JPG" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="assets/css/add.css">
<link href='assets/frontend/100/047/633/themes/517833/assets/font-awesome.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/owl.carousel221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/responsive221b.css?1481775169361' rel='stylesheet' type='text/css' />
<link href='assets/frontend/100/047/633/themes/517833/assets/styles.scss221b.css?1481775169361' rel='stylesheet' type='text/css' />
<script src='assets/frontend/100/047/633/themes/517833/assets/jquery.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/100/047/633/themes/517833/assets/bootstrap.min221b.js?1481775169361' type='text/javascript'></script>
<script src='assets/frontend/assets/themes_support/api.jquerya87f.js?4' type='text/javascript'></script>
<link href='assets/frontend/100/047/633/themes/517833/assets/bw-statistics-style221b.css?1481775169361' rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/chosen.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.scrollbar.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/lightbox.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/slick.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/megamenu.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/dreaming-attribute.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
</head>
<body class="index">
<!-- header -->
<?php 
    //load MVC bang tay -> load file controller
    include "controllers/HeaderController.php";
    $obj = new HeaderController();
    $obj->index();
 ?>
<!-- end header -->
<div class="content">
  <div class="container">
    <h1 style="display:none;">Gấu Bông Online</h1>
    <div class="row">
      <div class="col-xs-12 col-md-3"> 
        
        <div class="online_support block" style="margin-top: -62px;width: 250px; ">
          <div class="new_title">
            <h2 style="background: pink;">Hỗ trợ trực tuyến</h2>
          </div>
          <div class="block-content" style="display: block;">
            <div class="sp_1" >
              <p>Tư vấn sản phẩm </p>
              <p>Mr Linh: (04) 3786 8904</p>
            </div>
            <div class="sp_1">
              <p>Tư vấn chuyển phát</p>
              <p>Mr Sơn: (04) 3786 8904</p>
            </div>
            <div class="sp_1">
              <p>Email liên hệ</p>
              <p>htnxkobog@mail.com</p>
            </div>
          </div>
        </div>
        <!-- end support online --> 
        <!-- box search -->
        <div class="panel panel-default" style="margin-top:15px; width: 250px;">
          <div class="panel-heading"> Tìm theo mức giá </div>
          <div class="panel-body">
            <ul class="list-group" style="border:0px;">
              <li class="list-group-item" style="border:0px;">Giá từ &nbsp;&nbsp;
                <input type="number" min="0" value="0" id="fromPrice" class="form-control" />
              </li>
              <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="number" min="0" value="0" id="toPrice" class="form-control"/>
              </li>
              <li class="list-group-item" style="border:0px; text-align:center">
                <input style="background: pink;" type="button" class="btn btn-warning" value="Tìm mức giá" onclick="location.href = 'index.php?controller=search&fromPrice=' + document.getElementById('fromPrice').value + '&toPrice=' + document.getElementById('toPrice').value;" />
              </li>
            </ul>
          </div>
        </div>
        <!-- end box search --> 
        
       <!-- hot news -->
        <div class="home-blog" style="width: 250px;">
          <h2 class="title"> <span>Tin tức</span></h2>
          <div class="row">
            <div class="owl-home-blog owl-home-blog-sidebar"> 
              <!-- list hot news -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news_detail&id=20" class="image"> <img src="assets/images/new.jpg" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news_detail&id=20">Bí kíp tán gái bằng gấu bông đẹp giá rẻ.</a></h3>
                    <p class="desc">
                    <p>Một thời gian dài để ý cô ấy nhưng bạn vẫ chưa biết cách nào thổ lộ. Trong khi đó quanh nàng có hàng tá vệ tinh vây quanh. Nếu chậm trễ, cơ hội sẽ tuột...</p>
                    </p>
                  </div>
                </div>

              </div>
              <!-- end list hot news --> 
                   <!-- list hot news -->
              <div class="item">
                <div class="article"> <a href="index.php?controller=news_detail&id=20" class="image"> <img src="assets/images/new.jpg" alt="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" title="Mua iPhone 6s và iPhone 6s Plus chính hãng ở đâu?" class="img-responsive"> </a>
                  <div class="info">
                    <h3><a href="index.php?controller=news_detail&id=20">Phương pháp giúp hạ gục nàng chỉ với 1 chú gấu bông</a></h3>
                    <p class="desc">
                    <p>Tác phẩm “Những ngày thơ ấu” là một tập hồi ký viết về tuổi thơ đầy cay đắng và khắc nghiệt của chính tác giả, nhà văn Nguyên Hồng.</p>
                    </p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- end hot news --> 
        <!-- adv --> 
        <img src="assets/images/trangtrong.jpg"> 
        <!-- end adv --> 
        
      </div>
      <div class="col-xs-12 col-md-9"> 
        <!-- main -->
        
        <?php echo $this->view; ?>
        
        <!-- end main --> 
      </div>
    </div>
   <!-- end adv --> 
    
  </div>
</div>
<div class="privacy">
  <div class="container">
    <div class="row">
      <div class="section-014">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="kobolg-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon"style="color: pink;">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Worldwide Delivery</h4>
                                <div class="desc">With sites in 5 languages, we ship to over 200 countries &amp;
                                    regions.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kobolg-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon"style="color: pink;">
                                <i class="fa fa-truck" aria-hidden="true"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Safe Shipping</h4>
                                <div class="desc">Pay with the world’s most popular and secure payment methods.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kobolg-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon"style="color: pink;">
                               <i class="fa fa-refresh" aria-hidden="true"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">365 Days Return</h4>
                                <div class="desc">Round-the-clock assistance for a smooth shopping experience.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="kobolg-iconbox style-02">
                        <div class="iconbox-inner">
                            <div class="icon" style="color: pink;">
                                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                            </div>
                            <div class="content">
                                <h4 class="title">Shop Confidence</h4>
                                <div class="desc">Our Buyer Protection covers your purchase from click to delivery.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>
</div>
<div class="section-008">
        <div class="kobolg-instagram style-01">
            <div class="instagram-owl owl-slick slick-initialized slick-slider" data-slick="{&quot;arrows&quot;:false,&quot;slidesMargin&quot;:15,&quot;dots&quot;:false,&quot;infinite&quot;:false,&quot;speed&quot;:300,&quot;slidesToShow&quot;:5,&quot;rows&quot;:1}" data-responsive="[{&quot;breakpoint&quot;:480,&quot;settings&quot;:{&quot;slidesToShow&quot;:2,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:768,&quot;settings&quot;:{&quot;slidesToShow&quot;:3,&quot;slidesMargin&quot;:&quot;10&quot;}},{&quot;breakpoint&quot;:992,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1200,&quot;settings&quot;:{&quot;slidesToShow&quot;:4,&quot;slidesMargin&quot;:&quot;15&quot;}},{&quot;breakpoint&quot;:1500,&quot;settings&quot;:{&quot;slidesToShow&quot;:5,&quot;slidesMargin&quot;:&quot;15&quot;}}]">
                
                
                
                
                
                
                
                
           
<footer id="footer" style="width: 1210px; margin-left: 145px;">
  <div class="section-001 section-009">
        <div class="container">
            <div class="kobolg-newsletter style-01">
                <div class="newsletter-inner">
                    <div class="newsletter-info">
                        <div class="newsletter-wrap">
                            <h3 class="title">Newsletter</h3>
                            <h4 class="subtitle">Get Discount 30% Off</h4>
                            <p class="desc">Suspendisse netus proin eleifend fusce sollicitudin potenti vel magnis
                                nascetur</p>
                        </div>
                    </div>
                    <div class="newsletter-form-wrap">
                        <div class="newsletter-form-inner">
                            <input class="email email-newsletter" name="email" placeholder="Enter your email ..." type="email">
                            <a href="#" class="button btn-submit submit-newsletter" style="background: pink;color: white;">
                                <span class="text">Subscribe</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  <div class="bottom-footer">
   <div class="section-010">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>© Copyright 2020 <a href="#">Kobolg</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6">
                    <div class="kobolg-socials style-01">
                        <div class="content-socials">
                            <ul class="socials-list">
                                <li>
                                    <a href="https://facebook.com" target="_blank" style="background: pink;color: white;" >
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com" target="_blank" style="background: pink;color: white;">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com" target="_blank" style="background: pink;color: white;">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.pinterest.com" target="_blank" style="background: pink;color: white;">
                                        <i class="fa fa-pinterest-p"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</footer>

<script src='assets/frontend/100/047/633/themes/517833/assets/owl.carousel.min221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/responsive-menu221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/elevate-zoom221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/main221b.js?1481775169361' type='text/javascript'></script> 
<script src='assets/frontend/100/047/633/themes/517833/assets/ajax-cart221b.js?1481775169361' type='text/javascript'></script>
<a href="#" class="backtotop active" style="margin-bottom: 20px; background: pink;">
    <i class="fa fa-angle-up"></i>
</a>

</body>
</html>