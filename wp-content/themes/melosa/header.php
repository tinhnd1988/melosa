<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Melosa
 * @since Melosa 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/jquery.fancybox.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/styles.css" />
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.flexslider.js" defer=""></script>
	<!-- Add fancyBox main JS and CSS files -->
	<script type="text/javascript" src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.fancybox.js"></script>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/ultility.js"></script>
</head>

<body <?php body_class(); ?>>
	<div id="container">
		<div id="header">
			<div class="container">
				<h1 style="height: 0; text-indent: -9999px;"><?php bloginfo( 'name' ); ?></h1>
				<div class="logo fl">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img alt="Melosa" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo.png"></a>
				</div>			

				<div id="hambuger"></div>
				<?php wp_nav_menu(array(
					'theme_location'  => 'primary',
					'container'       => '',
					'menu_class'      => 'nav lsn',
				)); ?>
				<!--<ul class="nav lsn" style="">
					<li class="scrollto" id="menu-item-27">
						<a href="about.html">Giới thiệu</a>
					</li>
					<li class="scrollto" id="menu-item-28">
						<a href="location.html">Vị trí</a>
					</li>
					<li class="scrollto" id="menu-item-29">
						<a href="project.html">Dự án</a>
					</li>
					<li class="scrollto" id="menu-item-30">
						<a href="utilities.html">Tiện ích</a>
					</li>
					<li class="scrollto" id="menu-item-31">
						<a href="view360.html">View 360</a>
					</li>
					<li class="scrollto" id="menu-item-32">
						<a href="funding.html">Hỗ Trợ Tài Chính</a>
					</li>
					<li class="scrollto" id="menu-item-33">
						<a href="news.html">Tin Tức - Sự kiện</a>
					</li>
					<li class="scrollto" id="menu-item-35">
						<a href="contact.html">Liên hệ</a>
					</li>
					<li class="langs" id="menu-item-35">
						<span class="lang-item lang-item-en"><a href="http://melosa.vn/en/" hreflang="en"></a></span>
						<span class="lang-item lang-item-vi"><a href="http://melosa.vn/en/" hreflang="en"></a></span>
					</li>
				</ul>-->
			</div>
			<ul class="langs lsn">
				
				<li class="lang-item lang-item-en">
					<a href="http://melosa.vn/en/" hreflang="en"></a>
				</li>
				<li class="lang-item lang-item-vi">
					<a href="http://melosa.vn/" hreflang="vi"></a>
				</li>
			</ul>
		</div>
		<div id="main">
