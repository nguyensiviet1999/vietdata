<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Pulse - Restaurant HTML Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Pulse Restaurant HTML Template">
	<meta name="keywords" content="pulse, restaurant, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="<?= base_url() ?>img/favicon.ico" rel="shortcut icon"/>

	<!-- Stylesheets -->

	<link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>css/flaticon.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>css/owl.carousel.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>css/style.css"/>
	<link rel="stylesheet" href="<?= base_url() ?>css/animate.css"/>

	<script type="text/javascript" src="<?= base_url() ?>ckeditor/ckeditor.js"></script>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<?php 
		$uri = $_SERVER['REQUEST_URI'];
		$uri = explode('/', $uri);
		$tranghientai = end($uri);
		$tranghientai = (int)$tranghientai;
		if ($tranghientai==0) {
			$tranghientai=1;
		}
	 ?>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="header-warp">
			<div class="site-logo">
				<h2>Pulse<span>.</span></h2>
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- menu -->
			<ul class="main-menu">
				<li><a href="<?= base_url() ?>Home" class="active">Home</a></li>
				<li><a href="about.html">About us</a></li>
				<li><a href="menu.html">Restaurant</a></li>
				<li><a href="<?= base_url() ?>Blog">News</a></li>
				<li><a href="<?= base_url() ?>Do_edit">Admin</a></li>
			</ul>
			<div class="header-right">
				<p><span>Reservations</span> <i class="fa fa-phone"></i> 652-345 3222 11</p>			
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page info section -->
	<section class="page-top-info set-bg" data-setbg="<?= base_url() ?>img/page-top-bg/3.jpg">
		<div class="ptf-center">
			<div class="container">
				<h2>The blog<span>.</span></h2>
			</div>
		</div>
	</section>
	<!-- Page info section end -->


	<!-- Blog section -->
	<section class="blog-section spad">
		<div class="container">
			<div class="row">
				<div class="col-xl-9 col-lg-8">
					<!-- blog item -->
					<?php foreach ($mangdltintuc as $value): ?>
						<div class="blog-item">
							<div class="blog-thumb set-bg" data-setbg="<?= $value['anhtin'] ?>">
								<div class="blog-date"><?= date('d/m/Y',$value['ngaytao']) ?></div>
							</div>
							<div class="blog-content">
								<h3><a href="<?= base_url() ?>Blog/loadchitiettin/<?= $value['id'] ?>"><?= $value['tieude'] ?></a></h3>
								<div class="blog-meta"><?= $value['tendanhmuc'] ?></div>
								<p><?= $value['trichdan'] ?></p>
							</div>
						</div>
					<?php endforeach ?>
					<div class="site-pagination">
						<?php 
						if ($tranghientai>1) {
							?>
						 	<a href="<?= base_url() ?>Blog/page/<?= $tranghientai-1 ?>" >Pre
						</a>
						<?php 
						 } 
						 else
						 	echo 'Pre';
						 ?>
						<?php 
							for ($i = 0; $i < $sotrang ; $i++) { 
								if ($i+1==$tranghientai) {
								 	?>
								 	<a class="active"><?= $i+1 ?></a>
								<?php 
								 } 
								 else{
								?>

								<a href="<?= base_url() ?>Blog/page/<?= $i+1 ?>" ><?= $i+1 ?></a>
							<?php 
									}
							}
						 ?>
						<?php 
						if ($tranghientai<$sotrang) {
							?>
						 	<a href="<?= base_url() ?>Blog/page/<?= $tranghientai+1 ?>" >Next
						</a>
						<?php 
						 } 
						 else
						 	echo 'Next';
						 ?>
					</div>
				</div>
				<div class="col-xl-3 col-lg-4 col-md-6 sidebar">
					<div class="sb-widget">
						<form class="sb-search">
							<input type="text" placeholder="Search">
							<button><i class="fa fa-search"></i></button>
						</form>
					</div>
					<div class="sb-widget">
						<h5 class="sbw-title">Categories</h5>
						<ul>
							<?php foreach ($cacdanhmuc as $value): ?>
								<li><a href="<?= base_url() ?>Blog/loadtintheodanhmuc/<?= $value['iddanhmuc'] ?>"><?= $value['tendanhmuc'] ?><span>20</span></a></li>
							<?php endforeach ?>	
						</ul>
					</div>
					<div class="sb-widget">
						<h5 class="sbw-title">Latest Posts</h5>
						<div class="latest-posts-widget">
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="<?= base_url() ?>img/blog/thumb/1.jpg"></div>
								<div class="lp-content">
									<span>July 22, 2018</span>
									<h6>10 tips for a meal</h6>
									<p>By William Smith</p>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="<?= base_url() ?>img/blog/thumb/2.jpg"></div>
								<div class="lp-content">
									<span>July 22, 2018</span>
									<h6>Vegetarian food for all</h6>
									<p>By William Smith</p>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="<?= base_url() ?>img/blog/thumb/3.jpg"></div>
								<div class="lp-content">
									<span>July 22, 2018</span>
									<h6>How to cook a meal?</h6>
									<p>By William Smith</p>
								</div>
							</div>
							<div class="lp-item">
								<div class="lp-thumb set-bg" data-setbg="<?= base_url() ?>img/blog/thumb/4.jpg"></div>
								<div class="lp-content">
									<span>July 22, 2018</span>
									<h6>Pizza recipe for all</h6>
									<p>By William Smith</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Blog section end -->
	

	<!-- Footer section -->
	<footer class="footer-section">
		<!-- map -->
		<div class="map-warp" id="map-canvas"></div>
		<div class="footer-bg-area set-bg" data-setbg="<?= base_url() ?>img/footer-bg.jpg">
			<div class="contact-form-area">
				<div class="container">
					<div class="col-lg-10 offset-lg-1">
						<div class="contact-form-warp">
							<div class="section-title">
								<i class="flaticon-026-chicken-1"></i>
								<h2>Contact us</h2>
							</div>
							<!-- contact form -->
							<form class="contact-form">
								<div class="row">
									<div class="col-md-6">
										<input type="text" placeholder="Name">
									</div>
									<div class="col-md-6">
										<input type="email" placeholder="E-mail">
									</div>
									<div class="col-md-12">
										<textarea placeholder="Message"></textarea>
										<div class="text-center">
											<button class="site-btn">Send Message</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
		</div>
	</footer>
	<!-- Footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="<?= base_url() ?>js/jquery-3.2.1.min.js"></script>
	<script src="<?= base_url() ?>js/bootstrap.min.js"></script>
	<script src="<?= base_url() ?>js/owl.carousel.min.js"></script>
	<script src="<?= base_url() ?>js/circle-progress.min.js"></script>
	<script src="<?= base_url() ?>js/main.js"></script>


	<!-- load for map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0YyDTa0qqOjIerob2VTIwo_XVMhrruxo"></script>
	<script src="<?= base_url() ?>js/map.js"></script>

<!-- 	<script>
		 CKEDITOR.replace( 'noidungtin' );
	</script> -->
    </body>
</html>