<!DOCTYPE html>
<html lang="en"><head>
	<title> Quản lý tài khoản </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body >
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
								<h2 class="display-3" style="text-align: center;"> Danh sách tài khoản</h2>
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
											<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
										</div>
										<div class="modal-body">
											<form action="<?= base_url() ?>khachhang/khachhang_add/" method="post" enctype="multidata/form-data" class="form-horizontal" role="form" onsubmit="return validateFormADD()">
												<div class="form-group">
													<label class="col-sm-3 control-label">Tên tài khoản</label>
													<div class="col-sm-6">
														<input class="form-control" type="text" name="tk" id="tk" placeholder="Tên tài khoản">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Tên đầy đủ</label>
													<div class="col-sm-6">
														<input class="form-control" type="text" name="tdd" id="tdd" placeholder="Tên khách hàng">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Mật khẩu</label>
													<div class="col-sm-6">
														<input class="form-control" type="text" name="mk" id="mk" placeholder="Mật khẩu">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Số điện thoại</label>
													<div class="col-sm-6">
														<input class="form-control" type="text" name="sdt" id="sdt" placeholder="Số điện thoại">
													</div>
												</div>
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

						<table class="table table-hover">
							<thead>
								<th>Tài khoản</th>
								<th>Tên đầy đủ</th>
								<th>Mật khẩu</th>
								<th>SDT</th>
								<th>Thao tác</th>
							</thead>
							<tbody>
								<?php foreach ($mangketqua as $value): ?>
									<tr>
										<td hidden="true"></td>
										<td><?= $value['TK'] ?></td>
										<td><?= $value['TDD'] ?></td>
										<td><?= $value['MK'] ?></td>
										<td><?= $value['SDT'] ?></td>
										<td>
											<a href="<?php echo base_url(); ?>khachhang/khachhang_delete/<?= $value['IDKH'] ?>" onclick="return confirm('Bạn có muốn xoá không ?');"><button class="btn btn-danger " name="btnDelete">Xoá</button></a>
											<button type="button" class="btn btn-info" data-toggle="modal" data-target="#<?= $value['IDKH'] ?>">Sửa</button>
											<div id="<?= $value['IDKH'] ?>" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h2 style="text-align: center;">Sửa thông tin tài khoản</h2>
														</div>
														<div class="modal-body">
															<form action="<?= base_url() ?>khachhang/khachhang_updata/" method="POST" class="form-horizontal">
																<div class="form-group">
																	<input type="text" name="idkh" hidden="true" value="<?= $value['IDKH'] ?>">
																	<label class="col-sm-3 control-label">Tên tài khoản</label>
																	<div class="col-sm-6">
																		<input type="text" class="form-control" placeholder="Tên tài khoản" name="tk" value="<?= $value['TK'] ?>">
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label">Tên đầy đủ</label>
																	<div class="col-sm-6">
																		<input type="text" class="form-control" placeholder="Tên khách hàng" name="tdd" value="<?= $value['TDD'] ?>">
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label">Mật khẩu</label>
																	<div class="col-sm-6">
																		<input type="text" class="form-control" placeholder="Mật khẩu" name="mk" value="<?= $value['MK'] ?>">
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label">Số điện thoại</label>
																	<div class="col-sm-6">
																		<input type="text" class="form-control" placeholder="Số điện thoại" name="sdt" value="<?= $value['SDT'] ?>">
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