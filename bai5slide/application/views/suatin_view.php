<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sửa tin</title>
	<script type="text/javascript" src="<?= base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url(); ?>1.css"> 
 	<script type="text/javascript" src="<?= base_url() ?>ckeditor/ckeditor.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>ckeditor/ckfinder/ckfinder.js"></script>
</head>
<body>
	<?php 
	include('headerbai5.php') ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-8 push-sm-2 suatin">
				<div class="jumbotron text-xs-center">
					<h1 class="display-3">Sửa tin</h1>
					<p class="lead">Sửa tin.</p>
					<hr class="m-y-md">
				</div>
				<div class="formthemmoi">
					<form action="<?= base_url() ?>tin/luutindasua" method="post" enctype="multipart/form-data">
						<?php foreach ($dulieutinsua as $value): ?>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Tiêu đề tin</label>
								<input type="text" class="form-control" id="tieude" name="tieude" value="<?= $value['tieude'] ?>">
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Trích dẫn</label>
								<input type="hidden" name="id" value="<?= $value['id'] ?>">
								<input type="text" class="form-control" id="trichdan" name="trichdan" value="<?= $value['trichdan'] ?>">
							</fieldset>
							
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Ảnh tin</label>
								<input type="hidden" id ="anhtincu" name="anhtincu" value="<?= $value['anhtin'] ?>">
								<input type="file" class="form-control" id="anhtin" name="anhtin" >
								<img src="<?= $value['anhtin'] ?>" alt="" class="container-fluid" style="width:50%">
							</fieldset>
							
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Danh mục tin</label>
								<select class="c-select" name="iddanhmuc" value="<?= $value['iddanhmuc'] ?>">
										<?php foreach ($dulieudanhmuc as $danhmuc): ?>
											<option value="<?= $danhmuc['iddanhmuc'] ?>" <?php if ($value['iddanhmuc']==$danhmuc['iddanhmuc']) {
												echo "selected";
											} ?>>
												<?= $danhmuc['tendanhmuc'] ?>											
											</option>
										<?php endforeach ?>
								</select>
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Nội dung tin</label>
								<textarea name="noidungtin" id="noidungtin" class="noidungtin"  cols="30" rows="10" value="">
									<?= $value['noidungtin'] ?>
								</textarea>
							</fieldset> 
							<fieldset class="form-group">
								<input type="submit" value="Sửa tin" class="btn btn-success">
							</fieldset>
						<?php endforeach ?>
					</form>
				</div>
			</div>
		</div>
	</div>
	<script>
		 CKEDITOR.replace( 'noidungtin', {
		    filebrowserBrowseUrl:'<?= base_url() ?>ckeditor/ckfinder/ckfinder.html',
		    filebrowserImageBrowseUrl:'<?= base_url() ?>ckeditor/ckfinder/ckfinder.html?Type=Images'
		});
	</script>
</body>
</html>