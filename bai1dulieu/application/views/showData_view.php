<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>showData</title>
	<script type="text/javascript" src="<?php echo base_url();?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url();?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url();?>1.css">
</head>
<body>
	<!-- lay 1 doan html cua 1 file gan vao file hien tai -->
	<?php require('header_sim.php') ?>

	<div class="container">
			<h3 class="text-xs-center">Các sim và giá hiện có</h3>
			<hr>
	</div>	

	<div class="container" >
		<div class="row">
				
				<?php foreach ($dulieutucontroller as $key => $value): ?>
					<div class="col-sm-4">
						<div class="card card-block">
							<h3 class="card-title">so sim:<?= $value['so'] ?></h3>
							<p class="card-text">gia tien: <?= $value['gia'] ?></p>
							<p class="card-text">ID: <?= $value['id'] ?></p>
							<a href="showData/deleteData/<?= $value['id'] ?>" class="btn btn-danger xoa"><i class="fa fa-times"></i></a>
							<a href="showData/editData/<?= $value['id'] ?>" class="btn btn-warning xoa"><i class="fa fa-pencil"></i></a>
						</div>
					</div>
				<?php endforeach ?>

		</div>
	
	</div>
	<div class="container">
		<a href="AddData" class="btn">nhap du lieu</a>
	</div>	
</body>
</html>