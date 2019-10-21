<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thêm thực đơn</title>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<?php include_once("Menu1_view.php")?>
			</div>

			<div id="content" class="article-v1">
				<div class="panel box-shadow-none content-header">
					<div class="panel-body">
						<div class="col-md-12">
							<div class="text-xs-center">
								<h2 class="display-3" style="text-align: center;">Thêm thực đơn</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="container-fluid main">
						<div>
							<ul class="nav nav-pills">
								<li><a href="<?php echo base_url(); ?>thucdon/thucdondoan"><h4>Menu đồ ăn</h4></a></li>
								<li><a href="<?php echo base_url(); ?>thucdon/thucdondouong"><h4>Menu đồ uống</h4></a></li>
								<li><a href="<?php echo base_url(); ?>thucdon/thucdoncombo"><h4>Menu combo</h4></a></li>
								<li class="active"><a href="<?php echo base_url(); ?>thucdon/themthucdon""><h4>Thêm thực đơn</h4></a></li>
							</ul>
						</div>
						<div class="row" style="margin: 50px 0px 0px 0px; ">
							<div class="col-md-2">
							</div>
							<div class="col-md-10">
								<form action="<?= base_url() ?>thucdon/thucdon_add/" method="post" enctype="multipart/form-data">
									<div class="form-group row">
										<div class="col-md-8">
											<div class="form-group row">
												<label for="anhavatar" class="col-md-4 form-control-label text-xs-right">Ảnh món ăn</label>
												<div class="col-md-8">
													<input type="file" name="anh" class="form-control" id="anh" placeholder="Upload anh">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-8">
											<div class="row">
												<label for="tuoi" class="col-md-4 form-control-label text-xs-right">Tiêu đề</label>
												<div class="col-md-8">
													<input type="text" name="tieude" class="form-control" id="tieude" placeholder="Tiêu đề (tên món ăn)">
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-8">
											<div class="row">
												<label for="tuoi" class="col-md-4 form-control-label text-xs-right">Mô tả</label>
												<div class="col-md-8">
													<textarea class="form-control" rows="5" id="mota" name="mota"></textarea>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group row">
										<div class="col-md-8">
											<div class="row">
												<label for="sdt" class="col-md-4 form-control-label text-xs-right">Giá tiền</label>
												<div class="col-md-8">
													<input type="number" name="gia" class="form-control" id="gia" placeholder="Giá tiền">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-8">
											<div class="row">
												<label for="sdt" class="col-md-4 form-control-label text-xs-right">Loại</label>
												<div class="col-md-8">
													<select style=" width:200px;height: 34px;" name="loai" id="loai">
													<option value="0">Loại:</option>
													<option value="Đồ ăn">Đồ ăn </option>
													<option value="Đồ uống">Đồ uống</option>
													<option value="Combo">Combo</option>
												</select>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group row text-xs-center">
										<div class="col-md-offset-3 col-md-10">
											<button type="submit" class="btn btn-outline-success nutxulyajax">Gửi dữ liệu</button>
											<button type="reset" class="btn btn-outline-danger">Nhập mới lại</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>