<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Đặt bàn</title>
	<script rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/asset/css/bootstrap.min.css">
	<!-- plugins -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/asset/css/plugins/animate.min.css"/>
	<link href="<?php echo base_url(); ?>vendor/asset/css/style.css" rel="stylesheet">
</head>
<body>
	<form action="<?php echo base_url(); ?>datban/datban_add" method="post">
		<div class="col-sm-10 push-sm-1">
			<div class="formdatban">
				<div class="row">
					<div class="col-sm-12">
						<h2 class="text-xs-center fontroboto">Book Your Table Online</h2>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<input name="tenkh" type="text" class="form-control" placeholder="Your Name">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
							<input name="email" type="email" class="form-control" placeholder="Your Email">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
							<input name="sdt" type="number" class="form-control" placeholder="Your Mobile">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
							<input name="ngaydatban" type="date" class="form-control" placeholder="Date *">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
							<input name="giodatban" type="time" class="form-control" placeholder="Time *">
						</div>
					</div>

					<div class="col-sm-4">
						<div class="form-group">
							<input name="songuoi" type="number" class="form-control" placeholder="No. of person *">
						</div>
					</div>

					<div class="col-sm-12 text-xs-center">
						<input type="submit"value="Book Table Now" class="btn btn-warning">
					</div>
				</div>
			</div>
		</div>
	</form>
</body>