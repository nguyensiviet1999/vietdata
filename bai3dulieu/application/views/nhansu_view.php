<!DOCTYPE html>
<html lang="en"><head>
	<title> Giao diện hiển thị danh sách nhân sự </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<script type="text/javascript" src="<?= base_url(); ?>vendor/bootstrap.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>jqueryupload/js/vendor/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>jqueryupload/js/jquery.fileupload.js"></script>
 	<script type="text/javascript" src="<?= base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url(); ?>1.css">
</head>
<body >
	
	<div class="container">
		<div class="text-xs-center">
			<h3 class="disphay-3"> Danh sách nhân sự</h3>
			<hr>
		</div>
	</div>
	<div class="container">
		<div class="row chuacard">
				<?php foreach ($allNhansu as $key => $value ): ?>
					<div class="col-sm-4">
						<div class="card">
							<img class="card-img-top img-fluid" src="<?= $value['anhavatar'] ?>" alt="Card image cap">
							<div class="card-block">
								<h4 class="card-title ten"><?= $value['ten'] ?></h4>
								<p class="card-text tuoi">Tuổi: <b><?= $value['tuoi'] ?></b></p>
								<p class="card-text sdt">Tel: <b><?= $value['sdt'] ?></b></p>
								<p class="card-text sodonhang">Số đơn hàng: <?= $value['sodonhang'] ?></p>
								<p class="card-text linkfb"><a href="<?= $value['linkfb'] ?>" class="btn btn-info">FaceBook</a></p>
								<p class="card-text linkfb">
									<a href="<?= base_url(); ?>index.php/nhansu/suaNhansu/<?= $value['id'] ?>" class="btn btn-warning">Sua</a>
									<a href="<?= base_url(); ?>index.php/nhansu/xoaNhansu/<?= $value['id'] ?>" class="btn btn-danger">Xoa</a>
								</p>
							</div>
						</div>
					</div>
				<?php endforeach ?>s
		</div><!-- end card columms -->
	</div>

		<div class="container">
			<div class="text-xs-center">
				<h3 class="disphay-3">Thêm mới nhân sự</h3>
				<hr>
			</div>
		</div>

			<!-- <form method="post" enctype="multipart/form-data" action="index.php/nhansu/addNhansu"> -->

				<div class="form-group row">
					<label for="anh" class="col-sm-2 form-control-label text-xs-right">Avatar</label>
					<div class="col-sm-8">
						<input name="files[]" type="file" class="form-control" id="anhavatar" placeholder="upload anh"  > 
						<!-- name phải đặt dạng mảng bời vì truyền vào hàm fileupload là truyền dạng mảng -->

					</div>
				</div>

				<div class="form-group row">
					<label for="ten" class="col-sm-2 form-control-label text-xs-right">Tên nhân viên</label>
					<div class="col-sm-8">
						<input name="ten" type="text" class="form-control" id="ten" placeholder="Tên nhân viên">
					</div>
				</div>

				<div class="form-group row">
					<div class="col-sm-6">
						<div class="row">
							<label for="tuoi" class="col-sm-4 form-control-label text-xs-right">Tuổi</label>
							<div class="col-sm-8">
								<input name="tuoi" type="number" class="form-control" id="tuoi" placeholder="Vd: 20">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<label for="linkfb" class="col-sm-4 form-control-label text-xs-right">LinkFB</label>
							<div class="col-sm-8">
								<input name="linkfb" type="text" class="form-control" id="linkfb" placeholder="Vd: http://facebook.com/abcxyz">
							</div>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-6">
						<div class="row">
							<label for="sdt" class="col-sm-4 form-control-label text-xs-right">SDT</label>
							<div class="col-sm-8">
								<input name="sdt" type="text" class="form-control" id="sdt" placeholder="Vd: 0123456789">
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="row">
							<label for="sodonhang" class="col-sm-4 form-control-label text-xs-right">Số đơn hàng</label>
							<div class="col-sm-8">
								<input name="sodonhang" type="number" class="form-control" id="sodonhang" placeholder="Vd: 5">
							</div>
						</div>
					</div>

				</div>


				<div class="form-group row text-xs-center">
					<div class="col-sm-offset-2 col-sm-10">
						<button type="submit" class="btn btn-success nutxulyajax">Thêm mới</button>
						<button type="reset" class="btn btn-danger">Làm lại</button>
					</div>
				</div>
			<!-- </form> -->

	<script>

		base_url = '<?= base_url() ?>'; 

		$('#anhavatar').fileupload({
			url: base_url+'index.php/nhansu/uploadfile',
			dataType: 'json',
			done: function(e,data){
				$.each(data.result.files,function(index, file) {
					tenfile = file.url;
				});
			}
		})

		$('.nutxulyajax').click(function(){
			$.ajax({
			url: 'nhansu/ajax_add',
			type: 'POST',
			dataType: 'json',
			data: {
				ten: $('#ten').val(),
				tuoi: $('#tuoi').val(),
				sdt: $('#sdt').val(),
				anhavatar: tenfile,
				linkfb: $('#linkfb').val(),
				sodonhang: $('#sodonhang').val(),
			},
			})
			.done(function(){
				console.log("success");
			})
			.fail(function(){
				console.log("error");
			})
			.always(function(){
				noidung = '<div class="col-sm-4">';
				noidung += '<div class="card">';
				noidung +=	'<img class="card-img-top img-fluid" src= '+tenfile+' alt="Card image cap">';
				noidung +=	'<div class="card-block">';
				noidung +=	'<h4 class="card-title ten">'+$('#ten').val()+'</h4>';
				noidung +=	'<p class="card-text tuoi">Tuổi: <b>'+$('#tuoi').val()+'</b></p>';
				noidung +=	'<p class="card-text sdt">Tel: <b>'+$('#sdt').val()+'</b></p>';
				noidung +=	'<p class="card-text sodonhang">Số đơn hàng: '+$('#sodonhang').val()+'</p>';
				noidung +=	'<p class="card-text linkfb"><a href="'+$('#linkfb').val()+'" class="btn btn-info">FaceBook</a></p>';
				noidung +=	'<p class="card-text linkfb">';
				noidung +=	'<a href="suaNhansu/<?= $value['id'] ?>" class="btn btn-warning">Sua</a>';
				noidung +=	'<a href="xoaNhansu/<?= $value['id'] ?>" class="btn btn-danger">Xoa</a>';
				noidung +=	'</p>';
				noidung +='</div>';
				noidung +='</div>';
				noidung +='</div>';

				$('.chuacard').append(noidung);

				$('#ten').val('');
				$('#tuoi').val('');
				$('#sdt').val('');
				$('#linkfb').val('');
				$('#sodonhang').val('');


			});
		});
		
	</script>

</body>
</html>  