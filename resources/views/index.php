<!DOCTYPE html>
<html lang="en" ng-app="my-app">
<head>
	<meta charset="UTF-8" />
	<title>Laravel 5.2 & Angular JS</title>
	<!-- Load Bootstrap CSS -->
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
	 <?php @include ('header.php'); 
	 		@include ('HienThiSP.php');

	 ?>
	
			
	
		
	

	<!-- Load Bootstrap JS -->
	<script type="text/javascript" src="<?php echo asset('template/js/jquery.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset('template/js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset('app/lib/angular.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset('app/app.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo asset('app/controllers/SanPhamController.js'); ?>"></script>
</body>
</html>