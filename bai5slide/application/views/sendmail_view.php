<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gui mail trong back end</title>
	<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url() ?>1.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 push-sm-3">
				<form action="Sendmail/do_send" method="post" enctype="multipart/form-data">
					<fieldset class="form-group">
						<label for="ten">Ten nguoi gui</label>
						<input name="ten" type="text" class="form-control" id="ten" placeholder="Example input">
					</fieldset>
					<fieldset class="form-group">
						<label for="nguoinhan">Gửi đến email</label>
						<input name="nguoinhan" type="text" class="form-control" id="nguoinhan" placeholder="Example input">
					</fieldset><fieldset class="form-group">
						<label for="noidung">Noi dung</label>
						<textarea name="noidung" id="noidung" cols="30" rows="10"></textarea>
					</fieldset></fieldset><fieldset class="form-group">
						<input type="submit" class="form-control btn btn-success" value="gui">
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>