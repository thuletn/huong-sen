<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sửa tin</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/Bootstrap/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url(); ?>ckeditor/ckfinder/ckfinder.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<?php include_once("Menu1_view.php")?>
			</div>
			<div id="content" class="article-v1">
				<div class="panel box-shadow-none content-header">
	                <div class="panel-body">
	                  <div class="col-md-12">
	                      <div class="text-xs-center">
							<h2 class="display-3" style="text-align: center;"> Sửa tin </h2>
						</div>
	                  </div>
	                </div>
	            </div>
				<div class="col-md-12">
					<div class="container-fluid main">
						<div class="row">
				 			<div class="formsua">
							 	<form action="<?php echo base_url(); ?>tin/tin_updata" method="post" enctype="multipart/form-data">
							 		<?php foreach ($dulieusua as $value): ?>
							 			<img src="<?=$value['anhtin'] ?>" alt="" class="img-fluid">
								 		<input type="hidden" name="idtt" value="<?php echo $value['idtt']?>">
								 		<input type="hidden" name="anhtincu" value="<?php echo $value['anhtin']?>">
								 		<input type="hidden" name="iddmcu" value="<?php echo $value['iddm']?>">
								 		<fieldset>
											<label for="formGroupExampleInput">Tiêu đề tin: </label>
											<input type="text" id="tieude" name="tieude" class="form-control" placeholder="Tiêu đề tin" value="<?php echo $value['tieude']?>">
										</fieldset>
										<br>
								 		<div class="row">
								 			<div class="col-sm-6">
								 				<fieldset>
													<label for="formGroupExampleInput">Ảnh tin: </label>
													<input type="file" name="anhtin" class="form-control" placeholder="Anh tin" >
												</fieldset>
								 			</div>

								 			<div class="col-sm-3">
								 				<fieldset>
													<label for="formGroupExampleInput">Danh mục tin cũ </label>
													<input class="form-control" type="text" name="" value="<?php echo $tendanhmuc; ?>" readonly="readonly">
												</fieldset>
								 			</div>
								 			<?php endforeach ?>
								 			<div class="col-sm-3">
								 				<fieldset>
													<label for="formGroupExampleInput">Danh mục tin: </label>
													<select name="iddm" class="form-control" style="height: 30px;">
														<option value="0">Danh sách danh mục</option>
														<?php foreach ($dulieudanhmuc as $value): ?>
															<option value="<?=$value['iddm'] ?>"><?=$value['tendanhmuc'] ?></option>
														<?php endforeach ?>
													</select>
												</fieldset>
								 			</div>
								 		</div>
								 		<br>
								 		<?php foreach ($dulieusua as $value): ?>
								 		<fieldset>
											<label for="formGroupExampleInput">Trích dẫn</label>
											<input name="trichdan" id="trichdan" class="trichdan form-control" value="<?=$value['trichdan'] ?>"></input>
										</fieldset>
										<br>
										<fieldset>
											<label for="formGroupExampleInput">Nội dung tin</label>
											<textarea name="noidungtin" id="noidungtin" class="noidungtin" cols="30" rows="10"><?=$value['noidungtin'] ?></textarea>
										</fieldset>
										<br>
										<fieldset class="form-group">
											<div class="row">
												<div class="col-md-6">
													<input type="submit" class="btn btn-info btn-block btn-lg" name="btnSubmit" value="Lưu dữ liêu" ></input>
												</div>
												<div class="col-md-6">
													<a  href="<?= base_url(); ?>tin/tin_delete/<?=$value['idtt'] ?>" class="btn btn-danger btn-block btn-lg" onclick="return confirm('Bạn có chắc chắn xóa');">Xóa</a>
												</div>
											</div>
										</fieldset>
									<?php endforeach ?>
							 	</form>
							 </div>
						</div>
				 </div>
			</div>
		</div>
	</div>
	<script rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script src="<?php echo base_url(); ?>vendor/Bootstrap/js/jquery-2.1.4.min.js"></script>
 	<script>
 		CKEDITOR.replace( 'noidungtin', {
		    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
		    filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images',
		});
 	</script>
</body>
</html>