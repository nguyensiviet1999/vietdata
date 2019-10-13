<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa mới slide</title>
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
				 <form method="post" action="<?= base_url() ?>EditSlide" enctype="multipart/form-data">
				 	<h2 class="text-xs-center">Sửa slide</h2>
				 	<hr>
				 	<?php $num = 1;?>
					<?php foreach ($mangdl as $key => $value): ?>
						<h3><?php echo 'Slide số : '.$num++; ?></h3>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Tiêu đề Slide</label>
							<input name="title[]" type="text" class="form-control" id="title" placeholder="Tiêu đề" value="<?= $value['title'] ?>">
						</fieldset><fieldset class="form-group">
							<label for="formGroupExampleInput">Mô tả Slide</label>
							<input name="description[]" type="text" class="form-control" id="description" value="<?= $value['description'] ?>">
						</fieldset><fieldset class="form-group">
							<label for="formGroupExampleInput">Link của nút</label>
							<input name="button_link[]" type="text" class="form-control" id="button_link" placeholder="Link của nút" value="<?= $value['button_link'] ?>">
						</fieldset><fieldset class="form-group">
							<label for="formGroupExampleInput">Text của nút</label>
							<input name="button_text[]" type="text" class="form-control" id="button_text" placeholder="Text của nút" value="<?= $value['button_text'] ?>">
						</fieldset><fieldset class="form-group">
							<label for="formGroupExampleInput">Upload Ảnh</label>
							<img src="<?= $value['slide_image'] ?>" width = "60%">
							<input name="slide_image_old[]" type="hidden" class="form-control" id="slide_image_old" value="<?= $value['slide_image'] ?>">
							<input name="slide_image[]" type="file" class="form-control" id="slide_image">
						</fieldset></fieldset><fieldset class="form-group" >
							<a href="<?= base_url() ?>EditSlide/deleteJson/<?= $value['title'] ?>" class="btn btn-danger form-control">Xoa</a>
						</fieldset>
					<?php endforeach ?>
					</fieldset></fieldset><fieldset class="form-group" >
						<input type="submit" class="form-control btn btn-success" id="submit" value="Sửa" >
					</fieldset>
				</form>
			</div>
		</div>
	</div>

</body>
</html> 