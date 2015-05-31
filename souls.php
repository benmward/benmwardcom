<!DOCTYPE HTML>
<html>
<head>
	<title>Benjamin M. Ward</title>
	<link rel="icon" href=bmw.ico />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Benjamin M. Ward's personal website.">
	<meta name="author" content="Benjamin M Ward">
	<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
	<!--[if lte IE 8]><script src="assets/css/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie/v8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie/v9.css" /><![endif]-->
	<!--[if lte IE 8]><script src="assets/css/ie/respond.min.js"></script><![endif]-->

	<!-- Piwik -->
	<script type="text/javascript">
		var _paq = _paq || [];
		_paq.push(['trackPageView']);
		_paq.push(['enableLinkTracking']);
		(function() {
			var u="//benmward.com/analytics/";
			_paq.push(['setTrackerUrl', u+'piwik.php']);
			_paq.push(['setSiteId', 1]);
			var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
			g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
		})();
	</script>
	<noscript><p><img src="//benmward.com/analytics/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
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
						<?php include 'menu.php';?>
					</div>
				</li>
			</ul>
		</nav>
	</header>


	<section id="banner">
		<div class="inner">
			<h2>Land of Lost Souls</h2>

			<p>A seamless open-world RPG platformer I made in 2010. You level each stat by<br>
				performing the action in the game. The more you run, the faster you run.</p>
				<!-- PROJECT START -->

				<div class="container">
					<canvas id="canvas" width="720" height="450">
						<p>Your browser doesn't support HTML5 canvas.</p>
					</canvas>
				</div>
				<script type="text/javascript" src="souls/The Land of Lost Souls.js?JKXAC=92027292"></script>

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