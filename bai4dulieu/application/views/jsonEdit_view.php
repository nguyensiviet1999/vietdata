<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>jsonEdit</title>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url(); ?>1.css">
</head>
<body>
	<?php include "headerBai4.php" ?>
	<?php $stt=1; ?>
	<form action="editData" method="post" enctype="multipart/form-data">
		<div class="container">
			<div>
				<h1 style="text-align: center;">Thêm dữ liệu</h1>
			</div>
			<?php foreach ($mangdl as $value): ?>
				<h2><?php echo 'Contact: '.$stt++; ?></h2>
				<div class="form-group row">
					<label for="ten" class="col-sm-2 form-control-label">Tên</label>
					<div class="col-sm-10">
						<input name="ten[]" type="text" class="form-control" id="ten" value="<?= $value['ten'] ?>">
					</div>
				</div>
				<div class="form-group row">
					<label for="sdt" class="col-sm-2 form-control-label">Số Điện Thoại</label>
					<div class="col-sm-10">
						<input name="sdt[]" type="number" class="form-control" id="sdt" value="<?= $value['sdt'] ?>">
					</div>
				</div>
			<?php endforeach ?>
			<div class="form-group row">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success">Lưu</button>
				</div>
			</div>
		</div>
		
	</form>
</body>
</html>