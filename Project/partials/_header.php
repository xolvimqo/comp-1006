<?php

  // Step 1: Start the session


  // Step 2: Assign the session variables



  // Step 3: Clear the session variables so it's blank the next time


?>

<?php include_once(dirname(__DIR__) . '/_config.php') ?>

<!DOCTYPE html>
<!--
	Greatness by FreeHTML5.co
	Twitter: http://twitter.com/fh5co
	URL: http://FreeHTML5.co
-->
<html>
  <head>
    <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Greatness &mdash; Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
  	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
  	<meta name="author" content="FreeHTML5.co" />

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,600,400italic,700' rel='stylesheet' type='text/css'>

  	<!-- Animate.css -->
  	<link rel="stylesheet" href="<?= base_path ?>/css/animate.css">
  	<!-- Icomoon Icon Fonts-->
  	<link rel="stylesheet" href="<?= base_path ?>/css/icomoon.css">
  	<!-- Bootstrap  -->
  	<link rel="stylesheet" href="<?= base_path ?>/css/bootstrap.css">

  	<!-- Magnific Popup -->
  	<link rel="stylesheet" href="<?= base_path ?>/css/magnific-popup.css">

  	<!-- Owl Carousel  -->
  	<link rel="stylesheet" href="<?= base_path ?>/css/owl.carousel.min.css">
  	<link rel="stylesheet" href="<?= base_path ?>/css/owl.theme.default.min.css">

  	<!-- Theme style  -->
  	<link rel="stylesheet" href="<?= base_path ?>/css/style.css">

    <!-- Modernizr JS -->
  	<script src="js/modernizr-2.6.2.min.js"></script>
  	<!-- FOR IE9 below -->
  	<!--[if lt IE 9]>
  	<script src="js/respond.min.js"></script>
  	<![endif]-->

    <title><?= $_title ?? "Title" ?></title>
  </head>

  <body>
    <?php include(ROOT . '/partials/_main-nav.php') ?>

    <!-- Step 4: Include the _flash.php notification component -->
    <?php include(ROOT . '/partials/_flash.php') ?>

    <header id="gtco-header" class="gtco-cover" role="banner" style="background-image:url(images/img_bg_1.jpg);">
  		<div class="overlay"></div>
  		<div class="gtco-container">
  			<div class="row">
  				<div class="col-md-12 col-md-offset-0 text-center">
  					<div class="display-t">
  						<div class="display-tc animate-box" data-animate-effect="fadeIn">
  							<h1>Greatness Free Template</h1>
  							<h2>Free html5 templates Made by <a href="http://FreeHTML5.co/" target="_blank">FreeHTML5.co</a></h2>
  							<p>
  								<a href="#" class="btn btn-primary btn-lg">Get Started</a>
  								<a href="#" class="btn btn-white btn-outline btn-lg">Download</a></p>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</header>
