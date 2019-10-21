<!DOCTYPE html>
<html>
<head>
	<title> Danh muc tin </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>vendor/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/Bootstrap/css/bootstrap.min.css">
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
							<h2 class="display-3" style="text-align: center;"> Quản lý danh mục </h2>
						</div>
	                  </div>
	                </div>
	            </div>
	            
				<div class="col-md-12">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6">
								<div class="jumbotron jumbotron-fluid">
									<div class="container">
										<h4 class="display-4">Thêm danh mục tin</h4>
									</div>
								</div>
								<!-- <form action="<?php //echo base_url() ?>tin/themdanhmuc" method="post"> -->
									<fieldset>
										<label for="formGroupExampleInput">Tên danh mục</label>
										<input type="text" id="tendanhmuc" name="tendanhmuc" class="form-control" placeholder="Tên danh mục">
									</fieldset>
									<br>
									<fieldset>
										<input type="submit" value="Thêm danh mục" class="form-control" id="nutthemdanhmuc">
									</fieldset>
								<!-- </form> -->
							</div> <!-- kết thúc form them -->
							<div class="col-sm-6 cacdanhmuc">
								<div class="jumbotron jumbotron-fluid">
									<div class="container">
										<h4 class="display-4">Danh sách danh mục tin</h4>
									</div>
								</div>
								<?php foreach ($dl as $key => $value): ?>
									<div class="card card-inverse card-primary mb-3 text-center">
										<div class="card-block">
											<div class="thaotac text-xs-right">
												<a data-href="" class="btn btn-danger nutsua"><i class="fa fa-pencil"></i></a>
												<a data-href="<?= $value['iddm']?>" class="btn btn-warning nutxoa"><i class="fa fa-remove"></i></a>
											</div>
											<div class="jquery_button text-xs-right hidden-xs-up">
												<a href="" class="btn btn-success nutluu">Lưu</a>
											</div>
											<h4 class="card-blockquote">
												<fieldset class="form-group hidden-xs-up jquery_tendanhmuc">
													<input type="hidden" value="<?= $value['iddm']?>" class="form-control iddm">
													<input type="text" value="<?= $value['tendanhmuc']?>" class="form-control tendanhmuc">
												</fieldset>
												<div class="noidung_ten">
													<?= $value['tendanhmuc']?>
												</div>
											</h4>
										</div>
									</div>
								<?php endforeach ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.js"></script>
 	<script src="<?php echo base_url(); ?>vendor/Bootstrap/js/jquery-2.1.4.min.js"></script>
 	<script>
		$(document).ready(function () {
			var duongdan = '<?php echo base_url()?>';
			//bắt sự kiện nut
			$('#nutthemdanhmuc').click(function(event) {
				/* Act on the event */;
				var tendanhmuc = $('#tendanhmuc').val();
				//console.log(tendanhmuc);
				$.ajax({
					url: duongdan+'tin/danhmuctin_add',
					type: 'POST',
					dataType: 'json',
					data: {tendanhmuc: $('#tendanhmuc').val()}
				})
				.done(function() {
					//console.log("success");
				})
				.fail(function() {
					//console.log("error");
				})
				.always(function(res) {
					//console.log(res);

					noidung = '<div class="card card-inverse card-primary mb-3 text-center">';
					noidung +='<div class="card-block">';
					noidung +='<div class="thaotac text-xs-right">';
					noidung +='<a data-href="'+res+'" class="btn btn-danger nutsua"><i class="fa fa-pencil"></i></a>';
					noidung +='<a data-href="'+res+'" class="btn btn-warning nutxoa"><i class="fa fa-remove"></i></a>';
					noidung +='</div>';
					noidung +='<h4 class="card-blockquote">';
					noidung +='<div class="noidung_ten">';
					noidung +=$('#tendanhmuc').val();
					noidung +='</div>';
					noidung +='</h4>';
					noidung +='</div>';
					noidung +='</div>';
					$('.cacdanhmuc').append(noidung);
					$('#tendanhmuc').val('');
				});
			});
			//hết cho add
			//bắt đầu nút xóa
			$('body').on('click','.nutxoa', function(event){
				iddm = $(this).data('href');
				doituongxoa = $(this).parent().parent().parent();
				//console.log(linkxoa);
				$.ajax({
					url: duongdan+'/tin/danhmuctin_delete/'+iddm,
					type: 'POST',
					dataType: 'json',
				})
				.done(function() {
					console.log("success");
				})
				.fail(function() {
					console.log("error");
				})
				.always(function() {
					console.log("complete");
					doituongxoa.remove();
				});
			});
			//sửa

			$('body').on('click','.nutsua', function(event){
				//ẩn nội dung cũ
				$(this).parent().addClass('hidden-xs-up');
				$(this).parent().next().next().find('.noidung_ten').addClass('hidden-xs-up');
				//hiện form sửa và nút
				$(this).parent().next().removeClass('hidden-xs-up');
				$(this).parent().next().next().find('.jquery_tendanhmuc').removeClass('hidden-xs-up');

				event.preventDefault();
			});

			$('body').on('click','.nutluu', function(event){
				//lấy giá trị mới
				giatriid = $(this).parent().next().children('.jquery_tendanhmuc').children('.iddm').val();
				giatritendm = $(this).parent().next().children('.jquery_tendanhmuc').children('.tendanhmuc').val();
				phantu1 = $(this).parent().addClass('hidden-xs-up');
				phantu2 = $(this).parent().next().children('.jquery_tendanhmuc').children('.tendanhmuc').addClass('hidden-xs-up');
				noidung = $(this).parent().next().children('.jquery_tendanhmuc').children('.tendanhmuc').val();
				//cho hiển thị
				hienthi1 = $(this).parent().prev().removeClass('hidden-xs-up');
				hienthi2 = $(this).parent().next().children('.noidung_ten').html(noidung).removeClass('hidden-xs-up');
				$.ajax({
					//kết nôt controller danhmuctin_edit
					url: duongdan+'/tin/danhmuctin_edit',
					type: 'POST',
					dataType: 'json',
					data: {iddm: giatriid,
						tendanhmuc: giatritendm
					},
				})
				.done(function() {
					//console.log("success");
				})
				.fail(function() {
					//console.log("error");
				})
				.always(function() {
					//console.log("complete");
				});

				event.preventDefault();
			});
		})
	</script>
</body>
</html>