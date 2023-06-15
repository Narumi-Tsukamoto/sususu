<!doctype html>
<html <?php language_attributes(); ?> style="font-size: 62.5%;">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="initial-scale=1.0,minimum-scale=1,maximum-scale=5">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico">
	
	<link rel="stylesheet" href="https://use.typekit.net/mao0ehu.css">
	<link rel="stylesheet" href='<?php echo get_stylesheet_directory_uri(); ?>/css/reset.css'>

	<?php if ( !is_page('inf15') && !is_page('sended') && !is_page('wave-maker') && !is_archive('creators') && !is_tax('cr_type') ) : ?>
	<link rel="stylesheet" href='<?php echo get_stylesheet_directory_uri(); ?>/css/common.css'>
	<link rel="stylesheet" href='<?php echo get_stylesheet_directory_uri(); ?>/css/locomotive-scroll.min.css'>
	<?php endif; ?>

	<?php if ( is_front_page() || is_home() ) : ?>
	<link rel="stylesheet" href='<?php echo get_stylesheet_directory_uri(); ?>/css/top.css'>
	<?php elseif ( is_page('inf15') || is_page('sended') ) : ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css">
	<link rel="stylesheet" href='<?php echo get_stylesheet_directory_uri(); ?>/css/inf_new.css'>
	<?php elseif ( is_page('lplp') ) : ?>
	<link rel="stylesheet" href='<?php echo get_stylesheet_directory_uri(); ?>/css/lplp.css'>
	<?php elseif ( is_page('wave-maker') ) : ?>
	<link rel="stylesheet" href='<?php echo get_stylesheet_directory_uri(); ?>/css/wm.css'>
	<?php elseif ( is_page() || is_archive() || is_singular() || is_404() ) : ?>
	<link rel="stylesheet" href='<?php echo get_stylesheet_directory_uri(); ?>/css/u_p.css'>
	<?php endif; ?>

	<?php if ( is_archive('creators') || is_tax('cr_type') ) : ?>
	<link rel="stylesheet" href='<?php echo get_stylesheet_directory_uri(); ?>/css/common.css'>
	<link rel="stylesheet" href='<?php echo get_stylesheet_directory_uri(); ?>/css/creators.css'>
	<?php endif; ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div id="wrap">
		<?php if ( !is_page('inf15') && !is_page('sended') && !is_page('lplp') && !is_page('wave-maker') && !is_archive('creators') && !is_tax('cr_type') ) : ?>
	<div id="loco_wrap" data-scroll-container>
		<header class="main_header">
			<div class="in">
				<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/svg/logo.svg" alt=""></a>
				<div class="hum">
					<i></i>
					<i></i>
				</div>
				<nav class="nav">
					<ul class="flex">
						<li class="sp"><a href="<?php echo home_url(); ?>" class="halo" data-text="TOP">TOP</a></li>
						<li><a href="<?php echo home_url(); ?>/company/" class="halo" data-text="COMPANY">COMPANY</a></li>
						<li><a href="<?php echo home_url(); ?>/service/" class="halo" data-text="SERVICE">SERVICE</a></li>
						<li><a href="<?php echo home_url(); ?>/creators/" class="halo" data-text="CREATORS">CREATORS</a></li>
						<li><a href="<?php echo home_url(); ?>/recruit/" class="halo" data-text="RECRUIT">RECRUIT</a></li>
						<li><a href="<?php echo home_url(); ?>/news/" class="halo" data-text="NEWS">NEWS</a></li>
						<li><a href="<?php echo home_url(); ?>//rep_column//" class="halo" data-text="COLUMN">COLUMN</a></li>
						<li><a href="<?php echo home_url(); ?>/contact/" class="halo" data-text="CONTACT">CONTACT</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<?php elseif ( is_archive('creators') || is_tax('cr_type') ) : ?>
			<header class="main_header">
			<div class="in">
				<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/common/svg/logo.svg" alt=""></a>
				<div class="hum">
					<i></i>
					<i></i>
				</div>
				<nav class="nav">
					<ul class="flex">
						<li class="sp"><a href="<?php echo home_url(); ?>" class="halo" data-text="TOP">TOP</a></li>
						<li><a href="<?php echo home_url(); ?>/company/" class="halo" data-text="COMPANY">COMPANY</a></li>
						<li><a href="<?php echo home_url(); ?>/service/" class="halo" data-text="SERVICE">SERVICE</a></li>
						<li><a href="<?php echo home_url(); ?>/creators/" class="halo" data-text="CREATORS">CREATORS</a></li>
						<li><a href="<?php echo home_url(); ?>/recruit/" class="halo" data-text="RECRUIT">RECRUIT</a></li>
						<li><a href="<?php echo home_url(); ?>/news/" class="halo" data-text="NEWS">NEWS</a></li>
						<li><a href="<?php echo home_url(); ?>//rep_column//" class="halo" data-text="COLUMN">COLUMN</a></li>
						<li><a href="<?php echo home_url(); ?>/contact/" class="halo" data-text="CONTACT">CONTACT</a></li>
					</ul>
				</nav>
			</div>
		</header>
		<?php else : ?>
		<?php endif; ?>