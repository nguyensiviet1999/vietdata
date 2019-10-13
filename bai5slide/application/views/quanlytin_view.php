<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quản lý tin</title>
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
			<div class="col-sm-6 themmoi">
				<div class="jumbotron text-xs-center">
					<h1 class="display-3">Thêm mới tin</h1>
					<p class="lead">Thêm mới tin.</p>
					<hr class="m-y-md">
				</div>
				<div class="formthemmoi">
					<form action="<?= base_url() ?>tin/themmoitin" method="post" enctype="multipart/form-data">
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Tiêu đề tin</label>
							<input type="text" class="form-control" id="tieude" name="tieude" placeholder="Tiêu đề">
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Trích dẫn</label>
							<input type="text" class="form-control" id="trichdan" name="trichdan" placeholder="Trích dẫn">
						</fieldset>
						
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Ảnh tin</label>
							<input type="file" class="form-control" id="anhtin" name="anhtin" placeholder="Ảnh tin">
						</fieldset>
						
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Danh mục tin</label>
							<select class="c-select" name="iddanhmuc" id="">
								<?php foreach ($dulieudanhmuc as $value): ?>
									<option value="<?= $value['iddanhmuc'] ?>"><?= $value['tendanhmuc'] ?></option>
								<?php endforeach ?>
							</select>
						</fieldset>
						<fieldset class="form-group">
							<label for="formGroupExampleInput">Nội dung tin</label>
							<textarea name="noidungtin" id="noidungtin" class="noidungtin"  cols="30" rows="10">
								
							</textarea>
						</fieldset> 
						<fieldset class="form-group">
							<input type="submit" value="Thêm tin" class="btn btn-success">
						</fieldset>
					</form>
				</div>
			</div>
			<div class="col-sm-6 danhsach">
				<div class="jumbotron text-xs-center">
					<h1 class="display-3">Danh sách tin</h1>
					<p class="lead">Danh sách tin</p>
					<hr class="m-y-md">
				</div>
				<div class="row">
					<div class="card-group">

						<?php foreach ($dulieutin as $value): ?>
							<div class="col-sm-4">
								<div class="card">
									<img class="card-img-top img-fluid" src="<?= $value['anhtin'] ?>" alt="Card image cap">
									<div class="card-block">
										<h4 class="card-title"><?= $value['tieude'] ?></h4>
										<p class="card-text"><?= $value['trichdan'] ?></p>
										<p class="card-text"><small class="text-muted">Đăng vào ngày<?= date('d/m/Y',$value['ngaytao']) ?></small></p>
										<a href="loadTinSua/<?= $value['id'] ?>" class="btn btn-warning"><i class="fa fa-pencil"></i></a>
										<a href="xoatin/<?= $value['id'] ?>" class="btn btn-danger"><i class="fa fa-times"></i></a>
									</div>
								</div>
							</div>
						<?php endforeach ?>

					</div>
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