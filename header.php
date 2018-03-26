<!DOCTYPE HTML>
<!--
	Spectral by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	Spectral Mod Theme for Anchor CMS by Unloft
	https://github.com/unloft
-->
<html>
	<head>
		<title><?php echo page_title('Page can’t be found'); ?> - <?php echo site_name(); ?></title>

		<meta charset="utf-8" name="description" content="<?php echo site_description(); ?>">

		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="<?php echo theme_url('assets/js/ie/html5shiv.js'); ?>"></script><![endif]-->
		<link rel="stylesheet" href="<?php echo theme_url('img/og_image.gif'); ?>" />
		<link rel="stylesheet" href="<?php echo theme_url('assets/css/main.css'); ?>" />
		<!--[if lte IE 8]><link rel="stylesheet" href="<?php echo theme_url('assets/css/ie8.css'); ?>" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php echo theme_url('assets/css/ie9.css'); ?>" /><![endif]-->
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php echo rss_url(); ?>">
		 <meta property="og:title" content="<?php echo site_name(); ?>">
	    <meta property="og:type" content="website">
	    <meta property="og:url" content="<?php echo e(current_url()); ?>">
	    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
	    <meta property="og:site_name" content="<?php echo site_name(); ?>">
	    <meta property="og:description" content="<?php echo site_description(); ?>">
	    <?php if(customised()): ?>
		    <!-- Custom CSS -->
    		<style><?php echo article_css(); ?></style>

    		<!--  Custom Javascript -->
    		<script><?php echo article_js(); ?></script>
		<?php endif; ?>
	</head>
<body class="landing">

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<h1><a href="index.html">Spectral</a></h1>
						<nav id="nav">
							<ul>
								<li class="special">
									<a href="#menu" class="menuToggle"><span>Menu</span></a>
									<div id="menu">
										<ul>

											<?php if(has_menu_items()):
							while(menu_items()): ?>
<li <?php echo (menu_active() ? 'class="active"' : ''); ?>><a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a></li>
							<?php endwhile;
								endif; ?>
					

										</ul>
									</div>
								</li>
							</ul>
						</nav>
					</header>

