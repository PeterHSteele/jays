<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Jays
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'jays' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			if ( has_custom_logo() ){
				the_custom_logo();
			}
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			/*else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php*/
			endif;
			$jays_description = get_bloginfo( 'description', 'display' );
			if ( $jays_description || is_customize_preview() ) :
				?>
				<!--<p class="site-description"><?php echo $jays_description; /* WPCS: xss ok. */ ?></p>-->
			<?php endif; ?>
		</div><!-- .site-branding -->
	<?php if ( is_home() && is_front_page() ){
		/*get_search_form();*/
	}
	?>
	<div class="nav-container">
		<div class="nav-search-control">
			<button class="search-toggle"><i class="fas fa-search"></i></button>
			<button id="menu-toggle" class="menu-toggle" ><i class="fas fa-bars"></i></button>
		</div><!--.nav-control-->
		<nav id="site-navigation" class="main-navigation">
			<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'jays' ); ?></button>-->
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav><!-- #site-navigation -->
	</div>
	<div class="nav-search">
		<?php get_search_form(array(
			'aria-label'  => 'Top of page search'
		)); ?>
	</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
