<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="refresh" content="60;url=<?php echo base_url();?>datban/datban_list" >
	<title>Danh sách đặt bàn</title>
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
							<h2 class="display-3" style="text-align: center;"> Danh sách đặt bàn</h2>
						</div>
	                  </div>
	                </div>
	            </div>
	            <div class="col-md-12">
	              	<div class="container-fluid main">
						<table class="table table-hover">
							<thead>
								<th hidden="true">ID</th>
								<th>Tên khách hàng</th>
								<th>Email</th>
								<th>SDT</th>
								<th>Giờ đặt bàn</th>
								<th>Số người</th>
								<th>Bàn đặt</th>
								<th>Trạng thái</th>
								<th>Xác nhận</th>
								<th>Hủy đặt bàn</th>
								<th>Thao tác</th>
							</thead>
							<tbody>
								<?php foreach ($dl as $value): ?>
									<tr>

										<td hidden="true"></td>
										<td hidden="true"><?= $value['iddb'] ?></td>
										<td><?= $value['tenkh'] ?></td>
										<td><?= $value['email'] ?></td>
										<td><?= $value['sdt'] ?></td>
										<td><?= $value['giodatban'] ?></td>
										<td><?= $value['songuoi'] ?></td>
										<?php
											if ($value['trangthai'] == 0) {
												?>
												<audio preload="auto" controls autoplay>
													<source src="<?php echo base_url();?>fileupload/ahihi.mp3" type="audio/mp3">
												</audio>
												<form action="<?php echo base_url(); ?>datban/datban_duyeta/<?= $value['iddb'] ?>" method="post">
													<td>
														<select style="width: 100px; height: 34px;" name="idban" id="idban">
															<option value="0">Tên bàn đặt</option>
															<?php foreach ($tenban as $value2): ?>
																<option value="<?= $value2['idban'] ?>"><?= $value2['tenban'] ?></option>
															<?php endforeach ?>
														</select>
													</td>
													<td style="color: #05a13c;">CHỜ XÁC NHẬN</td>
													<td><button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có muốn duyệt không ?');">Xác nhận đặt</button></td>
												</form>
													<td><a href="<?php echo base_url(); ?>datban/datban_huydat/<?= $value['iddb'] ?>" class="btn btn-outline-danger" onclick="return confirm('Bạn có muốn hủy không ?');" style="padding: 0px 0px; color: red;">Hủy đặt bàn</a></td>
												<?php
											}
											else if ($value['trangthai'] == 1){
												?>
												<form action="<?php echo base_url(); ?>datban/datban_duyetb/<?= $value['iddb'] ?>/<?= $value['idban'] ?>" method="post">
													<input hidden="true" name="idban1"><?= $value['idban'] ?>
													<td><?= $value['tenban'] ?></td>
													<td style="color: blue;">ĐẶT THÀNH CÔNG</td>
													<td><button type="submit" class="btn btn-primary" onclick="return confirm('Bạn có muốn duyệt không ?');">Xác nhận đến</button></td>
													</td>
												</form>
												<td><a href="<?php echo base_url(); ?>datban/datban_huydat/<?= $value['iddb'] ?>" class="btn btn-outline-danger" onclick="return confirm('Bạn có muốn hủy không ?');" style="padding: 0px 0px; color: red;">Hủy đặt bàn</a></td>
												<?php
											}

											else if ($value['trangthai'] == 2){
												?>
												<td><?= $value['tenban'] ?></td>
												<td style="color: black;">ĐÃ ĐẾN</td>
												<td></td>
												<td></td>
												<?php
											}

											else {
												?>
												<td></td>
												<td style="color: red;">ĐÃ HỦY ĐẶT BÀN</td>
												<td></td>
												<td></td>
												<?php
											}
										?>
										<td><a href="<?php echo base_url(); ?>datban/datban_delete/<?= $value['iddb'] ?>" class="btn btn-outline-danger" onclick="return confirm('Bạn có muốn xóa không ?');" style="padding: 0px 0px;"><i class="fa fa-trash"></i></a></td>
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