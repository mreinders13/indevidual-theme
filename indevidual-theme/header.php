<!DOCTYPE html>
<html<?php language_attributes(); ?>>
<head>
	<?php wp_head(); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?php bloginfo('name'); ?></title>
</head>
<body <?php body_class(); ?>>
	<div id="siteHeader">
		<div class="custom-logoAbbv">
			<?php customLogo(); ?><p id="site-title"><?php bloginfo('name'); ?></p>
		</div>
	</div>
	<div id="nav-bar"><nav><?php wp_nav_menu(array('theme_location' => 'top-menu')); ?></nav></div>
	<!-- load header image -->
	<?php if ( get_header_image() ) : ?>
	    <div id="site-header">
	        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php header_image(); ?>" width="100%" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
	        </a>
	    </div>
	<?php endif; ?>

<!-- Main Content -->
<div id="page-main-content">