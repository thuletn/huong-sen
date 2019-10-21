<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<title>Quản lý logo, slide, banner</title>
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
								<h2 class="display-3" style="text-align: center;"> Form sửa logo, slide, banner</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="container-fluid main">
						<div class="row">
							<div class="col-sm-6">
								<div class="jumbotron text-xs-center">
									<h4 class="display-4">Logo</h4>
									<hr>
								</div>
								<form action="<?= base_url() ?>cauhinh/logo_update/" method="post" enctype="multipart/form-data">
									<div class="col-md-12">
										<div class="form-group row" style="margin-left: 180px;">
											<input  class="col-md-12" type="hidden" name="logo_cu" class="form-control" value="<?= $anhlogo['logo']?>">
											<div class="col-md-12">
												<img width="200px" height="200px" src="<?= $anhlogo['logo'] ?>" alt="" class="img-fluid">
											</div>
											<div class="col-md-6">
												<input type="file" name="logo" class="form-control">
											</div>
										</div>
									</div>
									<div class="col-md-12 form-group row text-xs-center">
										<div class="col-md-10"></div>
										<div class="col-md-2">
											<button type="submit" class="btn btn-primary">Cập nhật logo</button>
										</div>
									</div>
								</form>
							</div>

							<div class="col-sm-6">
								<div class="jumbotron text-xs-center">
									<h4 class="display-4 text-xs-center" >Slider</h4>
									<hr>
								</div>

								<form action="<?= base_url() ?>cauhinh/slider_update/" method="post" enctype="multipart/form-data">
									<div class="col-md-12">
										<div class="form-group row ">
											<label class="col-md-4 form-control-label text-xs-right">Ảnh silder 1</label>
											<input type="hidden" name="slider_cu1" class="form-control" value="<?= $dulieu['slider1']?>">
											<div class="col-md-8">
												<img width="200px" height="200px" src="<?= $dulieu['slider1'] ?>" alt="" class="img-fluid">
											</div>
											<div class="col-md-6" style="margin-left: 180px; margin-top: 10px;">
												<input type="file" name="slider1" class="form-control">
											</div>
										</div>

										<div class="form-group row ">
											<label class="col-md-4 form-control-label text-xs-right">Ảnh silder 2</label>
											<input type="hidden" name="slider_cu2" class="form-control" value="<?= $dulieu['slider2']?>">
											<div class="col-md-8">
												<img width="200px" height="200px" src="<?= $dulieu['slider2'] ?>" alt="" class="img-fluid">
											</div>
											<div class="col-md-6" style="margin-left: 180px; margin-top: 10px">
												<input type="file" name="slider2" class="form-control">
											</div>
										</div>
									</div>

									<div class="col-md-12 form-group row text-xs-center">
										<div class="col-md-10"></div>
										<div class="col-md-2">
											<button type="submit" class="btn btn-primary">Cập nhật silder</button>
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
<!-- <form action="" method="post" enctype="multipart/form-data">
									<div class="col-md-8">
										<div class="form-group row">
											<label class="col-md-4 form-control-label text-xs-right">Ảnh banner 1</label>
											<div class="col-md-8">
												<input type="file" name="silder1" class="form-control">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-4 form-control-label text-xs-right">Ảnh banner 2</label>
											<div class="col-md-8">
												<input type="file" name="silder2" class="form-control">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-4 form-control-label text-xs-right">Ảnh banner 3</label>
											<div class="col-md-8">
												<input type="file" name="silder2" class="form-control">
											</div>
										</div>

										<div class="form-group row">
											<label class="col-md-4 form-control-label text-xs-right">Ảnh banner 4</label>
											<div class="col-md-8">
												<input type="file" name="silder2" class="form-control">
											</div>
										</div>
									</div>

									<div class="col-md-4 form-group row text-xs-center">
										<div class="col-md-offset-2 col-md-10">
											<button type="submit" class="btn btn-primary">Cập nhật banner</button>
										</div>
									</div>
								</form> -->