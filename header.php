<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package incarnateWordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
<!--	<link rel="profile" href="https://gmpg.org/xfn/11">-->
<!--    <meta charset="UTF-8">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/packs/js/cookies.js"></script>
    <script>
        var incarnateDomain = '.incarnategamingllc.com';
        var IncarnateCrossReferenceOveride = 'https://www.joomla.incarnategamingllc.com/index.php/10';
    </script>
    <script src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/packs/js/hooks.js"></script>
    <script src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/packs/js/ajax.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="inc-top-html">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'incarnatewordpress' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
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
			$incarnatewordpress_description = get_bloginfo( 'description', 'display' );
			if ( $incarnatewordpress_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $incarnatewordpress_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
            <a id="incarnate-logo" class="navbar-brand text-light" href="/"><img src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/assets/images/favicon-white-64x64.png">Incarnate Gaming</a>
            <span class="top-button" id="top-button"></span>
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'incarnatewordpress' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
            <script src="https://incarnatesharedassets.s3.us-east-2.amazonaws.com/packs/js/navFunctions.js"></script>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
