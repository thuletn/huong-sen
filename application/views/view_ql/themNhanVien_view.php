<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thêm nhân viên</title>
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
								<h2 class="display-3" style="text-align: center;">Thêm nhân viên</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="container-fluid main">
						<div class="row">

							<div class="col-md-1">

							</div>
							<div class="col-md-10">
								<form action="<?= base_url() ?>nhanvien/nhanvien_add/" method="post" enctype="multipart/form-data">
									<div class="form-group row">
										<div class="col-md-6">
											<div class="form-group row">
												<label for="anhavatar" class="col-md-4 form-control-label text-xs-right">Ảnh đại diên</label>
												<div class="col-md-8">
													<input type="file" name="anhavatar" class="form-control" id="anhavatar" placeholder="Upload anh">
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group row">
												<label for="anh" class="col-md-4 form-control-label text-xs-right">Tên nhân viên</label>
												<div class="col-md-8">
													<input type="text" name="ten" class="form-control" id="ten" placeholder="Tên nhân viên">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-6">
											<div class="row">
												<label for="tuoi" class="col-md-4 form-control-label text-xs-right">Tuổi</label>
												<div class="col-md-8">
													<input type="number" name="tuoi" class="form-control" id="tuoi" placeholder="Tuổi">
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="row">
												<label for="sdt" class="col-md-4 form-control-label text-xs-right">Số điện thoại</label>
												<div class="col-md-8">
													<input type="text" name="sdt" class="form-control" id="sdt" placeholder="Số điện thoại">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<div class="col-md-6">
											<div class="row">
												<label for="chucvu" class="col-md-4 form-control-label text-xs-right">Chức vụ</label>
												<div class="col-md-8">
													<select style="width: 200px; height: 34px;" name="chucvu" id="chucvu">
														<option value="0">Chức vụ:</option>
														<?php foreach ($chucvu as $value): ?>
															<option value="<?= $value['idchucvu'] ?>"><?= $value['tenchucvu'] ?></option>
														<?php endforeach ?>
													</select>
												</div>
											</div>
										</div>

										<div class="col-md-6">
											<div class="row">
												<label for="fb" class="col-md-4 form-control-label text-xs-right">Link Facebook</label>
												<div class="col-md-8">
													<input type="text" name="fb" class="form-control" id="fb" placeholder="Link Facebook">
												</div>
											</div>
										</div>
									</div>

									<div class="form-group row text-xs-center">
										<div class="col-md-offset-2 col-md-10">
											<button type="submit" class="btn btn-primary">Gửi dữ liệu</button>
											<button type="reset" class="btn btn-danger">Nhập mới lại</button>
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