<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sua du lieu nhan vien</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?= base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url(); ?>1.css">
</head>
<body>
	<div class="container">
			<div class="text-xs-center">
				<h3 class="disphay-3">Sua nhân sự</h3>
				<hr>
			</div>
		</div>
	<?php foreach ($dataNhanVien as $key=>$value): ?>
		<form method="post" enctype="multipart/form-data" action="<?= base_url() ?>index.php/nhansu/updateNhansu">

				<div class="form-group row">
					<label for="anh" class="col-sm-2 form-control-label text-xs-right">Avatar</label>
					<div class="col-sm-8">
						<div class="row">
							<div class="col-sm-6">
								<img src="<?= $value['anhavatar'] ?>" alt="" class="img-fruid">
							</div>
						</div>
						<input type="hidden" name="id" value="<?= $value['id'] ?>">
						<input type="hidden" name="anhavatar2" value="<?= $value['anhavatar'] ?>">						
						<input name="anhavatar" type="file" class="form-control" id="anhavatar" placeholder="upload anh" value="<?= $value['anhavatar'] ?>" src = "<?= $value['anhavatar'] ?>">
					</div>
				</div>

				<div class="form-group row">
					<label for="ten" class="col-sm-2 form-control-label text-xs-right">Tên nhân viên</label>
					<div class="col-sm-8">
						<input name="ten" type="text" class="form-control" id="ten" placeholder="Tên nhân viên" value="<?= $value['ten'] ?>">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<div class="row">
							<label for="tuoi" class="col-sm-4 form-control-label text-xs-right">Tuổi</label>
							<div class="col-sm-8">
								<input name="tuoi" type="number" class="form-control" id="tuoi" placeholder="Vd: 20" value="<?= $value['tuoi'] ?>">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<label for="linkfb" class="col-sm-2 form-control-label text-xs-right">LinkFB</label>
							<div class="col-sm-8">
								<input name="linkfb" type="text" class="form-control" id="linkfb" placeholder="Vd: http://facebook.com/abcxyz" value="<?= $value['linkfb'] ?>">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-6">
						<div class="row">
							<label for="sdt" class="col-sm-4 form-control-label text-xs-right">SDT</label>
							<div class="col-sm-8">
								<input name="sdt" type="text" class="form-control" id="sdt" placeholder="Vd: 0123456789" value="<?= $value['sdt'] ?>">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<label for="sodonhang" class="col-sm-2 form-control-label text-xs-right">Số đơn hàng</label>
							<div class="col-sm-8">
								<input name="sodonhang" type="number" class="form-control" id="sodonhang" placeholder="Vd: 5" value="<?= $value['sodonhang'] ?>">
							</div>
						</div>
					</div>

				</div>


				<div class="form-group row text-xs-center">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success">Sua</button>
						<a href="../" class="btn btn-danger">Tro ve</a>
					</div>
				</div>
			</form>
	<?php endforeach ?>
	
</body>
</html>