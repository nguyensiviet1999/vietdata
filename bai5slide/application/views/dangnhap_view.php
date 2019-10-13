<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Break News</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url(); ?>css/1.css">
</head>
<body>
	<?php 
		if($this->session->userdata('email')=='nguyensiviet1999@gmail.com'){
			redirect('Do_edit','refresh');
		}
	 ?>
	
	<div class="dautien" style="background-image: url('<?= base_url(); ?>img/bgr_news.jpg');">
		<!-- <div class="container">
			<div class="row" style="z-index: 2">
				<img src="image/logo.png" alt="logo">
			</div>
		</div> -->
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<a href="<?= base_url(); ?>home"><img src="<?= base_url(); ?>img/logo.png" alt="logo"></a>
				</div>
			</div>
			<div class="row" style="height: 100px; text-align: center; color: White; text-align: center; font-size: 30px"  >
				<marquee ><i id ="title">Đăng nhập để có quyền quản trị</i></marquee>
			</div>
			<div class="row">
				<div class="col-sm-7" style="text-align: center; margin-top: 100px; color: #fff">
					<h1 >
						<i>Đăng nhập để có quyền quản trị</i>
					</h1>
					<p>
						
					</p>
				</div>
				<div class="col-sm-5">
						<form class="form-box" action="<?= base_url(); ?>dangnhap/dangnhap" method="post">
							<h3 class="h4 text-black mb-4">Đăng ký nhận tin tức</h3>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Email</label>
								<input type="text" class="form-control" name="email">
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput2">Mật khẩu</label>
								<input type="password" class="form-control" name="matkhau" >
							</fieldset>
							<fieldset class="form-group">
								<input type="submit" class="btn btn-success dangnhap" value="Đăng nhập" id="dangnhap"></input>
							</fieldset>
							<fieldset class="form-group">
								<input type="button" class="btn btn-success dangki" value="Đăng kí" id="dangki" ></input>
							</fieldset>
							<fieldset class="form-group">
								<input type="button" class="btn btn-success quenmatkhau" value="Quên mật khẩu" id="quenmatkhau"></input>
							</fieldset>
						</form>
						<form class="form-box hidden-xs-up" action="<?= base_url(); ?>dangnhap/dangki" method="post">
							<h3 class="h4 text-black mb-4">Đăng ký nhận tin tức</h3>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Tên</label>
								<input type="text" class="form-control" name="ten">
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Email</label>
								<input type="text" class="form-control" name="email">
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput2">Mật khẩu</label>
								<input type="password" class="form-control" name="matkhau" >
							</fieldset>
							<fieldset class="form-group">
								<input type="submit" class="btn btn-success" value="Đăng kí" ></input>
							</fieldset>
						</form>
						<form class="form-box hidden-xs-up" action="<?= base_url(); ?>dangnhap/quenmatkhau" method="post">
							<h3 class="h4 text-black mb-4">Đăng ký nhận tin tức</h3>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Tên</label>
								<input type="text" class="form-control" name="ten">
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Email</label>
								<input type="text" class="form-control" name="email">
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput2">Mật khẩu Mới</label>
								<input type="password" class="form-control" name="matkhaumoi" >
							</fieldset>
							<fieldset class="form-group">
								<input type="submit" class="btn btn-success" value="Xác nhận" ></input>
							</fieldset>
						</form>
						
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>1.js"></script>

 	<script>
 		$('body').on('click', '#dangki', function(event) {
 			/* Act on the event */
 			$(this).parent().parent().next().removeClass('hidden-xs-up');
 			$(this).parent().parent().addClass('hidden-xs-up');
 		});
 		$('body').on('click', '#quenmatkhau', function(event) {
 			/* Act on the event */
 			$(this).parent().parent().next().next().removeClass('hidden-xs-up');
 			$(this).parent().parent().addClass('hidden-xs-up');
 		});
 	</script>
</body>
</html>