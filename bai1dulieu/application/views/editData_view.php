<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sua so sim</title>
	<!-- ket noi thu vien bootstrap va css -->
	<script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url();?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url();?>1.css">

</head>
<body>
	<?php require('header_sim.php') ?>
	<div class="container">
		<h2 class="text-xs-center">Sua so dien thoai o trong form sau</h2>

	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($mangketqua as $key => $value): ?>
				<div class="col-sm-8 push-sm-2">
					<!-- ../ la lui lai 1 duong dan -->
					<form action="../updateData" method="post" enctype="multidata/form-data">
						<div class="card">
							<div class="card-block">
								<fieldset class="form-group">
									<label for="formGroupExampleInput">ID</label>
									<input  name="id" type="hidden" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="<?= $value['id'] ?>" >
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput">So sim</label>
									<input name="so" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input" value="<?= $value['so'] ?>">
								</fieldset>
								<fieldset class="form-group">
									<label for="formGroupExampleInput2">Gia sim</label>
									<input name="gia" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Example input" value="<?= $value['gia'] ?>">
								</fieldset>
								<input type="submit" class="btn btn-success btn-block" value="nhap vao mysql">
							</div>
						</div>
						
					</form>
				</div>
			<?php endforeach ?>
			
		</div>
	</div>
	
</body>
</html>