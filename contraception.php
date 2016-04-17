<!DOCTYPE HTML>
<html>
<head>
	<title>Benjamin M. Ward</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Benjamin M. Ward's personal website.">
	<meta name="author" content="Benjamin M Ward">

	<!-- Favicon Insanity -->
	<?php include( $_SERVER['DOCUMENT_ROOT'] . '/php/favicons.php');?>

	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<!--[if lte IE 8]><script src="assets/css/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie/v8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie/v9.css" /><![endif]-->
	<!--[if lte IE 8]><script src="assets/css/ie/respond.min.js"></script><![endif]-->

	<!-- Piwik -->
	<?php include( $_SERVER['DOCUMENT_ROOT'] . '/php/tracker.php');?>
	<!-- End Piwik Code -->

</head>
<body class="landing">

	<!-- Page Wrapper -->
	<!-- Header -->
	<header id="header" class="alt">
		<nav id="nav">
			<ul>
				<li class="special">
					<a href="#menu" class="menuToggle"><span>Projects</span></a>
					<div id="menu">
						<?php include( $_SERVER['DOCUMENT_ROOT'] . '/php/menu.php');?>
					</div>
				</li>
			</ul>
		</nav>
	</header>


	<section id="banner">
		<div class="inner">
			<h2>CONTRA(ception)</h2>
				<!-- PROJECT START -->

				<div class="container">
					<canvas id="canvas" width="852" height="480">
						<p>Load failed.</p>
					</canvas>
				</div>
				<script type="text/javascript" src="glyde/Glide.js?WFJYB=1405596743"></script>

				<!-- / PROJECT END -->
				<!-- Copyright Signature -->
				<script>
					document.write("<p>Copyright © " + new Date().getFullYear() + " <a href='http://www.benmward.com'>Benjamin M. Ward</a></p>");
				</script>
			</div>
		</section>



		<!-- Scripts -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.scrollex.min.js"></script>
		<script src="assets/js/jquery.scrolly.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</body>
	</html>