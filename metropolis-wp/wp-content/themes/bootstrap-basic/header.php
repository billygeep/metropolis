<?php
/**
 * The theme header
 * 
 * @package bootstrap-basic
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link rel="stylesheet" href="https://use.typekit.net/qgi4olt.css">
        <!--wordpress head-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php 
        if ( function_exists( 'wp_body_open' ) ) {
            wp_body_open();
        } else {
            do_action( 'wp_body_open' );
        }
        ?> 
        <!--[if lt IE 8]>
            <p class="ancient-browser-alert">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/" target="_blank">upgrade your browser</a>.</p>
        <![endif]-->
        
        
        <div id="app" class="container-fluid page-container">
            <?php do_action('before'); ?> 
            <header role="banner">

                <div class="custom-nav">
                    <div id="custom-nav-link-container" class="custom-nav-link-container">

                        <div class="custom-nav-link-container-inner">
                            <?php wp_nav_menu( array( 
									'menu' => 'MainMenu', 
									'container_class' => 're-nav-main-menu' ) ); 
									?>
                        </div>

                    </div>
                    <div class="custom-nav-bar">
                        <div id="custom-nav-burger" class="custom-nav-burger"></div>
                        <div class="custom-nav-logo">EXPLORE</div>
                    </div>
                </div>

            <!--
            <div class="row row-with-vspace site-branding">
                    <div class="col-md-6 site-title">
                        <h1 class="site-title-heading">
                            <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                        </h1>
                        <div class="site-description">
                            <small>
                                <?php bloginfo('description'); ?> 
                            </small>
                        </div>
                    </div>
                    <div class="col-md-6 page-header-top-right">
                        <div class="sr-only">
                            <a href="#content" title="<?php esc_attr_e('Skip to content', 'bootstrap-basic'); ?>"><?php _e('Skip to content', 'bootstrap-basic'); ?></a>
                        </div>
                        <?php if (is_active_sidebar('header-right')) { ?> 
                        <div class="pull-right">
                            <?php dynamic_sidebar('header-right'); ?> 
                        </div>
                        <div class="clearfix"></div>
                        <?php } // endif; ?> 
                    </div>
                </div>
                
                <div class="row main-navigation">
                    <div class="col-md-12">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-primary-collapse">
                                    <span class="sr-only"><?php _e('Toggle navigation', 'bootstrap-basic'); ?></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            
                            <div class="collapse navbar-collapse navbar-primary-collapse">
                                <?php wp_nav_menu(array('theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav navbar-nav', 'walker' => new BootstrapBasicMyWalkerNavMenu())); ?> 
                                <?php dynamic_sidebar('navbar-right'); ?> 
                            </div>
                        </nav>
                    </div>
                </div>
                
                        -->
            </header>
            
            
            <div id="content" class="row site-content">
