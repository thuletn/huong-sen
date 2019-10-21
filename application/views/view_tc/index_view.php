<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nhà Hàng Hương Sen</title>
	<link href="<?php echo base_url(); ?>vendor/css/plugins.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>vendor/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>vendor/colors/color-schemer.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<script src="<?php echo base_url(); ?>vendor/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
	<!--================= Header ==========================-->
    <header id="masthead" class="site-header">
        <!--Header Top-->
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 hidden-xs">
                        <div class="addresses">
                            <div class="block-time"><i class="fa fa-clock-o"></i>
                                <p>Giờ hoạt động -
                                    <span>7am to 11pm</span>
                                </p>
                            </div>
                            
                            <div class="phone"><i class="fa fa-phone"></i>
                                <p>Số điện thoại -
                                    <span><?= $dulieu['sdt'] ?></span>
                                </p>
                            </div>
                            <div class="email"><i class="fa fa-envelope"></i>
                                <p><?= $dulieu['email'] ?></p>
                            </div>
                           
                        </div><!--/.addresses-->
                    </div><!--/.col-md-8-->

                    <div class="col-md-4">
                        
                        <div class="social-links">
                            <a href="<?= $dulieu['instagram'] ?>">
                                <i class="fa fa-instagram"></i>
                            </a>
                            <a href="<?= $dulieu['ggplus'] ?>">
                                <i class="fa fa-google-plus"></i>
                            </a>
                            <a href="<?= $dulieu['fb'] ?>">
                                <i class="fa fa-facebook"></i>
                            </a>
                            <a href="<?= $dulieu['twitter'] ?>">
                                <i class="fa fa-twitter"></i>
                            </a>
                        
                        </div><!--/.social-links-->
                        <div class="search-area hidden-xs">
                            <i class="fa fa-search"></i>
                            <div class="header-search">
                                <div class="search default">
                                    <form action="#" method="get" class="searchform">
                                        <div class="input-group">
                                            <input type="search" name="s" placeholder="Search here..." class="form-controller">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span> 
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!-- /.search-area -->

                        <!--Mobile Search Area-->
                        <div class="mobile-search-area hidden-sm hidden-md hidden-lg">
                            <div class="header-search">
                                <div class="search default">
                                    <form action="#" method="get" class="searchform">
                                        <div class="input-group">
                                            <input type="search" name="s" placeholder="Search here..." class="form-controller">
                                            <span class="input-group-btn">
                                                <button type="submit" class="btn btn-default">
                                                    <i class="fa fa-search"></i>
                                                </button>
                                            </span> 
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div><!--/.mobile-search-area-->
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.header-top-->

        <!--Header Bottom-->
        <div class="header-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="menu-wrapper clearfix">
                            <div class="navbar-header pull-left">
                                <div class="logo-block">
                                    <a href="<?php echo base_url(); ?>trangchu" class="site-logo">
                                        <img src="<?= $anhlogo['logo'] ?>" alt="sitelogo" class="logo" style="width: 50px; height: 50px;">
                                    </a><!--/.site-logo-->
                                </div>
                            </div><!--/.navbar-header-->

                            <div class="collapse navbar-collapse pull-right">
                                <div class="navigation hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav mainmenu">
                                        <li>
                                            <a href="<?php echo base_url(); ?>trangchu">Trang Chủ</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo base_url(); ?>trangchu/gioithieu">Giới thiệu</a>
                                        </li>
                                        <li>
                                            <a href="#datban">Đặt Bàn</a>
                                        </li>
                                        <li>
                                            <a href="#">Menu</a>
                                            <!-- <ul class="sub-menu">
                                                <li>
                                                    <a href="about-us.html">Menu đồ ăn</a>
                                                </li>
                                                <li>
                                                    <a href="contact-us.html">Menu đồ uống</a>
                                                </li>
                                                <li>
                                                    <a href="review-page.html">Menu combo</a>
                                                </li>
                                            </ul> -->
                                        </li>
                                        <li>
                                            <a href="#">Tin Tức</a>
                                        </li>
                                    </ul><!--/.mainmenu-->
                                </div><!--/.navigation-->

                                <!--Mobile Main Menu-->
                                <div class="mobile-menu-main hidden-md hidden-lg">
                                    <div class="menucontent overlaybg"> </div>
                                    <div class="menuexpandermain slideRight">
                                        <a id="navtoggole-main" class="animated-arrow slideLeft menuclose">
                                            <span></span>
                                        </a>
                                        <span id="menu-marker"></span>
                                    </div><!--/.menuexpandermain-->

                                    <div id="mobile-main-nav" class="main-navigation slideLeft">
                                        <div class="menu-wrapper">
                                            <div id="main-mobile-container" class="menu-content clearfix"></div>
                                        </div>
                                    </div><!--/#mobile-main-nav-->
                                </div><!--/.mobile-menu-main-->
                            </div><!--/.navbar-collapse-->
                        </div><!--/.menu-wrapper-->
                    </div><!--/.col-md-12-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/.header-bottom-->
    </header><!--/.site-header-->
        <!--================= Wellcome Slider ===================-->
    <div class="welcome-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="pogoSlider js-main-slider">
                    <div data-transition="shrinkReveal" data-duration="1000" style="background-image:url(<?php echo base_url(); ?>fileupload/nen.jpg);" class="pogoSlider-slide style-one">
                        <div class="slider-container">
                            <div class="slider-main-content">
                                <div class="image-before">
                                    <div data-in="slideLeft" data-out="slideUp" data-duration="750" data-delay="600" class="heading pogoSlider-slide-element">
                                        <h2>Hương Vị
                                            <span></span>
                                        </h2>
                                    </div>
                                    <div class="content">
                                        <div data-in="slideUp" data-out="slideDown" data-duration="750" data-delay="500" class="content-text pogoSlider-slide-element">Siêu Ngon</div>
                                        <div data-in="slideRight" data-out="slideRight" data-duration="750" data-delay="500" class="content-text pogoSlider-slide-element">Giá Cả Hợp Lý</div>
                                    </div>
                                </div>
                                <div data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500" class="image-content pogoSlider-slide-element">
                                    <img src="<?php echo base_url(); ?>fileupload/slider/slider-01.png" alt="slider-burger">
                                </div>
                                <div class="image-after">
                                    <div data-in="slideRight" data-out="slideUp" data-duration="750" data-delay="600" class="heading pogoSlider-slide-element" style="margin-left: 10px;">
                                        <h2>
                                            <span>Quê Hương</span>
                                        </h2>
                                    </div>
                                    <div class="content">
                                        <div data-in="slideRight" data-out="slideDown" data-duration="750" data-delay="500" class="content-text pogoSlider-slide-element">Thực Phẩm An Toàn</div>
                                        <div data-in="slideRight" data-out="slideDown" data-duration="750" data-delay="500" class="content-text pogoSlider-slide-element">Phục Vụ Tận Tình</div>
                                        <div data-in="slideRight" data-out="slideDown" data-duration="750" data-delay="500" class="content-text pogoSlider-slide-element">Không Gian Đẹp</div>
                                    </div>
                                </div>
                            </div><!--/.image-content-->
                        </div><!--/.slider-container-->
                    </div>
                    <div data-transition="shrinkReveal" data-duration="1000" style="background-image:url(<?php echo base_url(); ?>fileupload/nen.jpg);" class="pogoSlider-slide style-two">
                        <h2 data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="600" class="slider-heading-main pogoSlider-slide-element">Welcome
                            <span>Nhà Hàng Hương Sen</span>
                        </h2><!--/.water-wrap-->
                        <div class="slider-container">
                            <div class="slider-main-content">
                                <div class="image-before">
                                    <div data-in="slideLeft" data-out="slideUp" data-duration="750" data-delay="600" class="heading pogoSlider-slide-element">
                                        <h2>5 Sao</h2>
                                    </div>
                                </div>
                                <div data-in="slideDown" data-out="slideUp" data-duration="750" data-delay="500" class="image-content pogoSlider-slide-element">
                                    <img src="<?php echo base_url(); ?>fileupload/slider/slider-02.png" alt="slider-burger">
                                </div>
                                <div class="image-after">
                                    <div data-in="slideRight" data-out="slideUp" data-duration="750" data-delay="600" class="heading pogoSlider-slide-element">
                                        <h2>Hương Vị Quê Hương</h2>
                                    </div>
                                    <!-- <div class="content">
                                        <div data-in="slideRight" data-out="slideDown" data-duration="750" data-delay="500" class="content-button pogoSlider-slide-element">
                                            <a class="btn btn-default">Special Offer</a>
                                        </div>
                                    </div> -->
                                </div>
                            </div><!--/.image-content-->
                        </div><!--/.slider-container-->
                    </div>
                </div><!-- .pogoSlider -->
            </div><!--/.row-->
        </div><!--/.container-fluid-->
    </div><!--/.welcome-slider-->

    <!--================= Booking With Chef ===================-->
    <section class="booking-with-chif bg-white-smoke" id="datban">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url(); ?>datban/datban_add" class="online-book-form style-two" method="post">
                        <h2 class="book-form-title">Đặt Bàn
                            <span>Nhà Hàng</span>
                        </h2>
                        <div class="col-md-9">
                        	<div class="row">
	                            <div class="col-md-4">
	                                <label>Tên Của Bạn</label>
	                                <div class="input">
	                                	<input name="tenkh" style="color: #248ad3;"  type="text" class="form-controller" placeholder="Tên Của Bạn">
	                                    <!-- <input type="text" placeholder="4 Person" class="form-controller">  -->
	                                </div><!--/.input-->
	                            </div><!--/.col-md-3-->

	                            <div class="col-md-4">
	                                <label>EMail Của Bạn</label>
	                                <div class="input">
	                                    <input name="email" style="color: #248ad3;" type="email" class="form-controller" placeholder="Email Của Bạn">
	                                </div><!--/.input-->
	                            </div><!--/.col-md-3-->

	                            <div class="col-md-4">
	                                <label>Số Điện Thoại</label>
	                                <div class="input">
										<input name="sdt" style="color: #248ad3;" type="number" class="form-controller" placeholder="Số Điện Thoại">
	                                </div><!--/.input-->
	                            </div><!--/.col-md-3-->
	                            <!-- <div class="col-md-3">
	                                <a href="#" class="btn btn-default">Book A Table</a><!--/.btn-->
	                            <!-- </div> --> <!--/.col-md-3-->
                        	</div><!--/.row-->

                        	<div class="row">
	                            <div class="col-md-4">
	                                <label>Số Người</label>
	                                <div class="input"><i class="fa fa-user"></i>
	                                	<input name="songuoi" style="color: #248ad3;" type="number" class="form-controller" placeholder="4">
	                                    <!-- <input type="text" placeholder="4 Person" class="form-controller">  -->
	                                </div><!--/.input-->
	                            </div><!--/.col-md-3-->

	                            <div class="col-md-4">
	                                <label>Ngày Đặt</label>
	                                <div class="input"><i class="fa fa-calendar"></i>
	                                    <input type="text" style="color: #248ad3;" placeholder="Ngày đặt" class="calendar form-controller" name="ngaydatban">
	                                </div><!--/.input-->
	                            </div><!--/.col-md-3-->

	                            <div class="col-md-4">
	                                <label>Giờ Đặt</label>
	                                <div class="input">
	                                    <input name="giodatban" style="color: #248ad3;" type="time" class="form-controller" placeholder="Time *">
	                                </div><!--/.input-->
	                            </div><!--/.col-md-3-->
	                            <!-- <div class="col-md-3">
	                                <a href="#" class="btn btn-default">Book A Table</a><!--/.btn-->
	                           <!--  </div> --><!--/.col-md-3-->
                        	</div>
                        </div>

                        <div class="col-md-3">
                        	<input style="margin-top: 80px;" type="submit"value="Đặt Bàn Ngay" class="btn btn-default">
                        </div>
                        <!--/.row-->
                    </form><!--/.online-book-form-->
                </div><!--/.col-md-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.online-book-section-->

    <section class="about-and-sp-menu style-two">
        <div class="container">
            <div class="row">
                <div class="col-md-7 title">
                    <div class="section-align-title-area">
                        <div class="section-title-style-inner">
                            <h3 class="section-name">Giới thiệu nhà hàng</h3>
                            <h2 class="section-align-title">Hương Sen</h2>
                            <p class="section-align-title-dec">Phong cách
                                <br>Tây Âu - Á Đông
                            <?php foreach ($gt as $value): ?>
                            <p class="section-title-dec"><?= $value['trichdangt'] ?></p>
                            <?php endforeach ?>
                            <a href="#" class="btn btn-default">Xem tiếp</a>
                        </div><!--/.section-title-style-inner-->
                    </div><!--/.section-title-area-->
                </div><!--/.col-md-6-->

                <div class="col-md-5 gallery">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="gallery-section-name">Phong cách
                                <span>Cổ Điển và Hiện Đại</span>
                                <br>
                            </h2>
                        </div>
                    </div>
                    <div class="row padding-reset-section">
                        <!--single-best-place-->
                        <div class="col-md-6 col-sm-6 col-xs-6 padding-reset">
                            <div class="single-best-place">
                                <div class="best-place-thumb">
                                    <img src="<?php echo base_url(); ?>fileupload/hinh2.jpg" alt="img" class="box-radius"> 
                                </div><!--/.best-place-thumb-->
                            </div><!--/.single-best-place-->
                        </div><!--/.col-md-3-->

                        <!--single-best-place-->
                        <div class="col-md-6 col-sm-6 col-xs-6 padding-reset">
                            <div class="single-best-place">
                                <div class="best-place-thumb">
                                    <img src="<?php echo base_url(); ?>fileupload/hinh1.jpg" alt="img" class="box-radius"> 
                                </div><!--/.best-place-thumb-->
                            </div><!--/.single-best-place-->
                        </div><!--/.col-md-3-->

                        <div class="clearfix hidden-xs"></div>

                        <!--single-best-place-->
                        <div class="col-md-6 col-sm-6 col-xs-6 padding-reset">
                            <div class="single-best-place">
                                <div class="best-place-thumb">
                                    <img src="<?php echo base_url(); ?>fileupload/hinh4.jpg" alt="img" class="box-radius"> 
                                </div><!--/.best-place-thumb-->
                            </div><!--/.single-best-place-->
                        </div><!--/.col-md-3-->

                        <!--single-best-place-->
                        <div class="col-md-6 col-sm-6 col-xs-6 padding-reset">
                            <div class="single-best-place">
                                <div class="best-place-thumb">
                                    <img src="<?php echo base_url(); ?>fileupload/hinh3.jpg" alt="img" class="box-radius"> 
                                </div><!--/.best-place-thumb-->
                            </div><!--/.single-best-place-->
                        </div><!--/.col-md-3-->
                    </div><!--/.row-->
                </div><!--/.gallery-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.about-and-sp-menu-->

    <!--================= Our Delicious Menu ===================-->
    <section data-jarallax='{"speed": 0.3, "imgSrc": "<?php echo base_url(); ?>fileupload/menu-bg-three.jpg" }' class="our-delicious-menu jarallax">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-area text-center">
                        <h3 class="section-name">Menu hôm nay</h3>
                        <h2 class="section-title italic-style">Thực Đơn Ngon Miệng</h2>
                        <p class="section-title-dec">Ưu đãi tốt nhất từ ​​nhà hàng</p>
                    </div>
                </div>

                <div class="clearfix"></div>

                <div class="col-md-12">
                    <div class="menu-item-slider owl-carousel">
                        <div class="item">
                            <div class="row">
                            	<?php foreach ($monan as $value): ?>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="menu-item-two">
                                        <div class="image-area">
                                            <img src="<?= $value['anh'] ?>" alt="menu-item" style="width: 354px; height: 200px;">
                                        </div>
                                        <div class="menu-content text-center">
                                            <div class="item-price">
                                                <div class="price-inner">$<?= $value['gia'] ?></div>
                                            </div>
                                            <h5 class="menu-title">
                                                <?= $value['tieude'] ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div><!--/.row-->
                        </div><!--/.item-->

                     	<div class="item">
                            <div class="row">
                                <?php foreach ($douong as $value): ?>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="menu-item-two">
                                        <div class="image-area">
                                            <img src="<?= $value['anh'] ?>" alt="menu-item" style="width: 354px; height: 200px;">
                                        </div>
                                        <div class="menu-content text-center">
                                            <div class="item-price">
                                                <div class="price-inner">$<?= $value['gia'] ?></div>
                                            </div>
                                            <h5 class="menu-title">
                                                <?= $value['tieude'] ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div><!--/.row-->
                        </div><!--/.item-->

                        <div class="item">
                            <div class="row">
                                <?php foreach ($combo as $value): ?>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="menu-item-two">
                                        <div class="image-area">
                                            <img src="<?= $value['anh'] ?>" alt="menu-item" style="width: 354px; height: 200px;">
                                        </div>
                                        <div class="menu-content text-center">
                                            <div class="item-price">
                                                <div class="price-inner">$<?= $value['gia'] ?></div>
                                            </div>
                                            <h5 class="menu-title">
                                                <?= $value['tieude'] ?>
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach ?>
                            </div><!--/.row-->
                        </div><!--/.item-->
                    </div><!--/.menu-item-slider-->
                </div><!--/.col-md-12-->
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/.our-delicious-menu-->

    <!--================= Our Gallery Section ===================-->

    <!--================= Our Experts Chefs ===================-->
    <section class="our-experts-chefs bg-white-smoke">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-area style-two text-center">
                        <h2 class="section-title">Nhà Bếp</h2>
                        <p class="section-title-dec">Đầu bếp chuyên gia của chúng tôi</p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <div id="experts-chefs-slider">
                        <div class="tab-content text-center">
                            <div id="chef-1" class="tab-pane fade in active">
                                <div class="image-before hidden-sm hidden-xs">
                                    <h2>5 Sao
                                        <!-- <span>Là</span>
                                        <span>Đam Mê</span> -->
                                    </h2>
                                </div>
                                <div class="image-content">
                                    <img src="<?php echo base_url(); ?>fileupload/daubep1.png" alt="chef photo" style="width: 250px;height: 320px;">
                                    <h3 class="author-name">Đầu bếp A</h3>
                                    <h5 class="author-designation">Chuyên gia đồ ăn Tây</h5>
                                </div>
                                <div class="image-after hidden-sm hidden-xs">
                                    <h2>Burger
                                        <span>và</span>
                                        <span>Garu</span>
                                    </h2>
                                </div>
                            </div>
                            <div id="chef-2" class="tab-pane fade">
                                <div class="image-before hidden-sm hidden-xs">
                                    <h2>4 Sao
                                        <!-- <span>to</span>
                                        <span>Cook</span> -->
                                    </h2>
                                </div>
                                <div class="image-content">
                                    <img src="<?php echo base_url(); ?>fileupload/daubep2.png" alt="chef photo" style="width: 250px;height: 320px;">
                                    <h3 class="author-name">Đầu bếp B</h3>
                                    <h5 class="author-designation">Chuyên gia đồ ăn Tây</h5>
                                </div>
                                <div class="image-after hidden-sm hidden-xs">
                                    <h2>Món ăn
                                        <span></span>
                                        <span>ÂU</span>
                                    </h2>
                                </div>
                            </div>
                            <div id="chef-3" class="tab-pane fade">
                                <div class="image-before hidden-sm hidden-xs">
                                    <h2>5 Sao
                                    </h2>
                                </div>
                                <div class="image-content">
                                    <img src="<?php echo base_url(); ?>fileupload/daubep3.png" alt="chef photo" style="width: 250px;height: 320px;">
                                    <h3 class="author-name">Đầu bếp C</h3>
                                    <h5 class="author-designation">Chuyên gia đồ ăn Việt</h5>
                                </div>
                                <div class="image-after hidden-sm hidden-xs">
                                    <h2>Dân tộc
                                    </h2>
                                </div>
                            </div>
                        </div><!--/.carousel-inner-->
                    </div><!--/.carousel-->
                </div><!--/.col-md-12-->
            </div><!--/.row-->
        </div><!--/.container-->
        <ul class="experts-chefs-nav">
            <li class="active">
                <a href="#chef-1" data-toggle="tab" class="nav-image">
                    <img src="<?php echo base_url(); ?>fileupload/daubep1.png" alt="chef photo">
                </a>
            </li>
            <li>
                <a href="#chef-2" data-toggle="tab" class="nav-image">
                    <img src="<?php echo base_url(); ?>fileupload/daubep2.png" alt="chef photo">
                </a>
            </li>
            <li>
                <a href="#chef-3" data-toggle="tab" class="nav-image">
                    <img src="<?php echo base_url(); ?>fileupload/daubep3.png" alt="chef photo">
                </a>
            </li>
        </ul>
    </section><!--/.our-experts-chefs-->

    <!--================= Special Food Time ===================-->
    <section class="special-food-time" style="background-image: url(<?php echo base_url(); ?>fileupload/special-food-pattern.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6 mobile-full">
                    <div class="icon-area">
                        <div class="icon">
                            <svg width="31" height="31" viewBox="0 0 31 31">
                                <path d="M25.896,16.808 C25.420,17.816 24.769,18.708 23.879,19.391 C25.888,19.543 27.199,19.790 27.199,20.069 C27.199,20.413 25.193,20.710 22.330,20.839 C22.190,20.694 22.045,20.553 21.889,20.415 C21.406,19.988 20.848,19.596 20.228,19.238 C18.228,18.090 15.570,17.344 12.582,17.195 C11.087,14.405 11.085,10.568 11.085,7.809 L27.198,7.809 C27.198,8.375 27.198,8.988 27.186,9.626 C29.777,10.035 30.996,11.460 30.996,13.161 C30.996,15.123 29.378,16.720 25.896,16.808 ZM15.549,8.884 L13.030,8.884 C13.030,8.884 12.206,14.432 16.325,17.647 C16.325,17.647 14.419,12.646 15.549,8.884 ZM27.121,11.232 C27.037,12.556 26.861,13.925 26.495,15.201 C28.390,14.970 28.904,14.258 28.923,13.199 C28.939,12.276 28.517,11.564 27.121,11.232 ZM26.700,4.161 C25.483,4.521 23.577,4.545 23.148,6.023 C22.972,6.623 22.052,6.367 22.227,5.764 C22.616,4.426 23.758,3.881 25.008,3.582 C26.290,3.273 27.836,3.148 27.620,1.437 C27.541,0.816 28.497,0.825 28.575,1.437 C28.754,2.852 28.006,3.774 26.700,4.161 ZM20.459,5.650 C20.393,6.266 19.437,6.273 19.504,5.650 C19.672,4.105 20.798,3.331 22.159,2.867 C23.292,2.482 25.517,2.277 24.931,0.595 C24.725,0.001 25.648,-0.251 25.852,0.335 C27.188,4.173 20.779,2.695 20.459,5.650 ZM13.320,18.324 C14.893,18.466 16.359,18.786 17.649,19.246 C18.760,19.640 19.740,20.138 20.546,20.715 C20.626,20.772 20.705,20.831 20.782,20.890 C22.149,21.939 22.957,23.228 22.957,24.620 C22.957,28.136 17.809,30.997 11.480,30.997 C5.152,30.997 0.004,28.136 0.004,24.620 C0.004,21.103 5.153,18.242 11.481,18.242 C12.107,18.242 12.721,18.271 13.320,18.324 ZM7.931,23.518 C7.676,23.264 7.530,22.992 7.530,22.730 C7.530,22.285 7.176,21.924 6.739,21.924 C6.302,21.924 5.947,22.285 5.947,22.730 C5.947,24.713 8.378,26.267 11.480,26.267 C14.583,26.267 17.014,24.713 17.014,22.730 C17.014,22.285 16.659,21.924 16.222,21.924 C15.785,21.924 15.430,22.285 15.430,22.730 C15.430,23.014 15.266,23.307 14.971,23.578 C14.642,22.749 13.185,22.124 11.437,22.124 C9.731,22.124 8.306,22.719 7.931,23.518 Z" class="tea-cup"></path>
                            </svg>
                        </div>
                        <div class="icon-text">
                            <h3>Bữa ăn sáng</h3>
                            <p>7.00am - 12.00pm</p>
                        </div>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6 col-xs-6 mobile-full">
                    <div class="icon-area">
                        <div class="icon">
                            <svg width="29" height="28" viewBox="0 0 29 28">
                                <path d="M28.170,19.884 C27.239,22.471 25.176,25.965 20.637,27.924 C20.522,27.974 20.399,28.000 20.274,28.000 L8.726,28.000 C8.601,28.000 8.477,27.974 8.362,27.924 C3.822,25.964 1.760,22.469 0.829,19.882 C-0.081,17.352 -0.185,14.862 0.241,14.005 C0.399,13.687 0.720,13.486 1.070,13.486 L27.929,13.486 C28.280,13.486 28.601,13.687 28.759,14.006 C29.185,14.862 29.081,17.353 28.170,19.884 ZM7.256,8.460 C8.118,8.460 8.921,8.745 9.594,9.237 C10.398,7.083 12.292,5.570 14.500,5.570 C16.708,5.570 18.601,7.083 19.406,9.237 C20.079,8.745 20.882,8.460 21.743,8.460 C23.478,8.460 24.973,9.614 25.654,11.275 L3.345,11.275 C4.027,9.614 5.521,8.460 7.256,8.460 ZM18.918,4.039 C18.815,4.076 18.709,4.094 18.605,4.094 C18.224,4.094 17.866,3.853 17.730,3.467 L16.955,1.262 C16.783,0.771 17.035,0.230 17.518,0.055 C18.002,-0.121 18.533,0.135 18.706,0.626 L19.481,2.831 C19.653,3.322 19.402,3.863 18.918,4.039 ZM15.200,4.039 C15.097,4.076 14.991,4.094 14.887,4.094 C14.505,4.094 14.148,3.853 14.012,3.467 L13.237,1.262 C13.064,0.771 13.316,0.230 13.800,0.055 C14.283,-0.121 14.815,0.135 14.988,0.626 L15.763,2.831 C15.935,3.322 15.683,3.863 15.200,4.039 ZM11.482,4.039 C11.378,4.076 11.273,4.094 11.169,4.094 C10.787,4.094 10.429,3.853 10.294,3.467 L9.519,1.262 C9.346,0.771 9.598,0.230 10.082,0.054 C10.565,-0.121 11.097,0.135 11.270,0.626 L12.044,2.831 C12.217,3.322 11.965,3.863 11.482,4.039 Z" class="lunch"></path>
                            </svg>
                        </div>
                        <div class="icon-text">
                            <h3>Bữa ăn trưa</h3>
                            <p>12.00pm - 03.00pm</p>
                        </div>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6 col-xs-6 mobile-full">
                    <div class="icon-area">
                        <div class="icon">
                            <svg width="32" height="27" viewBox="0 0 32 27">
                                <path d="M31.968,14.831 C31.549,16.083 30.811,15.982 29.830,15.661 C29.830,15.661 28.071,15.065 27.084,15.608 C26.737,15.380 26.201,15.146 25.907,15.133 C25.272,15.099 24.494,15.440 24.154,15.481 C23.723,15.581 23.160,15.508 22.631,15.374 C19.969,14.697 17.982,14.463 16.988,14.383 C15.190,14.249 14.346,14.745 14.346,14.745 C13.751,15.152 13.300,14.852 13.176,14.771 C12.103,14.055 11.266,14.697 11.064,14.824 C10.698,15.126 9.540,16.049 9.056,15.709 C8.893,15.608 8.376,14.389 7.481,14.430 C6.676,14.423 6.081,15.260 6.003,15.260 C6.003,15.260 5.878,15.260 5.623,15.133 C3.943,14.283 3.433,15.654 3.309,15.889 C3.021,16.618 1.563,17.114 0.994,17.060 C0.915,17.007 -0.033,15.728 0.000,15.575 C0.177,14.684 1.498,13.459 1.955,12.790 C2.138,12.516 2.158,12.140 1.903,11.879 C1.779,11.746 2.007,10.842 3.047,10.187 C5.408,12.970 11.384,13.386 16.752,13.386 C22.042,13.386 27.921,12.970 30.333,10.314 C31.046,11.143 32.210,12.970 31.968,14.831 ZM16.785,12.027 C2.347,12.027 3.381,7.737 3.381,7.289 C3.381,3.333 9.540,-0.001 16.785,-0.001 C24.063,-0.001 30.189,3.333 30.189,7.289 C30.189,10.514 25.913,12.027 16.785,12.027 ZM9.736,4.972 C9.207,4.972 8.670,5.080 8.187,5.287 C7.853,5.441 7.657,5.856 7.853,6.197 C8.115,6.646 8.638,6.586 8.716,6.559 C9.024,6.431 9.377,6.351 9.710,6.351 C10.089,6.351 10.397,6.063 10.397,5.675 C10.397,5.287 10.116,4.972 9.736,4.972 ZM14.549,2.744 L13.555,2.663 C13.195,2.637 12.868,2.924 12.842,3.286 C12.816,3.647 13.097,3.989 13.477,4.015 L14.470,4.122 C14.823,4.156 15.157,3.835 15.183,3.474 C15.209,3.105 14.928,2.771 14.549,2.744 ZM17.014,7.007 C16.733,6.980 16.478,6.873 16.275,6.692 C15.968,6.459 15.562,6.505 15.333,6.820 C15.105,7.107 15.157,7.549 15.432,7.790 C15.837,8.125 16.321,8.332 16.857,8.386 C17.249,8.419 17.570,8.125 17.596,7.763 C17.648,7.395 17.393,7.060 17.014,7.007 ZM20.826,6.719 C20.676,7.054 20.826,7.476 21.186,7.623 C21.591,7.830 22.023,7.991 22.454,8.119 C22.879,8.205 23.186,7.964 23.265,7.650 C23.370,7.289 23.160,6.900 22.807,6.793 C22.428,6.692 22.068,6.532 21.715,6.378 C21.388,6.224 20.976,6.378 20.826,6.719 ZM24.337,2.965 C23.827,2.523 23.219,2.235 22.559,2.108 C22.199,2.034 21.846,2.295 21.768,2.657 C21.715,3.025 21.944,3.386 22.330,3.460 C22.761,3.540 23.141,3.721 23.474,4.008 C23.906,4.323 24.292,4.082 24.416,3.928 C24.645,3.640 24.618,3.226 24.337,2.965 ZM14.895,16.063 C16.386,15.307 20.290,16.404 20.290,16.404 L18.864,19.316 L14.895,16.063 ZM24.991,16.745 C25.599,16.411 26.005,16.692 26.083,16.745 C26.260,16.846 27.012,17.321 28.143,16.873 C28.659,16.759 29.784,17.194 30.078,17.234 C28.332,20.581 18.459,21.110 18.459,21.110 C7.082,21.524 3.610,17.542 3.610,17.542 C4.067,17.187 4.420,16.739 4.649,16.190 C5.748,16.840 6.591,16.766 7.219,16.063 C7.297,15.982 7.422,15.882 7.474,15.855 C7.552,15.936 7.650,16.090 7.729,16.197 C8.788,17.830 10.364,17.228 11.443,16.324 C11.986,15.895 12.156,15.882 12.175,15.882 C12.770,15.882 18.413,20.722 18.662,20.909 C18.786,21.009 18.969,21.103 19.244,21.036 C19.446,20.989 19.597,20.856 19.701,20.674 L21.637,16.665 C21.637,16.665 24.213,17.281 24.991,16.745 ZM3.740,19.557 C3.740,19.557 8.272,22.394 16.811,22.495 C25.514,22.595 29.830,19.577 29.830,19.577 C30.667,20.153 31.504,20.929 31.569,21.873 C31.569,24.296 25.488,26.999 16.792,26.999 C8.069,26.999 2.014,24.296 2.014,21.873 C2.014,21.090 2.622,20.286 3.740,19.557 Z" class="burger"></path>
                            </svg>
                        </div>
                        <div class="icon-text">
                            <h3>Burger / Pizza</h3>
                            <p>Mọi lúc</p>
                        </div>
                    </div>
                </div><!--/.col-md-3-->

                <div class="col-md-3 col-sm-6 col-xs-6 mobile-full">
                    <div class="icon-area">
                        <div class="icon">
                            <svg width="31" height="31" viewBox="0 0 31 31">
                                <path d="M25.896,16.808 C25.420,17.816 24.769,18.708 23.879,19.391 C25.888,19.543 27.199,19.790 27.199,20.069 C27.199,20.413 25.193,20.710 22.330,20.839 C22.190,20.694 22.045,20.553 21.889,20.415 C21.406,19.988 20.848,19.596 20.228,19.238 C18.228,18.090 15.570,17.344 12.582,17.195 C11.087,14.405 11.085,10.568 11.085,7.809 L27.198,7.809 C27.198,8.375 27.198,8.988 27.186,9.626 C29.777,10.035 30.996,11.460 30.996,13.161 C30.996,15.123 29.378,16.720 25.896,16.808 ZM15.549,8.884 L13.030,8.884 C13.030,8.884 12.206,14.432 16.325,17.647 C16.325,17.647 14.419,12.646 15.549,8.884 ZM27.121,11.232 C27.037,12.556 26.861,13.925 26.495,15.201 C28.390,14.970 28.904,14.258 28.923,13.199 C28.939,12.276 28.517,11.564 27.121,11.232 ZM26.700,4.161 C25.483,4.521 23.577,4.545 23.148,6.023 C22.972,6.623 22.052,6.367 22.227,5.764 C22.616,4.426 23.758,3.881 25.008,3.582 C26.290,3.273 27.836,3.148 27.620,1.437 C27.541,0.816 28.497,0.825 28.575,1.437 C28.754,2.852 28.006,3.774 26.700,4.161 ZM20.459,5.650 C20.393,6.266 19.437,6.273 19.504,5.650 C19.672,4.105 20.798,3.331 22.159,2.867 C23.292,2.482 25.517,2.277 24.931,0.595 C24.725,0.001 25.648,-0.251 25.852,0.335 C27.188,4.173 20.779,2.695 20.459,5.650 ZM13.320,18.324 C14.893,18.466 16.359,18.786 17.649,19.246 C18.760,19.640 19.740,20.138 20.546,20.715 C20.626,20.772 20.705,20.831 20.782,20.890 C22.149,21.939 22.957,23.228 22.957,24.620 C22.957,28.136 17.809,30.997 11.480,30.997 C5.152,30.997 0.004,28.136 0.004,24.620 C0.004,21.103 5.153,18.242 11.481,18.242 C12.107,18.242 12.721,18.271 13.320,18.324 ZM7.931,23.518 C7.676,23.264 7.530,22.992 7.530,22.730 C7.530,22.285 7.176,21.924 6.739,21.924 C6.302,21.924 5.947,22.285 5.947,22.730 C5.947,24.713 8.378,26.267 11.480,26.267 C14.583,26.267 17.014,24.713 17.014,22.730 C17.014,22.285 16.659,21.924 16.222,21.924 C15.785,21.924 15.430,22.285 15.430,22.730 C15.430,23.014 15.266,23.307 14.971,23.578 C14.642,22.749 13.185,22.124 11.437,22.124 C9.731,22.124 8.306,22.719 7.931,23.518 Z" class="tea-cup"></path>
                            </svg>
                        </div>
                        <div class="icon-text">
                            <h3>Cà phê / Đồ uống</h3>
                            <p>Mọi lúc</p>
                        </div>
                    </div>
                </div><!--/.col-md-3-->
            </div><!--/.row-->
        </div><!--/.container-fluid-->
    </section><!--/.special-food-time-->

    <!--================= Site Footer Top ===================-->
    <div id="footer-top-section" style="background-image:url('<?php echo base_url(); ?>fileupload/footer-pattern.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-area text-center">
                        <h2 class="section-title">Chúng Tôi Sẵn Sàng
                            <br>Phục Vụ Bạn 24/7</h2>
                        <p class="section-title-dec">Dịch vụ hỗ trợ trực tuyến của chúng tôi luôn hoạt động 24 giờ</p>
                    </div><!--/.section-title-area-->
                </div><!--/.col-md-12-->
            </div><!--/.row-->
            <div class="row">
                
                <div class="col-sm-6 col-md-3">
                    <div class="widget-area footer-sidebar-top-1">
                        <aside class="widget clearfix widget_address">
                            <div class="widget-title-area">
                                <h4 class="widget-title">Địa chỉ</h4>
                            </div><!--/.widget-title-area-->
                            <div class="widget-content">
                                <p><?= $dulieu['diachi'] ?></p>
                            </div>
                        </aside><!--/.widget_address-->
                    </div><!--/.footer-sidebar-top-1-->
                </div><!--/.col-md-3-->

                <div class="col-sm-6 col-md-3">
                    <div class="widget-area footer-sidebar-top-2">
                        <aside class="widget clearfix widget_call_us">
                            <div class="widget-title-area">
                                <h4 class="widget-title">Điện Thoại</h4>
                            </div><!--/.widget-title-area-->
                            <div class="widget-content">
                               <p><?= $dulieu['sdt'] ?></p>
                            </div>
                        </aside><!--/.widget_call_us-->
                    </div><!--/.footer-sidebar-top-2-->
                </div><!--/.col-md-3-->

                <div class="col-sm-6 col-md-3">
                    <div class="widget-area footer-sidebar-top-3">
                        <aside class="widget clearfix widget_mail_us">
                            <div class="widget-title-area">
                                <h4 class="widget-title">Mail</h4>
                            </div><!--/.widget-title-area-->
                            <div class="widget-content">
                               <p><?= $dulieu['email'] ?></p>
                            </div>
                        </aside><!--/.widget_mail_us-->
                    </div><!--/.footer-sidebar-top-3-->
                </div><!--/.col-md-3-->

                <div class="col-sm-6 col-md-3">
                    <div class="widget-area footer-sidebar-top-4">
                        <aside class="widget clearfix widget_social_media">
                            <div class="widget-title-area">
                                <h4 class="widget-title">Mạng Xã Hội</h4>
                            </div><!--/.widget-title-area-->
                            <div class="widget-social">
                               <a href="<?= $dulieu['fb'] ?>"><i class="fa fa-facebook"></i></a>
                                <a href="<?= $dulieu['twitter'] ?>"><i class="fa fa-twitter"></i></a>
                                <a href="<?= $dulieu['ggplus'] ?>"><i class="fa fa-google-plus"></i></a>
                                <a href="<?= $dulieu['instagram'] ?>"><i class="fa fa-instagram"></i></a>
                            </div><!--/.widget-social-->
                        </aside> <!--/.widget_social_media-->
                    </div><!--/.footer-sidebar-top-4-->
                </div><!--/.col-md-3-->

            </div><!--/.row-->
        </div><!--/.container-fluid-->
    </div><!--/#footer-top-section-->

    <!--================= Site Footer Bottom ===================-->
    <footer id="colophon" style="background-image: url(<?php echo base_url(); ?>fileupload/footer-bottom-bg.jpg);" class="site-footer">
        <div id="footer-bottom-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <div class="widget-area footer-sidebar-1">
                            <aside class="widget clearfix widget_about-us">
                                <div class="widget-title-area">
                                    <h4 class="widget-title">123</h4>
                                </div><!--/.widget-title-area-->
                                <div class="widget-content">
                                    <p>123</p>
                                    <a href="#" class="btn btn-default">Xem thêm</a>
                                </div>
                            </aside><!--/.widget-about-us-->
                        </div><!--/.footer-sidebar-1-->
                    </div><!--/.col-md-4-->

                    <div class="col-sm-6 col-md-4">
                        <div class="widget-area footer-sidebar-2">
                            <aside class="widget clearfix widget_opening_hour">
                                <div class="widget-title-area">
                                    <h4 class="widget-title">Giờ Mở Cửa</h4>
                                </div><!--/.widget-title-area-->
                                <div class="widget-opening-hour">
                                    <ul>
                                        <li>Thứ 2
                                            <span class="pull-right">7.00am - 11.00pm</span>
                                        </li>
                                        <li>Thứ 3
                                            <span class="pull-right">7.00am - 11.00pm</span>
                                        </li>
                                        <li>Thứ 4
                                            <span class="pull-right">7.00am - 11.00pm</span>
                                        </li>
                                        <li>Thứ 5
                                            <span class="pull-right">7.00am - 11.00pm</span>
                                        </li>
                                        <li>Thứ 6
                                            <span class="pull-right">7.00am - 11.00pm</span>
                                        </li>
                                        <li>Thứ 7
                                            <span class="pull-right">7.00am - 11.00pm</span>
                                        </li>
                                        <li class="offday">Chủ nhật
                                            <span class="pull-right">8.00am - 12.00pm</span>
                                        </li>
                                    </ul>
                                </div><!--/.widget-content-->
                            </aside>    <!--/.widget-categories-->
                        </div><!--/.footer-sidebar-2-->
                    </div><!--/.col-md-4-->

                    <div class="col-sm-6 col-md-4">
                        <div class="widget-area footer-sidebar-3">
                            <aside class="widget clearfix widget_newsletter">
                                <div class="widget-title-area">
                                    <h4 class="widget-title">Bản Đồ</h4>
                                </div><!--/.widget-title-area-->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3739.048929630522!2d106.15706211488741!3d20.422067586330165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135e0aa5018cd05%3A0xfd4bb7befe652129!2zTmjDoCBow6BuZyBIxrDGoW5nIFNlbiBOYW0gxJDhu4tuaA!5e0!3m2!1svi!2s!4v1553845881749!5m2!1svi!2s" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </aside><!--/.widget_newsletter-->
                        </div><!--/.footer-sidebar-3-->
                    </div><!--/.col-md-4-->
                </div><!--/.row-->
            </div><!--/.container-->
        </div><!--/#footer-bottom-section-->
    </footer><!--/.site-footer-->
    <script src="<?php echo base_url(); ?>vendor/js/vendor/jquery-1.12.4.min.js"></script><!--Jquery-->
    <script src="<?php echo base_url(); ?>vendor/js/vendor/jQuery-Migrate.min.js"></script><!--jQuery-Migrate-->
    <script src="<?php echo base_url(); ?>vendor/js/plugins.js"></script><!--plugins js-->
    <script src="<?php echo base_url(); ?>vendor/js/livekitchen.js"></script><!--live-kitchen-app-->
</body>
</html>