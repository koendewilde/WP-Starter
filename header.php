<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i|Roboto:300,400,500,500i,600" rel="stylesheet">

    <?php wp_head(); ?>

    <?php
    // extra header scripts
    if ( get_field('kdw_options_admin_scripts_header','options') ) { echo get_field('kdw_options_admin_scripts_header','options'); 	}
    ?>

</head>

<body <?php body_class(); ?>>
    <div id="header-wrapper">

        <div id="menu-bar" class="wrapper-outer">

            <header class="site-header wrapper-large">

                <div id="header-logo">
                    <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/OttoSchouten.svg" alt="Otto Schouten"/>
                    </a>
                </div>

                <div id="header-nav-wrapper">
                    <div>
                        <nav class="main-content-wrapper">

                            <div id="sl-menu">
                                <ul id="nav-header">
                                    <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
                                </ul>
                                <div id="select-lang"><a href="<?php echo network_site_url(); ?>" class="dutch">NL</a><a href="<?php echo network_site_url(); ?>/en/" class="english">EN</a></div>
                            </div>

                        </nav>
                    </div>
                </div>

            </header>

        </div>

    </div>
