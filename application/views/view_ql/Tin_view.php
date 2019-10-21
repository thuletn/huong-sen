<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản lý tin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url(); ?>ckeditor/ckfinder/ckfinder.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<?php include_once("Menu1_view.php")?>
			</div>
			<div id="content" class="article-v1"  style="margin-left: 10px;">
				<div class="panel box-shadow-none content-header">
					<div class="panel-body">
						<div class="col-md-12">
							<div class="text-xs-center">
								<h2 class="display-3" style="text-align: center;"> Quản lý tin</h2>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-6">
						<div class="jumbotron text-xs-center">
							<h4 class="display-4">Thêm mới tin</h4>
							<hr>
						</div>

						<div class="formthem">
							<form action="<?php echo base_url(); ?>/tin/tin_add" method="post" enctype="multipart/form-data">
								<fieldset>
									<label for="formGroupExampleInput">Tiêu đề tin: </label>
									<input type="text" id="tieude" name="tieude" class="form-control" placeholder="Tiêu đề tin">
								</fieldset>
								<br>
								<div class="row">
									<div class="col-sm-6">
										<fieldset>
											<label for="formGroupExampleInput">Ảnh tin: </label>
											<input type="file" name="anhtin" class="form-control" placeholder="Anh tin">
										</fieldset>
									</div>
									<div class="col-sm-6">
										<fieldset>
											<label for="formGroupExampleInput">Danh mục tin: </label>
											<select name="iddm" class="form-control" style="height: 30px;">
												<?php foreach ($dulieudanhmuc as $value): ?>
													<option value="<?=$value['iddm'] ?>"><?=$value['tendanhmuc'] ?></option>
												<?php endforeach ?>
											</select>
										</fieldset>
									</div>
								</div>
								<br>
								<fieldset>
									<label for="formGroupExampleInput">Trích dẫn</label>
									<input name="trichdan" id="trichdan" class="trichdan form-control"></input>
								</fieldset>
								<br>
								<fieldset>
									<label for="formGroupExampleInput">Nội dung tin</label>
									<textarea name="noidungtin" id="noidungtin" class="noidungtin" cols="30" rows="10"></textarea>
								</fieldset>
								<button type="submit" class="btn btn-primary" name="submit">Gửi dữ liêu</button>
							</form>
						</div>
					</div>

					<div class="col-sm-6 danhsach">
						<div class="jumbotron text-xs-center">
							<h4 class="display-4">Danh sách các tin</h4>
							<hr>
						</div>
						<!-- 				 danh sách tin-->
						<div class="card-group">
							<table class="table table-hover">
							<thead>
								<th>Ảnh tin</th>
								<th>Tiêu đề</th>
								<th>Danh mục tin</th>
								<th>Ngày đăng</th>
								<th>Thao tác</th>
							</thead>
							<tbody>
								<?php foreach ($dulieutin as $value): ?>
								<tr>
									<td><img style="height: 30px;width: 30px;" src="<?=$value['anhtin'] ?>" alt=""></td>
									<td><?=$value['tieude'] ?></td>
									<td><?=$value['tendanhmuc'] ?></td>
									<td><?=date('d/m/Y - G:i - A',$value['ngaytao']) ?></td>
									<td><a href="<?php echo base_url(); ?>tin/tin_edit/<?=$value['idtt'] ?>" class="btn btn-outline-success sua">Sửa <i class="fa fa-pencil"></i></a></td>
								</tr>
								<?php endforeach ?>
							</tbody>
							<!-- <?php foreach ($dulieutin as $value): ?>
								<div class="col-sm-4" style="height: 430px;">
									<div class="card">
										<img style="height: 150px;margin-left: 0px;" class="card-img-top img-fluid" src="<?=$value['anhtin'] ?>" alt="">
										<hr>
										<a href="<?php echo base_url(); ?>tin/tin_edit/<?=$value['idtt'] ?>" class="btn btn-outline-success sua">Sửa <i class="fa fa-pencil"></i></a>

										<div class="card-block">
											<h4 class="card-title " style="font-weight: bold;"><?=$value['tieude'] ?></h4>
											<p class="card-text text-warning">Đăng vào ngày: <br><?=date('d/m/Y - G:i - A',$value['ngaytao']) ?></p>
											<p class="card-text"><?=$value['trichdan'] ?></p>
										</div>
									</div>
								</div>
							<?php endforeach ?> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		CKEDITOR.replace( 'noidungtin', {
			filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images',
		});

		CKEDITOR.replace( 'noidungtinsua', {
			filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
			filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images',
		});
	</script>
</body>
</html>