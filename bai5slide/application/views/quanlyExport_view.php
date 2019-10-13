<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Quan ly Export</title>
		<script type="text/javascript" src="<?= base_url(); ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url(); ?>1.css"> 
</head>
<body>
	<?php 
	include('headerbai5.php') ?>
	<div class="container">
		<table class="table table-hover" >
			<thead>
				<tr>
					<th>Ten bang</th>
					<th>Show du lieu bang</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>dangnhap</td>
					<td><a href="<?= base_url() ?>home/exportToExcel/dangnhap">Xem</a></td>
				</tr>
				<tr>
					<td>danhmuctin</td>
					<td><a href="<?= base_url() ?>home/exportToExcel/danhmuctin">Xem</a></td>
				</tr>
				<tr>
					<td>datban</td>
					<td><a href="<?= base_url() ?>home/exportToExcel/datban">Xem</a></td>
				</tr>
				<tr>
					<td>homepageattr</td>
					<td><a href="<?= base_url() ?>home/exportToExcel/homepageattr">Xem</a></td>
				</tr>
				<tr>
					<td>tintuc</td>
					<td><a href="<?= base_url() ?>home/exportToExcel/tintuc">Xem</a></td>
				</tr>
				<tr>
					<td>warehouse</td>
					<td><a href="<?= base_url() ?>home/exportToExcel/warehouse">Xem</a></td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>