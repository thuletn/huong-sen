<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bài giới thiệu</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/Bootstrap/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>ckeditor/ckeditor.js"></script>
	<script src="<?php echo base_url(); ?>ckeditor/ckfinder/ckfinder.js"></script>
	<style>
        #cke_1_contents{
            height: 500px !important;
        }
    </style>
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
							<h2 class="display-3" style="text-align: center;"> Bài giới thiệu </h2>
						</div>
	                  </div>
	                </div>
	            </div>
				<div class="col-md-12">
					<div class="container-fluid main">
						<div class="row">
				 			<div class="formsua">
							 	<form action="<?php echo base_url(); ?>cauhinh/gioithieu_updata" method="post" enctype="multipart/form-data">
							 		<?php foreach ($gt as $value): ?>
								 		<input type="hidden" name="idgt" value="<?php echo $value['idgt']?>">
								 		<fieldset>
											<label for="formGroupExampleInput">Trích dẫn</label>
											<textarea name="trichdangt" id="trichdangt" class="trichdangt form-control" cols="30" rows="10"><?=$value['trichdangt'] ?></textarea>
										</fieldset>
										<br>
										<fieldset>
											<label for="formGroupExampleInput">Nội dung</label>
											<textarea name="noidung" id="noidung" class="noidung"><?=$value['noidung'] ?></textarea>
										</fieldset>
										<br>
										<fieldset class="form-group">
											<div class="row">
												<div class="col-md-12">
													<input type="submit" class="btn btn-info btn-block btn-lg" name="btnSubmit" value="Lưu dữ liêu" ></input>
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
 		CKEDITOR.replace( 'noidung', {
		    filebrowserBrowseUrl: '/ckfinder/ckfinder.html',
		    filebrowserImageBrowseUrl: '/ckfinder/ckfinder.html?Type=Images',
		});
 	</script>
</body>
</html>