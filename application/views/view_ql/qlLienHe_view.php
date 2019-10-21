<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản lý thông tin</title>
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
							<h2 class="display-3" style="text-align: center;"> Form sửa thông tin nhà hàng</h2>
						</div>
	                  </div>
	                </div>
	            </div>
				<div class="col-md-12">
					<div class="container-fluid main">
						<div class="row">
							<form action="<?= base_url() ?>cauhinh/thongtin_update/" method="post" enctype="multipart/form-data">
								<div class="form-group row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-md-4 form-control-label text-xs-right">Số điện thoại:</label>
											<div class="col-md-8">
												<input type="number" name="sdt" class="form-control" id="sdt" value="<?= $dulieu['sdt']?>">
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-md-4 form-control-label text-xs-right">Địa chỉ:</label>
											<div class="col-md-8">
												<input type="text" name="diachi" class="form-control" id="diachi" placeholder="Địa chỉ" value="<?= $dulieu['diachi'] ?>">
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-md-4 form-control-label text-xs-right">Email:</label>
											<div class="col-md-8">
												<input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= $dulieu['email'] ?>">
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-md-4 form-control-label text-xs-right">Link facebook:</label>
											<div class="col-md-8">
												<input type="text" name="fb" class="form-control" id="fb" placeholder="Link facebook" value="<?= $dulieu['fb'] ?>">
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-md-4 form-control-label text-xs-right">Link twitter:</label>
											<div class="col-md-8">
												<input type="text" name="twitter" class="form-control" id="twitter" placeholder="Link twitter" value="<?= $dulieu['twitter'] ?>">
											</div>
										</div>
									</div>

									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-md-4 form-control-label text-xs-right">Link instagram:</label>
											<div class="col-md-8">
												<input type="text" name="instagram" class="form-control" id="instagram" placeholder="Link instagram" value="<?= $dulieu['instagram'] ?>">
											</div>
										</div>
									</div>
								</div>

								<div class="form-group row">
									<div class="col-md-6">
										<div class="form-group row">
											<label class="col-md-4 form-control-label text-xs-right">Link google plus:</label>
											<div class="col-md-8">
												<input type="text" name="ggplus" class="form-control" id="ggplus" placeholder="Link google plus" value="<?= $dulieu['ggplus'] ?>">
											</div>
										</div>
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>