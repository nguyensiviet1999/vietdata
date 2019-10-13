<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm mới data</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url() ?>1.css">
</head>
<body>
	<?php include "headerbai5.php" ?>	
	<div class="container">
		<div class="row">
			<div class="col-sm-6 push-sm-3">
				 <form method="post" action="Slides/addSlide" enctype="multipart/form-data">
				 	<h2 class="text-xs-center">Thêm mới</h2>
				 	<hr>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Tiêu đề Slide</label>
						<input name="title" type="text" class="form-control" id="title" placeholder="Tiêu đề">
					</fieldset><fieldset class="form-group">
						<label for="formGroupExampleInput">Mô tả Slide</label>
						<input name="description" type="text" class="form-control" id="description" placeholder="Mô tả Slide">
					</fieldset><fieldset class="form-group">
						<label for="formGroupExampleInput">Link của nút</label>
						<input name="button_link" type="text" class="form-control" id="button_link" placeholder="Link của nút">
					</fieldset><fieldset class="form-group">
						<label for="formGroupExampleInput">Text của nút</label>
						<input name="button_text" type="text" class="form-control" id="button_text" placeholder="Text của nút">
					</fieldset><fieldset class="form-group">
						<label for="formGroupExampleInput">Upload Ảnh</label>
						<input name="slide_image" type="file" class="form-control" id="slide_image" >
					</fieldset></fieldset><fieldset class="form-group">
						<input type="submit" class="form-control btn btn-success" id="submit" value="Thêm mới">
					</fieldset>

				</form>
			</div>
		</div>
	</div>

</body>
</html> 