<!doctype html>
<html <?php language_attributes(); ?> style="font-size: 62.5%;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/favicon.ico">
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrap">

	<header class="main_header">
		<div class="header_cont flex">
			<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/common/logo.svg" alt=""></a>
			<div class="hum">
				<i></i>
				<i></i>
			</div>
			<nav class="nav">
				<ul class="flex">
					<li class="sp"><a href="<?php echo home_url(); ?>" class="en-r" data-text="TOP">TOP</a></li>
					<li><a href="<?php echo home_url(); ?>/about/" class="en-r">ABOUT</a></li>
					<li><a href="<?php echo home_url(); ?>/works/" class="en-r">WORKS</a></li>
					<li><a href="<?php echo home_url(); ?>/contact/" class="en-r">CONTACT</a></li>
				</ul>
			</nav>
		</div>
	</header>