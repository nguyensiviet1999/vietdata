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


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
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
				<p><span><?= $dlJsonText['Reservations']['textdatban'] ?></span> <i class="fa fa-phone"></i> <?= $dlJsonText['Reservations']['sdt'] ?></p>			
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<?php foreach ($mangdl as $value): ?>
				<div class="hs-item set-bg" data-setbg="<?= $value['slide_image'] ?>">
					<div class="hs-content">
						<div class="hsc-warp">
							<h2><?= $value['title'] ?><span>.</span></h2>
							<p><?= $value['description'] ?></p>
						</div>
					</div>
				</div>
			<?php endforeach ?>
			
			
		</div>
	</section>
	<!-- Hero section end -->



	<!-- Intro section -->
	<section class="inter-section spad">
		<div class="container">
			<div class="section-title">
				<i class="flaticon-019-rib"></i>
				<h2>Welcome</h2>
			</div>
			<div class="row">
				<?php foreach ($dlJsonText['Welcome'] as $value): ?>
					<div class="col-md-4 intro-item">
						<h3><?= $value['nam'] ?></h3>
						<p><?= $value['noidungnam'] ?></p>
					</div>
				<?php endforeach ?>
				
			</div>
			<div class="text-center">
				<img src="img/sign.png" alt="">
			</div>
		</div>
	</section>
	<!-- Intro section end -->



	<!-- Testimonials section -->
	<section class="testimonials-section spad pb-0 set-bg" data-setbg="img/review-bg.jpg">
		<div class="container">
			<div class="section-title text-white">
				<i class="flaticon-020-ice-cream"></i>
				<h2>Testimonials</h2>
			</div>
			<div class="testimonials-slider owl-carousel">
				<div class="ts-item text-white">
					<div class="quota">“</div>
					<p><?= $dlJsonText['Testimonials']['noidungslide1'] ?></p>
					<h6><span>Ted Chapman</span>, Client</h6>
				</div>
				<div class="ts-item text-white">
					<div class="quota">“</div>
					<p><?= $dlJsonText['Testimonials']['noidungslide2'] ?> </p>
					<h6><span>Ted Chapman</span>, Client</h6>
				</div>
				<div class="ts-item text-white">
					<div class="quota">“</div>
					<p><?= $dlJsonText['Testimonials']['noidungslide3'] ?></p>
					<h6><span>Ted Chapman</span>, Client</h6>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonials section end -->



	<!-- Services section -->
	<section class="services-section spad">
		<div class="container">
			<div class="section-title">
				<i class="flaticon-022-tray"></i>
				<h2>Our Services</h2>
			</div>
			<div class="row services">
				<div class="col-lg-3 col-md-6 service-item">
					<i class="flaticon-005-coffee-1"></i>
					<h3>Breakfast</h3>
					<p><?= $dlJsonText['Our Services']['Breakfast'] ?></p>
				</div>
				<div class="col-lg-3 col-md-6 service-item">
					<i class="flaticon-016-pancake"></i>
					<h3>Brunch</h3>
					<p><?= $dlJsonText['Our Services']['Brunch'] ?></p>
				</div>
				<div class="col-lg-3 col-md-6 service-item">
					<i class="flaticon-008-soup"></i>
					<h3>Lunch</h3>
					<p><?= $dlJsonText['Our Services']['Lunch'] ?></p>
				</div>
				<div class="col-lg-3 col-md-6 service-item">
					<i class="flaticon-032-hamburger"></i>
					<h3>Dinner</h3>
					<p><?= $dlJsonText['Our Services']['Dinner'] ?></p>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->



	<!-- Menu section -->
	<section class="menu-section spad set-bg" data-setbg="img/menu-bg.jpg">
		<div class="container">
			<div class="section-title text-white">
				<i class="flaticon-022-tray"></i>
				<h2>Our Menu</h2>
			</div>
			<!-- menu tab nav -->
			<ul class="menu-tab-nav nav nav-tabs" role="tablist">
				<li class="nav-item">
					<a class="nav-link active" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true">Breakfast</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false">Brunch</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false">Lunch</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false">Dinner</a>
				</li>
			</ul>
			<div class="tab-content menu-tab-content">
				<!-- single tab content -->
				<div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
					<div class="row">
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Soft-Boiled Organic Egg</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$8.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Soft-Boiled Organic Egg</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$8.00</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single tab content -->
				<div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
					<div class="row">
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Soft-Boiled Organic Egg</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$8.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single tab content -->
				<div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
					<div class="row">
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Soft-Boiled Organic Egg</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$8.00</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- single tab content -->
				<div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
					<div class="row">
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs with ham</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$9.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Scrambled Eggs in Puff Pastry</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$11.00</div>
								</div>
							</div>
							<!-- menu item -->
							<div class="menu-item">
								<h5>Eggs Benedict</h5>
								<div class="mi-meta">
									<p>with wild mushrooms and asparagus</p>
									<div class="menu-price">$6.00</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center pt-5">
				<a href="#" class="site-btn">See More</a>
			</div>
		</div>
	</section>
	<!-- Menu section end -->

	

	<!-- Footer section -->
	<footer class="footer-section">
		<!-- map -->
		<div class="map-warp" id="map-canvas"></div>
		<div class="footer-bg-area set-bg" data-setbg="img/footer-bg.jpg">
			<div class="contact-form-area">
				<div class="container">
					<div class="col-lg-10 offset-lg-1">
						<div class="contact-form-warp">
							<div class="section-title">
								<i class="flaticon-026-chicken-1"></i>
								<h2>Contact us</h2>
							</div>
							<!-- contact form -->
							<form class="contact-form" action="Home/datban" method="post">
								<div class="row">
									<div class="col-md-6">
										<input name="tenkh" id="tenkh" type="text" placeholder="Name">
									</div>
									<div class="col-md-6">
										<input name="email" id="email" type="email" placeholder="E-mail">
									</div>
									<div class="col-md-6">
										    <input name="ngay" id="ngay" class="form-control" type="date" value="" id="example-date-input">
									</div>
									<div class="col-md-6">
										    <input name="gio" id="gio" class="form-control" type="time" value="" id="example-time-input">
									</div>
									<div class="col-md-12">
										<textarea name="message" id="message" placeholder="Message"></textarea>
										<div class="text-center">
											<button class="site-btn" type="submit">Send Message</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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

    </body>
</html>