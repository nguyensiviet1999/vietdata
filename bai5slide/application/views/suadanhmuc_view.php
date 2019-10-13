<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa danh mục</title>
	<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url() ?>1.css">
</head>
</head>
<body>
	<?php 
	include('headerbai5.php') ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
		        <div class="jumbotron jumbotron-fluid">
					<div class="container">
						<h1 class="display-5">Thêm danh mục </h1>
						<p class="lead">form này cho phép thêm danh mục tin vào csdl</p>
					</div>
				</div>
				<form action="<?= base_url() ?>tin/editeddanhmuc" method="post">
					<?php foreach ($mangkq as $value): ?>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Tên danh mục</label>
							<input name="tendanhmuc"type="text" class="form-control" id="tendanhmuc" value="<?= $value['tendanhmuc'] ?>">
							<input name="iddanhmuc"type="hidden" class="form-control" id="iddanhmuc" value="<?= $value['iddanhmuc'] ?>" >
						</fieldset>
						<fieldset class="form-group">
							<input type="submit" class="form-control btn btn-success"value="Sửa danh mục">
						</fieldset>
					<?php endforeach ?>
					
				</form>
			</div>
		</div>
	</div>
</body>
</html>