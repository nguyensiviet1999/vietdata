<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Danh mục tin</title>

	<link rel="stylesheet" href="<?= base_url() ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url() ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?= base_url() ?>1.css">
</head>
</head>
<body>
	<?php 
	include('headerbai5.php') ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
		        <div class="jumbotron jumbotron-fluid">
					<div class="container">
						<h1 class="display-5">Thêm danh mục </h1>
						<p class="lead">form này cho phép thêm danh mục tin vào csdl</p>
					</div>
				</div>
				<!-- <form action="<?= base_url() ?>tin/themdanhmuc" method="post"> -->
					<fieldset class="form-group">
						<label for="formGroupExampleInput">Tên danh mục</label>
						<input name="tendanhmuc"type="text" class="form-control" id="tendanhmuc" placeholder="Example input">
					</fieldset>
					<fieldset class="form-group">
						<input id="nutthemdanhmuc" type="button" class="form-control btn btn-success" value="Thêm danh mục">
					</fieldset>
				<!-- </form> -->
			</div> <!-- hết cột trái -->
			<div class="col-sm-6 chuacard">
				<div class="jumbotron jumbotron-fluid">
					<div class="container">
						<h1 class="display-5">Danh sách danh mục tin</h1>
						<p class="lead">Các danh mục đã thêm</p>
					</div>
				</div>
				<?php foreach ($dulieu as $value): ?>
				<div class="card card-inverse bg-primary mb-3 text-white">
				    <div class="card-block">
				    	<blockquote class="card-blockquote">
				    		<div class="noidung_ten">
				    			<?= $value['tendanhmuc'] ?>		    			
				    		</div>
				    		<fieldset class="form-group jquery_tendanhmuc hidden-xs-up">
			    				<input type="text" class="form-control tendanhmucsua" value="<?= $value['tendanhmuc'] ?>">
			    			</fieldset>
				    	</blockquote>
				    	<div class="text-xs-right">
				    		<a data-href="<?= $value['iddanhmuc'] ?>" class="nutedit btn btn-warning"><i class="fa fa-pencil"></i></a>
				    		<a data-href="<?= $value['iddanhmuc'] ?>" class="nutxoa btn btn-danger"><i class="fa fa-remove"></i></a>
				    	</div>
				    	<div class="text-xs-right hidden-xs-up"> <!-- xs-down là từ điện thoại di động trở lên -->
				    		<a data-href="<?= $value['iddanhmuc'] ?>" class="nutluu btn btn-success">Lưu</a>
				    	</div>			    	
				    </div>

				</div>
				<?php endforeach ?> 
			</div>
		</div>	
	</div>
	<script type="text/javascript" src="<?= base_url() ?>vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?= base_url() ?>1.js"></script>
 	<script>
 		$(function(){
 			//xử lý nút sửa, ẩn hiện phần để sửa dữ liệu
 			$('body').on('click', '.nutedit', function(event) {
 				//ẩn nội dung cũ đi
 				$(this).parent().prev().find('.noidung_ten').addClass('hidden-xs-up');
 				$(this).parent().prev().find('.jquery_tendanhmuc').removeClass('hidden-xs-up');
 				$(this).parent().addClass('hidden-xs-up');
 				$(this).parent().next().removeClass('hidden-xs-up');
 				//sử dụng ajax để kết nối controller update dữ liệu

 				//lấy về giá trị sửa
 				event.preventDefault();
 				/* Act on the event */
 			});
 			//xử lý nút lưu
 			$('body').on('click', '.nutluu', function(event) {
 				//sử dụng ajax để kết nối controller update dữ liệu

 				//lấy về giá trị sửa
 				var doituongsua = $(this);
 				var tendanhmucsua = $(this).parent().prev().prev().children().children('input').val();
 				$.ajax({
 					url: '<?= base_url() ?>tin/editeddanhmuc',
 					type: 'POST',
 					dataType: 'json',
 					data: {tendanhmuc: tendanhmucsua,iddanhmuc: doituongsua.data('href')},
 				})
 				.done(function() {
 					console.log("success");
 				})
 				.fail(function() {
 					console.log("error");
 				})
 				.always(function() {
 					console.log("complete");
 					doituongsua.parent().prev().prev().find('.noidung_ten').removeClass('hidden-xs-up');
	 				doituongsua.parent().prev().prev().find('.jquery_tendanhmuc').addClass('hidden-xs-up');
	 				doituongsua.parent().addClass('hidden-xs-up');
	 				doituongsua.parent().prev().removeClass('hidden-xs-up');
	 				doituongsua.parent().prev().prev().find('.noidung_ten').text(tendanhmucsua);

 				});
 				
 				/* Act on the event */
 			});




 			var duongdan = "<?= base_url() ?>";
 			$('#nutthemdanhmuc').click(function(event) {
 				/* Act on the event */
 				// var tendanhmuc = $('#tendanhmuc').val();
 				// console.log(tendanhmuc);
 				$.ajax({
 					url: duongdan+'tin/addJquery',
 					type: 'POST',
 					dataType: 'json',
 					data: {tendanhmuc: $('#tendanhmuc').val()}

 				})
 				.done(function() {
 					console.log("success");
 				})
 				.fail(function() {
 					console.log("error");
 				})
 				.always(function(res) {
 					console.log(res);
 					//dung jquery de ve them noi dung moi
 					noidung = '<div class="card card-inverse bg-primary mb-3 text-white">';
 					noidung += '<div class="card-block">';
 					noidung += '<blockquote class="card-blockquote"><div class="noidung_ten">'+$('#tendanhmuc').val();
 					noidung += '</div>';
 					noidung += '<fieldset class="form-group jquery_tendanhmuc hidden-xs-up">';
 					noidung += '<input type="text" class="form-control tendanhmucsua" value="'+$('#tendanhmuc').val()+'"></fieldset>';
 					noidung += '</blockquote>';
 					noidung += '<div class="text-xs-right">';
 					noidung += '<a data-href="'+res+'" class="nutedit btn btn-warning"><i class="fa fa-pencil"></i></a>';
 					noidung += '<a data-href="'+res+'" class="nutxoa btn btn-danger"><i class="fa fa-remove"></i></a>';
 					noidung += '</div>';
 					noidung += '<div class="text-xs-right hidden-xs-up">';
 					noidung += '<a data-href="'+res+'" class="nutluu btn btn-success">Lưu</a>';
 					noidung += '</div>';
 					noidung += '</div>';
 					noidung += '</div>';
 					$('.chuacard').append(noidung);
 					$('#tendanhmuc').val('');
 				});
 			});//het ajax cho nut them moi
 			//begin jquery cho nutxoa
 			//vì jquery chỉ lắng nghe những phần tử có sẵn trong html mà k nghe các phần tử thêm mới bởi jquery vì vậy cần dùng hàm $('body').on để luôn luôn lắng nghe body
 			$('body').on('click', '.nutxoa', function(event) {
 				/* Act on the event */
 				var idxoa = $(this).data('href');
 				//vào ajax this không định nghĩa được vì vậy phải gán cho nó 1 biến ở bên ngoài
 				var doituongcanxoa = $(this).parent().parent().parent();
 				$.ajax({
 					url: '<?= base_url() ?>tin/xoadanhmuc/'+idxoa,
 					type: 'POST',
 					dataType: 'json',
 				})
 				.done(function() {
 					console.log("success");
 				})
 				.fail(function() {
 					console.log("error");
 				})
 				.always(function() {
 					console.log("complete");
 					//xoa bang giao dien bang jquery
 					doituongcanxoa.remove();
 				});
 			});
 		})
 	</script>
</body>
</html>