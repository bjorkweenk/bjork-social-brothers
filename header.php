<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bjork-social-brothers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="//db.onlinewebfonts.com/c/14126655f43628074be1976d86f13eae?family=Font+Awesome+5+Pro" rel="stylesheet" type="text/css"/>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400&family=Open+Sans:wght@300&family=Quicksand:wght@300&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bjork-social-brothers' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- <div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$bjork_social_brothers_description = get_bloginfo( 'description', 'display' );
			if ( $bjork_social_brothers_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $bjork_social_brothers_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
		</div>.site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<img class="logo" src="https://www.werkenbijsocialbrothers.nl/wp-content/uploads/2021/10/SBlogo.svg" width="70" height="70">
			<h2 class="site-text"> home </h2>
			<a href="../../blog.php"><h2 class="site-text1"> blog </h2></a>
			<?php
	
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
