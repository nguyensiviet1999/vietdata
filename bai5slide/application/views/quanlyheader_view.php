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
	<?php 
		foreach ($dlJsonHeader as $key => $value) {
			if ($key=='Welcome') {
				$Welcome = $value;
			}
			if ($key=='Testimonials') {
				$Testimonials = $value;
			}
			if ($key=='Our Services') {
				$Our_Services = $value;
			}
			if ($key=='logo') {
				$logo = $value;
			}
		}
	 ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 push-sm-3">
				 <form method="post" action="<?= base_url() ?>tin/updateJsonToDB" enctype="multipart/form-data">
				 	<h2 class="text-xs-center">Welcome</h2>
				 	<hr>
				 	<?php foreach ($Welcome as $value): ?>
				 		<fieldset class="form-group">
							<label for="formGroupExampleInput">Năm </label>
							<input value="<?= $value['nam'] ?>" name="nam[]" type="text" class="form-control" id="nam" placeholder="VD: 1999">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Nội dung năm </label>
							<input value="<?= $value['noidungnam'] ?>" name="noidungnam[]" type="text" class="form-control" id="noidungnam" placeholder="Mô tả">
						</fieldset>
				 	<?php endforeach ?>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Upload Ảnh Logo</label>
						<img src="<?= $logo?>" alt="" class="img-fluid">
						<input type="hidden" name="logocu" value="<?= $logo?>">
						<input name="logo" type="file" class="form-control" id="logo" >
					</fieldset>
					<h2 class="text-xs-center">Testimonials</h2>
				 	<hr>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Nội dung slide 1</label>
						<input value="<?= $dlJsonHeader['Testimonials']['noidungslide1'] ?>" name="noidungslide1" type="text" class="form-control" id="noidungslide1" placeholder="Mô tả">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Nội dung slide 2</label>
						<input value="<?= $dlJsonHeader['Testimonials']['noidungslide2'] ?>" name="noidungslide2" type="text" class="form-control" id="noidungslide2" placeholder="Mô tả">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Nội dung slide 3</label>
						<input value="<?= $dlJsonHeader['Testimonials']['noidungslide3'] ?>" name="noidungslide3" type="text" class="form-control" id="noidungslide3" placeholder="Mô tả">
					</fieldset>
					<h2 class="text-xs-center">Our Services</h2>
				 	<hr>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Breakfast</label>
						<input value="<?= $dlJsonHeader['Our Services']['Breakfast'] ?>" name="Breakfast" type="text" class="form-control" id="Breakfast" placeholder="Mô tả">
					</fieldset>

					<fieldset class="form-group">
						<label for="formGroupExampleInput">Brunch</label>
						<input value="<?= $dlJsonHeader['Our Services']['Brunch'] ?>" name="Brunch" type="text" class="form-control" id="Brunch" placeholder="Mô tả">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Lunch</label>
						<input value="<?= $dlJsonHeader['Our Services']['Lunch'] ?>" name="Lunch" type="text" class="form-control" id="Lunch" placeholder="Mô tả">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Dinner</label>
						<input value="<?= $dlJsonHeader['Our Services']['Dinner'] ?>" name="Dinner" type="text" class="form-control" id="Dinner" >
					</fieldset>
					<h2 class="text-xs-center">Reservations</h2>
				 	<hr>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Text của đặt bàn</label>
						<input value="<?= $dlJsonHeader['Reservations']['textdatban'] ?>" name="textdatban" type="text" class="form-control" id="textdatban" placeholder="Mô tả">
					</fieldset>
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Số điện thoại</label>
						<input value="<?= $dlJsonHeader['Reservations']['sdt'] ?>" name="sdt" type="text" class="form-control" id="sdt" placeholder="Mô tả">
					</fieldset>
					<fieldset class="form-group">
						<input type="submit" class="form-control btn btn-success" id="submit" value="Sửa dữ liệu">
					</fieldset>

				</form>
			</div>
		</div>
	</div>

</body>
</html> 