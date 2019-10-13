<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>menu đa cấp</title>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url(); ?>1.css"> 
</head>
<body>
	<?php include "headerbai5.php" ?>	
	<div class="container">
		<div class="row">
			<div class="col-sm-6 push-sm-3">
				 <form method="post" action="<?= base_url(); ?>Menudacap/addMenuDaCap" enctype="multipart/form-data">
				 	<h2 class="text-xs-center">Thêm mới menu đa cấp</h2>
				 	<hr>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Tên menu</label>
						<input name="tenmenu" type="text" class="form-control" id="tenmenu" placeholder="Tiêu đề">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Link của Menu</label>
						<input name="linkmenu" type="text" class="form-control" id="linkmenu" placeholder="Link">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">ID menu cha</label>
						<input name="idmenucha" type="text" class="form-control" id="idmenucha" placeholder="id menu cha">
					</fieldset>
					<fieldset class="form-group">
						<input type="submit" class="form-control btn btn-success" id="submit" value="Thêm mới">
						<a href="<?= base_url(); ?>Menudacap/xulyMenuDeQui" class="btn btn-warning">show ket qua</a>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>