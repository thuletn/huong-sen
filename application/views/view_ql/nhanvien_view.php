<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Quản lý nhân viên</title>
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
							<h2 class="display-3" style="text-align: center;"> Danh sách nhân viên</h2>
							<?php
								//lấy uri
							$uri = $_SERVER['REQUEST_URI'];
							$uri = explode('/', $uri);
							$tranghientai = end($uri);
								//var_dump($tranghientai);

							?>
						</div>
	                  </div>
	                </div>
	            </div>
				<div class="col-md-12">
					<div class="container-fluid main">
						<div class="row">
							<?php foreach ($mangketqua as $value): ?>
								<div class="col-md-3">
									<div class="card">
										<img class="card-img-top img-fluid" src="<?= $value['Anh'] ?>" alt="">
										<div class="card-block" style="margin-left: 30px">
											<h4 class="card-title"><?= $value['Ten'] ?></h4>
											<p class="card-text">Tuổi : <b><?= $value['Tuoi'] ?></b></p>
											<p class="card-text">Số điện thoại : <b><?= $value['Sdt'] ?></b></p>
											<p class="card-text">Chức vụ : <b><?= $value['tenchucvu'] ?></b></p>
											<p class="card-text"><small><a href="<?= $value['Fb']?>" class="btn btn-secondary">Facebook <i class="fa fa-chevron-right"></i> </a></small></p>
											<p class="card-text">
												<small><a href="<?php echo base_url(); ?>nhanvien/nhanvien_delete/<?= $value['Idnv'] ?>" class="btn btn-outline-danger" onclick="return confirm('Bạn có muốn xoá không ?');">Xóa  <i class="fa fa-remove"></i> </a></small>
												<small><a href="<?php echo base_url(); ?>nhanvien/suaNhanVien/<?= $value['Idnv'] ?>" class="btn btn-info">Sửa</a></small>
											</p>
										</div>
									</div>
								</div>
							<?php endforeach ?>
								</div>
							<div class="row">
								<div class="col-md-4"></div>
								<nav class="phantrang md-4 wow fadeInUp center-block">
										<ul class="pagination">
											<?php
											if($tranghientai == 1){

											}
											else{
												?>
												<li class="page-item">
													<a class="page-link" href="<?php echo base_url()?>nhanvien/page/<?= $tranghientai-1 ?>" aria-label="Previous">
														<span aria-hidden="true">&laquo;</span>
														<span class="sr-only">Previous</span>
													</a>
												</li>
												<?php
											}
											?>
											<?php for ($i=0; $i < $sotrang; $i++) {
												?>
												<?php
												if(($i+1) == $tranghientai){
													?>
													<li class="active"><a><?= $i+1 ?></a></li>
													<?php
												}
												else {?>
													<li><a href="<?php echo base_url()?>nhanvien/page/<?= $i+1 ?>"><?= $i+1 ?></a></li>
													<?php
												}
												?>
												<?php
											}
											?>
											<?php
											if($tranghientai == $sotrang){

											}
											else{
												?>
												<li class="page-item">
													<a class="page-link" href="<?php echo base_url()?>nhanvien/page/<?= $tranghientai+1 ?>" aria-label="Next">
														<span aria-hidden="true">&raquo;</span>
														<span class="sr-only">Next</span>
													</a>
												</li>
												<?php
											}
											?>
										</ul>
								</nav>
								<div class="col-md-4"></div>
							</div>
							<hr>
							<button type="button" class="btn btn-info"><a href="<?php echo base_url()?>nhanvien/themNhanVien" style="color:#FFF;text-decoration: none">Thêm Nhân Viên</a></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>