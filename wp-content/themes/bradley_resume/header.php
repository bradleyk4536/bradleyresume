<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bradley_Resume
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- CUSTOM LINKS FOR THEME -->
<link href=" http://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bradley_resume' ); ?></a>
<!-- CUSTOM THEME NAVIGATION BAR FOR OMNIFOODS-->
<header class="site-header" role="banner"><!--	NAVBAR-->
	<div class="navbar-wraper">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		  <div class="container-fluid">
			 <!-- Brand and toggle get grouped for better mobile display -->
			 <div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
				  <span class="sr-only">Toggle navigation</span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				  <span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href=""><?php bloginfo( 'name' ); ?></a>
			 </div><!-- Collect the nav links, forms, and other content for toggling -->

<!-- WORDPRESS NAVIGATION STYLE MENU -->
<!-- NOTE IF THE MENU (WP ADMIN AREA) IS NOT SET, THEN THE 'menu_class' IS APPLIED TO THE CONTAINER. IN OTHER WORDS IT OVERWRITES THE container_class.-->
<?php
wp_nav_menu( array(
	'theme_location'  => 'primary',
	'container' 		=> 'nav',
	'container_class' => 'navbar-collapse collapse',
	'menu_class' 		=> 'nav navbar-nav navbar-right'
));
?>
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
</header>
