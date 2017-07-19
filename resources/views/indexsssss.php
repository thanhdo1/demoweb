<!doctype html>
<html lang="en" ng-app="my-app">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Laravel </title>

	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo asset('source/assets/dest/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?php echo asset('source/assets/dest/vendors/colorbox/example3/colorbox.css'); ?>">
	<link rel="stylesheet" href="<?php echo asset('source/assets/dest/rs-plugin/css/settings.css'); ?>">
	<link rel="stylesheet" href="<?php echo asset('source/assets/dest/rs-plugin/css/responsive.css'); ?>">
	<link rel="stylesheet" title="style" href="<?php echo  asset('source/assets/dest/css/style.css'); ?>">
	<link rel="stylesheet" href="<?php echo asset('source/assets/dest/css/animate.css'); ?>">
	<link rel="stylesheet" title="style" href="<?php echo asset('source/assets/dest/css/huong-style.css'); ?>">
</head>
<body>

	<div id="header">
			<div class="header-top">
			<div class="container">
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="#"><i class="fa fa-user"></i>Tài khoản</a></li>
						<li><a href="#">Đăng kí</a></li>
						<li><a href="#">Đăng nhập</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="get" id="searchform" action="/">
					        <input type="text" value="" name="s" id="s" placeholder="Nhập từ khóa..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (Trống) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
												

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">$34.55</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container" ng-controller='LoaiController'>
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="index.html">Trang chủ</a></li>
						<li><a href="#">Sản phẩm</a>
							<ul class="sub-menu" ng-repeat='sp in loais'>
								<li><a href="product_type.html">{{sp.name}}</a></li>
								
							</ul>
						</li>
						<li><a href="about.html">Giới thiệu</a></li>
						<li><a href="contacts.html">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->
	
	<div class="container" ng-controller="SinhVienController"  >
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>New Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">438 styles found</p>
								<div class="clearfix"></div>
							</div>

							<div class="row"  >
								<div class="col-sm-3" >
									<div class="single-item">
										<div class="single-item-header">
											<!-- <a href="product.html"><img src="source/assets/dest/images/products/{{x.image}} ?>" alt=""></a> -->
										</div>
										<div class="single-item-body" ng-repeat="x in names">
											<p class="single-item-title">{{x.name}}</p>
											<p class="single-item-price">
												<span>{{x.unit_price}}</span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								
							</div>
						</div> <!-- .beta-products-list -->

						

						
					</div>
				</div> <!-- end section with sidebar and main content -->

			</div>
			
		</div> <!-- #content -->
	</div> <!-- .container -->



	<!-- include js files -->
	<script type="text/javascript" src="<?php echo asset('source/assets/dest/js/jquery.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset('source/assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js'); ?>"></script>
	<script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo asset('source/assets/dest/vendors/bxslider/jquery.bxslider.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset('source/assets/dest/vendors/colorbox/jquery.colorbox-min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset('source/assets/dest/vendors/animo/Animo.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo  asset('source/assets/dest/vendors/dug/dug.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset('source/assets/dest/js/scripts.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset('source/assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset('source/assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset('source/assets/dest/js/waypoints.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset('source/assets/dest/js/wow.min.js'); ?>"></script>
	<!--customjs-->
	<script type="text/javascript" src="<?php echo asset('source/assets/dest/js/custom2.js'); ?>"></script>
	<scrip type="text/javascript" src="<?php echo URL::asset('app/app.js'); ?>"></scrip>
	<scrip type="text/javascript" src="<?php echo URL::asset('app/controller/MainController.js'); ?>"></scrip>
	<scrip type="text/javascript" src="<?php echo URL::asset('app/services/SanPham.js'); ?>"></scrip>
	<scrip type="text/javascript" src="<?php echo URL::asset('app/lib/angular.min.js'); ?> "></scrip>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
