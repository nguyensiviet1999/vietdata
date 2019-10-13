<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Them moi so sim</title>
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
		<h2 class="text-xs-center">them so dien thoai o trong form sau</h2>

	</div>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 push-sm-2">
				<form action="AddData/insertData_controller" method="post" enctype="multidata/form-data">
					<div class="card">
						<div class="card-block">
							<fieldset class="form-group">
								<label for="formGroupExampleInput">So sim</label>
								<input name="so" type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
							</fieldset>
							<fieldset class="form-group">
								<label for="formGroupExampleInput2">Gia sim</label>
								<input name="gia" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Example input">
							</fieldset>
							<input type="submit" class="btn btn-success btn-block" value="nhap vao mysql">
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>