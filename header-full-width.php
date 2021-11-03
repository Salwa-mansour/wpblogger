<?php
/**
 * The header for our theme full width content
 *use this when no sidebar is displyed 
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bolg2tech
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blog2tech' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
		<!-- <img src="<?php //echo get_custom_header('url'); ?>" alt="hero img" class="hero-img" role="header panner image"> -->
		<!-- <img src="<?php //header_image(); ?>" width="<?php //echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"> -->
		<img src="<?php header_image(); ?>" class="hero-img" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
	
		<div class="site-identity">
		<div class="site-title" role="site title">
			<?php
			the_custom_logo();
		//	if ( is_front_page() && is_home() ) :
				?>
				<h1 class=""><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
		///	else :
				?>
				<!-- <h1 class=""><a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a></h1> -->
		
			<?php //endif; ?>
			
				</div><!--site-title-->
			<?php
			$blog2tech_description = get_bloginfo( 'description', 'display' );
			if ( $blog2tech_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $blog2tech_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>

			</div><!--site-idenetity-->
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'blog2tech' ); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
