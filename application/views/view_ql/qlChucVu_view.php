<!DOCTYPE html>
<html lang="en"><head>
	<title> Quản lý chức vụ </title>
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
								<h2 class="display-3" style="text-align: center;"> Danh sách chức vụ</h2>
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
											<h2 style="text-align: center;">Thêm chức vụ</h2>
										</div>
										<div class="modal-body">
											<form action="<?= base_url() ?>chucvu/chucvu_add/" method="post" enctype="multidata/form-data" class="form-horizontal" role="form" onsubmit="return validateFormADD()">
												<div class="form-group">
													<label class="col-sm-3 control-label">Tên chức vụ</label>
													<div class="col-sm-6">
														<input class="form-control" type="text" name="tenchucvu" id="tenchucvu" placeholder="Tên chức vụ">
													</div>
												</div>
												<div class="form-group">
													<label class="col-sm-3 control-label">Hệ số lương</label>
													<div class="col-sm-6">
														<input class="form-control" type="number" name="hesoluong" id="hesoluong" placeholder="Hệ số lương">
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
								<th>ID</th>
								<th>Tên Chức Vụ</th>
								<th>Hệ Số Lương</th>
								<th>Thao tác</th>
							</thead>
							<tbody>
								<?php foreach ($chucvu as $value): ?>
									<tr>
										<td hidden="true"></td>
										<td><?= $value['idchucvu'] ?></td>
										<td><?= $value['tenchucvu'] ?></td>
										<td><?= $value['hesoluong'] ?> (nghìn/buổi)</td>
										<td>
											<a href="<?php echo base_url(); ?>chucvu/chucvu_delete/<?= $value['idchucvu'] ?>" onclick="return confirm('Bạn có muốn xoá không ?');"><button class="btn btn-danger " name="btnDelete">Xoá</button></a>
											<button type="button" class="btn btn-info" data-toggle="modal" data-target="#<?= $value['idchucvu'] ?>">Sửa</button>
											<div id="<?= $value['idchucvu'] ?>" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<div class="modal-header">
															<button type="button" class="close" data-dismiss="modal">&times;</button>
															<h2 style="text-align: center;">Sửa thông tin khách hàng</h2>
														</div>
														<div class="modal-body">
															<form action="<?= base_url() ?>chucvu/chucvu_updata/" method="POST" class="form-horizontal">
																<div class="form-group">
																	<input type="text" name="idchucvu" hidden="true" value="<?= $value['idchucvu'] ?>">
																	<label class="col-sm-3 control-label">Tên chức vụ</label>
																	<div class="col-sm-6">
																		<input type="text" class="form-control" placeholder="Tên chức vụ" name="tenchucvu" value="<?= $value['tenchucvu'] ?>">
																	</div>
																</div>
																<div class="form-group">
																	<label class="col-sm-3 control-label">Hệ số lương (nghìn/buổi)</label>
																	<div class="col-sm-6">
																		<input type="text" class="form-control" placeholder="Hệ Số Lương" name="hesoluong" value="<?= $value['hesoluong'] ?>">
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