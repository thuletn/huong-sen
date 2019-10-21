<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản lý thực đơn</title>
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
								<h2 class="display-3" style="text-align: center;"> Danh sách món ăn</h2>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<div class="container-fluid main">
						<div>
							<ul class="nav nav-pills">
								<li class="active"><a href="<?php echo base_url(); ?>thucdon/thucdondoan"><h4>Menu đồ ăn</h4></a></li>
								<li><a href="<?php echo base_url(); ?>thucdon/thucdondouong"><h4>Menu đồ uống</h4></a></li>
								<li><a href="<?php echo base_url(); ?>thucdon/thucdoncombo"><h4>Menu combo</h4></a></li>
								<li><a href="<?php echo base_url(); ?>thucdon/themthucdon""><h4>Thêm thực đơn</h4></a></li>
							</ul>
						</div>
						<div class="row" style="margin-top: 50px;">
							<?php foreach ($mangketqua as $value): ?>
								<div class="col-xs-6 col-md-3">
									<div class="thumbnail">
										<img class="card-img-top img-fluid" src="<?= $value['anh'] ?>" alt="" style="width: 263px; height: 194px;">
										<div class="caption">
											<h3><?= $value['tieude'] ?></h3>
											<p style="height: 50px;"><?= $value['mota'] ?></p>
											<h4>Giá: <?= $value['gia'] ?>$</h4>
											<p class="card-text">
												<small><a href="<?php echo base_url(); ?>thucdon/thucdon_delete/<?= $value['loai'] ?>/<?= $value['idma'] ?>" class="btn btn-danger" onclick="return confirm('Bạn có muốn xoá không ?');">Xóa</a></small>
												<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?= $value['idma'] ?>">Sửa</button>
												<!-- modal -->
												<div class="modal fade" id="<?= $value['idma'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
													<div class="modal-dialog">
														<div class="modal-content" style="width: 1000px; margin-left: -200px;">
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
																<h2 style="text-align: center;">Sửa thông tin món ăn</h2>
															</div>
															<div class="modal-body">
																<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>thucdon/thucdonda_updata/">

																	<div class="form-group row">
																		<div class="col-md-5">
																			<div class="form-group row">
																				<label for="anh" class="col-md-4 form-control-label text-xs-right">Ảnh món ăn</label>
																				<div class="col-md-8">
																					<div class="row">
																						<div class="col-md-5">
																							<img width="200px" height="200px" src="<?= $value['anh'] ?>" alt="" class="img-fluid">
																						</div>
																					</div>
																					<input type="hidden" name="idma" value="<?= $value['idma'] ?>">
																					<input type="hidden" name="anh2" value="<?= $value['anh'] ?>">
																					<input style="margin-top: 10px;" type="file" name="anh" class="form-control" id="anh" placeholder="Upload anh">
																				</div>
																			</div>
																		</div>

																		<div class="col-md-7">
																			<div class="form-group row">
																				<div class="col-md-12">
																					<div class="row">
																						<label for="tuoi" class="col-md-2 form-control-label text-xs-right">Tiêu đề</label>
																						<div class="col-md-10">
																							<input type="text" name="tieude" class="form-control" id="tieude" placeholder="Tiêu đề (tên món ăn)" value="<?= $value['tieude'] ?>">
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="form-group row">
																				<div class="col-md-12">
																					<div class="row">
																						<label for="tuoi" class="col-md-2 form-control-label text-xs-right">Mô tả</label>
																						<div class="col-md-10">
																							<textarea class="form-control" rows="5" id="mota" name="mota"><?= $value['mota'] ?></textarea>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="form-group row">
																				<div class="col-md-12">
																					<div class="row">
																						<label for="sdt" class="col-md-2 form-control-label text-xs-right">Giá tiền</label>
																						<div class="col-md-10">
																							<input type="number" name="gia" class="form-control" id="gia" placeholder="Giá tiền" value="<?= $value['gia'] ?>">
																						</div>
																					</div>
																				</div>
																			</div>

																			<div class="form-group row">
																				<div class="col-md-12">
																					<div class="row">
																						<label for="sdt" class="col-md-2 form-control-label text-xs-right">Loại</label>
																						<div class="col-md-10">
																							<input type="text" name="loai" class="form-control" id="loai" value="<?= $value['loai'] ?>" readonly="readonly">
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="modal-footer">
																		<button type="submit" class="btn btn-primary" name="submit">Gửi dữ liêu</button>
																		<button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
																	</div>
																</form>
															</div>
														</div>
													</div>
												</div>
											</p>
										</div>
									</div>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>