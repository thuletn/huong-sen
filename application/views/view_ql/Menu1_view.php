<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/asset/css/bootstrap.min.css">
  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/asset/css/plugins/animate.min.css"/>
  <link href="<?php echo base_url(); ?>vendor/asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
</head>
<body>
	<nav class="navbar navbar-default header navbar-fixed-top">
		<div class="col-md-12 nav-wrapper">
			<div class="navbar-header" style="width:100%;">
				<div class="opener-left-menu is-open" style="padding-top: 24px;">
					<span class="top"></span>
					<span class="middle"></span>
					<span class="bottom"></span>
				</div>
				<a href="#" class="navbar-brand">
					<b>Nhà Hàng Hương Sen</b>
				</a>

        <ul class="nav navbar-nav navbar-right user-nav">
          <li class="user-name" style="margin-top: 20px;"><span>Ngọc Dũng</span></li>
          <li class="dropdown avatar-dropdown">
           <img src="<?php echo base_url(); ?>/fileupload/logo1.png" width="50px" height="50px" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
         </li>
       </ul>
    </div>
  </div>
</nav>

<div class="container-fluid mimin-wrapper">
  <div id="left-menu">
    <div class="sub-left-menu scroll">
      <ul class="nav nav-list">
        <li><div class="left-bg"></div></li>
        <li class="time">
          <h1 class="animated fadeInLeft"></h1>
          <!-- <p class="animated fadeInRight"></p> -->
        </li>
        <li class="ripple"><a href="<?php echo base_url(); ?>admin"><span class="fa fa-home"></span>Trang chính</a></li>
        <li class="ripple"><a href="<?php echo base_url(); ?>thucdon/thucdondoan"><span class="fa-diamond fa"></span>Thực đơn</a></li>
        <li class="ripple"><a href="<?php echo base_url(); ?>datban/datban_list"><span class="fa fa-phone"></span>Đặt bàn</a></li>
        <li class="ripple"><a href="<?php echo base_url(); ?>ban"><span class="fa fa-table"></span>Quản lý bàn</a></li>
        <li class="ripple"><a href="<?php echo base_url(); ?>khachhang"><span class="fa fa-user-secret"></span>Quản lý Admin</a></li>
        <li class="active ripple">
          <a class="tree-toggle nav-header"><span class="fa fa-area-chart"></span> Doanh thu
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="#">Theo ngày</a></li>
            <li><a href="#">Theo tuần</a></li>
            <li><a href="#">Theo tháng</a></li>
          </ul>
        </li>
        <li class="ripple">
          <a class="tree-toggle nav-header">
            <span class="fa fa-dashboard"></span>Quản lý nhân viên
            <span class="fa-angle-right fa right-arrow text-right"></span>
          </a>
          <ul class="nav nav-list tree">
            <li><a href="<?php echo base_url(); ?>nhanvien/page/1">Thông tin nhân viên</a></li>
            <li><a href="#">Lương</a></li>
            <li><a href="<?php echo base_url(); ?>chucvu">Chức vụ</a></li>
          </ul>
        </li>
              <!-- <li class="ripple"><a class="tree-toggle nav-header"><span class="fa fa-check-square-o"></span> Quản lý bàn <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="#">Nhập kho</a></li>
                  <li><a href="#">Xuất kho</a></li>
                  <li><a href="#">Kho hàng</a></li>
                </ul>
              </li> -->
              <li class="ripple"><a class="tree-toggle nav-header">
                <span class="fa fa-pencil-square"></span> Quản lý tin tức  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="<?php echo base_url(); ?>tin/danhmuctin">Danh mục tin</a></li>
                  <li><a href="<?php echo base_url(); ?>tin/quanlytin">Tin</a></li>
                </ul>
              </li>
              <li class="ripple"><a class="tree-toggle nav-header">
                <span class="fa fa-cogs"></span> Cấu hình  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                <ul class="nav nav-list tree">
                  <li><a href="<?php echo base_url(); ?>cauhinh/capnhat">Logo-Slider_Banner</a></li>
                  <li><a href="<?php echo base_url(); ?>cauhinh/gioithieu">Bài giới thiệu</a></li>
                  <li><a href="<?php echo base_url(); ?>cauhinh/thongtin">Liên hệ</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <script src="<?php echo base_url(); ?>vendor/asset/js/jquery.min.js"></script>
      <script src="<?php echo base_url(); ?>vendor/asset/js/jquery.ui.min.js"></script>
      <script src="<?php echo base_url(); ?>vendor/asset/js/bootstrap.min.js"></script>


      <!-- plugins -->
      <script src="<?php echo base_url(); ?>vendor/asset/js/plugins/moment.min.js"></script>
      <script src="<?php echo base_url(); ?>vendor/asset/js/plugins/jquery.nicescroll.js"></script>


      <!-- custom -->
      <script src="<?php echo base_url(); ?>vendor/asset/js/main.js"></script>
    </body>
    </html>