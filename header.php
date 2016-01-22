<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Moose_Framework
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'moose-frame' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
	
		<nav class="navbar navbar-inverse-not navbar-fixed-top-not" role="navigation">
	
  		  <div class="container-fluid">

		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		            <span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		    <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="logo" src="http://tiana/wp-content/uploads/2016/01/TianaGustafsonLogo.png" alt=""></a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse navbar-ex1-collapse">

		    	<div class="logo hidden-sm hidden-xs hidden-md">
		        	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo $siteLogo_desktop;  ?>" alt=""></a>
		      	</div>
		        <?php
			        wp_nav_menu( array(
			            'theme_location' => 'primary',
			            'depth' => 2,
			            'container' => false,
			            'menu_class' => 'nav navbar-nav navbar-right',
			            'fallback_cb' => 'wp_page_menu',
			            //Process nav menu using our custom nav walker
			            'walker' => new wp_bootstrap_navwalker())
			        );
		        ?>
		    </div><!-- /.navbar-collapse --> 
  		  </div><!-- /.container-fluid -->

		</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

	<?php $page_header_image = get_field( 'page_header_image' ); ?>
	
	<header id="pg-header">

	<?php if ( is_home() || is_single() ) : ?>
		<img class="img-responsive" src="http://tiana/wp-content/uploads/2016/01/tiana-header-img-1-noise-light-2.jpg" alt="tiana img">

		<div class="header-text-container">
			<article class="header-text-box">
				<h3>Get Paid to Be You!</h3>
				<h4>
					Learn how to Create<br>
					Online Systems that work<br>
					for you FREEing you up <br>
					to have more FUN <br>
					and make more MONEY! <br><br>
					<em>I can show you how!</em>
				</h4>
			</article>			
		</div>
		
	<?php else : ?>
		<img class="img-responsive" src="<?php echo $page_header_image; ?>" alt="tiana img">
	<?php endif; ?>
	

	</header>
	<section class="header-form-section">

		<div class="header-form-container container">
			<div class="col-md-6">
				<h3 class="form-section-text pull-right">
				Free Your Body, Life & Business.<br>
				Get Your FREE Inspirational Workbook Now ...
				</h3>
			</div>
			<div class="col-md-6">
				<form class="form-inline header-form" role="form">
				  <div class="form-group">
				    <input type="email" class="form-control" id="email" placeholder="First Name">
				  </div>
				  <div class="form-group">
				    <input type="password" class="form-control" id="pwd" placeholder="Email">
				  </div>
				  
				  <button type="submit" class="btn btn-default header-from-submit">Get<br> it!</button>
				</form>
			</div>

			
		</div>
	</section>






























