<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Export to excel by jquery</title>
		<script type="text/javascript" src="<?= base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url(); ?>1.css"> 
<body>
	<?php 
		$uri = $_SERVER['REQUEST_URI'];
		$uri = explode('/', $uri);
		$uri = end($uri);
	 ?>
	<?php 
	include('headerbai5.php') ?>
	<table class="table tbdulieu">
		<thead>
			<tr>
				<?php foreach ($dlExport[0] as $key2=>$value2): ?>
					<th><?= $key2 ?></th>
				<?php endforeach ?>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($dlExport as $value): ?>
				<tr>
					<?php foreach ($value as $value2): ?>
						<td><?= $value2 ?></td>
					<?php endforeach ?>	
				</tr>
			<?php endforeach ?>		
		</tbody>
	</table>
	<a href="<?= base_url() ?>newfile.xlsx" download="<?= $uri ?>" class="btn btn-warning">Export to Excel</a>
	<a href="<?= base_url() ?>home/quanlyExport" class="btn btn-success">Trở về</a>
	<!-- thuộc tính download để download luôn khi bấm vào -->
</body>
</html>