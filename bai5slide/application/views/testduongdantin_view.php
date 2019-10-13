<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> test duong dan tin</title>
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
				 <form method="post" action="<?= base_url(); ?>Testduongdantin/add" enctype="multipart/form-data">
				 	<h2 class="text-xs-center">test duong dan tin</h2>
				 	<hr>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">tieu de tin</label>
						<input name="tieudetin" type="text" class="form-control" id="tieudetin" placeholder="Tiêu đề">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">duong dan tin</label>
						<input name="duongdantin" type="text" class="form-control" id="duongdantin" placeholder="Link">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">noi dung tin</label>
						<input name="noidungtin" type="text" class="form-control" id="noidungtin" value="Test duong dan tin">
					</fieldset>
					<fieldset class="form-group">
						<input type="submit" class="form-control btn btn-success" id="submit" value="Thêm mới">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</body>
</html>