<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>json test</title>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url(); ?>1.css">
</head>
<body>
	<?php include "headerBai4.php" ?>
	<div class="container">
		<div class="card-deck-wrapper">
			<div class="card-deck">
				<?php foreach ($mangkq as $key => $value): ?>
					<div class="card">
						<div class="card-block">
							<h4 class="card-title">Ten: <?= $value->ten ?></h4>
							<p class="card-text">so dien thoai: <?= $value->sdt ?></p>
							<a href="testjson/deleteJson/<?= $value->sdt ?>" class="btn btn-danger">xóa</a>
							<a href="testjson/suaJson" class="btn btn-warning">sửa</a>
						</div>
					</div>
				<?php endforeach ?>
			</div>
		</div>
	</div>
	<div class="container">
		<div>
			<h1 style="text-align: center;">Thêm dữ liệu</h1>
		</div>
		<form action="testjson/themData" method="post" enctype="multipart/form-data">
			<div class="form-group row">
				<label for="ten" class="col-sm-2 form-control-label">Tên</label>
				<div class="col-sm-10">
					<input name="ten" type="text" class="form-control" id="ten" placeholder="VD: Nguyễn Văn A">
				</div>
			</div>
			<div class="form-group row">
				<label for="sdt" class="col-sm-2 form-control-label">Số Điện Thoại</label>
				<div class="col-sm-10">
					<input name="sdt" type="number" class="form-control" id="sdt" placeholder="VD: 0123456789">
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-success">Thêm</button>
					<button type="reset" class="btn btn-danger">Reset</button>	
				</div>
			</div>

		</form>
	</div>
</body>	
</html>