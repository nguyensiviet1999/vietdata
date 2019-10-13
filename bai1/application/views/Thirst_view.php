<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View dau tien</title>
	<style>
		h3{
			text-align: center;
			font-family: 'segoe ui light';
			border: 2px solid red;
			padding: 10px;
		}
	</style>
</head>
<body>
	<h3> du lieu cac so dien thoai cua cua hang ban sim</h3>
	<ul>
		<?php foreach ($danhsachsodienthoai as $key): ?>
			<li> <?php echo $key; ?></li>
		<?php endforeach ?>
	</ul>
</body>
</html>