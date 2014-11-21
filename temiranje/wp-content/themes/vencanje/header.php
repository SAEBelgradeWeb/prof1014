<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package vencanje
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow" />
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta name="author" content="" />

<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<link rel="shortcut icon" href="images/favicon.ico" />

<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div id="bodychild">
	
	<div id="outercontainer">
    	
        <!-- HEADER -->
        <div id="outerheader">
        	<div class="shadow-l"></div>
            <div class="shadow-r"></div>
        	<div class="container">
            
            <header id="top">
            	<div class="row">
                    <div id="logo" class="twelve columns">
                    	<span class="desc">
                    		<?php 

                    		bloginfo( 'description' );

                    		 ?>

                    	</span>
                        <a href="<?php bloginfo('url') ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" /></a>
                    </div>
                </div>
                <div class="row">
                    <section id="navigation" class="twelve columns">

						<?php 
						$args = array(
							'theme_location' => 'glavni',
							'container' => 'nav',
							'container_id' => 'nav-wrap',
							'menu_class'      => 'sf-menu',
							'menu_id'         => 'topnav',
							);

						wp_nav_menu( $args );

						 ?>
						<!-- nav -->	
                    </section>
                </div>
                <div class="clear"></div>
            </header>
            
            </div>
        </div>
        <!-- END HEADER -->
