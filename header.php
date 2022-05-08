<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package toonzaalkeukens
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<?php the_field('tracking_code', 'option'); ?> 
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'toonzaalkeukens' ); ?></a>

	<header id="masthead" class="site-header">
	<div class="container">
	<div class="row">
		<div class="col-lg-5 col-md-4">
		<div class="site-branding">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo-toonzaalkeukens.svg"></a>
		</div><!-- .site-branding -->
		</div><!-- col-5 -->
		<div class="col-lg-7 col-md-8">
		<div class="mobile-menu-wrapper">
		<nav id="site-navigation" class="main-navigation">
				<button class="menu-toggle hamburger hamburger--collapse" aria-controls="primary-menu" aria-expanded="false" <?php esc_html_e( 'Primary Menu', 'toonzaalkeukens' ); ?>">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
		</div><!-- mobile-menu-wrapper -->
		</div><!-- col-md-7 -->
	</div><!-- row -->
	</div><!-- container -->
	</header><!-- #masthead -->
