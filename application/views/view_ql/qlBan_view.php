<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- <meta http-equiv="refresh" content="60;url=<?php echo base_url();?>datban/datban_list" > -->
	<title>Quản lý bàn</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2">
				<?php include_once("Menu1_view.php")?>
			</div>
			<div id="content" class="article-v1">
				<div class="panel box-shadow-none content-header">
					<div class="panel-body">
						<div class="col-md-12">
							<div class="text-xs-center">
								<h2 class="display-3" style="text-align: center;"> Quản lý bàn</h2>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
	              	<div class="container-fluid main">
						<div class="row">
							<button class="btn btn-lg them col-md-2" data-toggle="modal" data-target="#myModal"><a href="#">ADD</a></button>
							<div class="col-md-2">

							</div>
							<form action="" method="GET" class="col-sm-6 pull-right">
								<div class="col-sm-10">
									<input type="text" hidden="true" name="action" value="search">
									<input type="text" class="form-control" placeholder="Tìm kiếm" name="search" style="height: 46px;">
								</div>
								<button type="submit" class="btn btn-primary col-sm-2" style="height: 46px;"><i class="fa fa-search"></i></button>
							</form>

							<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h2 style="text-align: center;">Thêm thông tin bàn</h2>
										</div>

										<div class="modal-body">
											<form action="<?= base_url() ?>ban/ban_add/" method="post" enctype="multidata/form-data" class="form-horizontal" role="form" onsubmit="return validateFormADD()">
												<div class="form-group">
													<label class="col-sm-3 control-label">Tên Bàn</label>
													<div class="col-sm-6">
														<input class="form-control" type="text" name="tenban" id="tenban" placeholder="Tên Bàn">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Số Ghế</label>
													<div class="col-sm-6">
														<input class="form-control" type="number" name="soghe" id="soghe" placeholder="Số Ghế">
													</div>
												</div>
												<!-- <div class="form-group">
													<label class="col-sm-3 control-label">Trạng thái</label>
													<div class="col-sm-6">
														<input class="form-control" type="text" name="mk" id="mk" placeholder="Mật khẩu">
													</div>
												</div> -->
												<div class="modal-footer">
													<button type="submit" class="btn btn-primary" name="Submit">Gửi dữ liệu</button>
													<button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>

						<table class="table table-hover" style="font-size: 16px;">
							<thead>
								<th width="100px"></th>
								<th>Tên Bàn</th>
								<th>Số Ghế</th>
								<th>Trạng Thái Bàn</th>
								<th>Thao tác</th>
							</thead>
							<tbody>
								<?php foreach ($mangketqua as $value): ?>
									<tr>
										<td width="100px"></td>
										<td><?= $value['tenban'] ?></td>
										<td><?= $value['soghe'] ?></td>
										<?php
											if($value['trangthaiban']==0){
										?>
										<td style="color: green;">Bàn trống</td>
										<?php }
											else if($value['trangthaiban']==1){
										?>
										<td style="color: blue;">Đã được đặt</td>
										<?php }
											else if($value['trangthaiban']==2){
										?>
										<td style="color: black;">Có khách ngồi</td>
										<?php } ?>
										<td>
											<a href="<?php echo base_url(); ?>ban/ban_delete/<?= $value['idban'] ?>" onclick="return confirm('Bạn có muốn xoá không ?');"><button class="btn btn-danger " name="btnDelete">Xoá</button></a>
											<button type="button" class="btn btn-info" data-toggle="modal" data-target="#<?= $value['idban'] ?>">Sửa</button>
											<div id="<?= $value['idban'] ?>" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h2 style="text-align: center;">Sửa thông tin bàn</h2>
														</div>
														<div class="modal-body">
															<form action="<?= base_url() ?>ban/ban_updata/" method="POST" class="form-horizontal">
																<div class="form-group">
																	<input type="text" name="idban" hidden="true" value="<?= $value['idban'] ?>">
																	<label class="col-sm-3 control-label">Tên Bàn</label>
																	<div class="col-sm-6">
																		<input type="text" class="form-control" placeholder="Tên Bàn" name="tenban" value="<?= $value['tenban'] ?>">
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label">Số Ghế</label>
																	<div class="col-sm-6">
																		<input type="text" class="form-control" placeholder="Số Ghế" name="soghe" value="<?= $value['soghe'] ?>">
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label">Trạng Thái</label>
																	<div class="col-sm-6">
																		<select style="width: 268px; height: 34px;" name="trangthaiban" id="trangthaiban">
																			<option value="0" style="color: green;">Bàn trống</option>
																			<option value="1" style="color: blue;">Đã được đặt</option>
																			<option value="2" style="color: black;">Có khách ngồi</option>
																		</select>
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
										</td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
	            </div>
			</div>
		</div>
	</div>
</body>
</html>