<!DOCTYPE html>
<html lang="en"><head>
	<title> Quản lý lương </title>
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
								<h2 class="display-3" style="text-align: center;"> Bản tính lương</h2>
							</div>
						</div>
					</div>
				</div>
	            <div class="col-md-12">
	              	<div class="container-fluid main">
						<div class="row">
							<form action="" method="GET" class="col-sm-6 pull-right">
								<div class="col-sm-10">
									<input type="text" hidden="true" name="action" value="search">
									<input type="text" class="form-control" placeholder="Tìm kiếm" name="search" style="height: 46px;">
								</div>
								<button type="submit" class="btn btn-primary col-sm-2" style="height: 46px;"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<form action="" method="POST" enctype="multipart/form-data">
							<table class="table table-hover">
								<thead>
									<th>Tên Nhân Viên</th>
									<th>Chức Vụ</th>
									<th>Hệ Số Lương</th>
									<th>Buổi Làm Trong Tháng</th>
									<th>Lương</th>
								</thead>
								<tbody>
									<?php foreach ($mangketqua as $value): ?>
										<tr>
											<td hidden="true"></td>
											<td><?= $value['Ten'] ?></td>
											<td><?= $value['tenchucvu'] ?></td>
											<td class="hsl"><?= $value['hesoluong'] ?></td>
											<td><input type="number" name="" id="buoi"></td>
											<td class="luong">0</td>
										</tr>
									<?php endforeach ?>
								</tbody>
							</table>
							<div>
								<input type="file" name="file">
								<button type="submit" name="btnGui" class="btn btn-danger">Nhập File Excel</button>
							</div>
						</form>
					</div>
	            </div>
        	</div>
		</div>
	</div>
</body>

<script>
	$(document).on('keyup', 'input[id=buoi]', function(){
		let value = $(this).val();	
		if(value != '') {
			let luong = $(this).closest('tr').find('.hsl').text();
			let tong = parseInt(luong) * parseInt(value);
			$(this).closest('tr').find('.luong').text(tong);
		}
		else {
			$(this).closest('tr').find('.luong').text(0);
		}
	});
</script>
</html>