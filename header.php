<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,700i" rel="stylesheet">

    <?php wp_head(); ?>

    <?php
    // ACF extra header scripts
    if ( get_field('kdw_options_admin_scripts_header','options') ) { echo get_field('kdw_options_admin_scripts_header','options'); 	}
    ?>

</head>

<body <?php body_class(); ?>>
    <div id="header-wrapper">

        <div class="wrapper-outer">

            <header class="site-header wrapper-large">

                <div id="header-logo">
                    <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/logo.svg" alt="<?php echo get_bloginfo('name'); ?>"/>
                    </a>
                </div>

                <div id="header-nav-button"><span></span></div>

                <div id="header-nav">
                    <nav>
                        <div id="main-menu-wrapper">
                            <ul id="main-menu">
                                <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
                            </ul>
                        </div>
                    </nav>
                </div>

            </header>

        </div>

    </div>
