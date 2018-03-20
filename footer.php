<footer id="footer" class="clearfix wrapper-outer">

    <div id="footer-main" class="wrapper-small clearfix">

        <div id="footer-main-left">


            <h3>
                <?php echo esc_attr(get_field('kdw_footer_right_address1','options')); ?>
            </h3>

            <ul id="footer-address">
                <li>
                    <?php echo esc_attr(get_field('kdw_footer_right_address2','options')); ?>
                </li>
                <li>
                    <?php echo esc_attr(get_field('kdw_footer_right_address3','options')); ?>
                </li>

            </ul>

            <ul id="footer-links">
                <li id="footer-phone-link">
                    <?php echo kdw_return_theme_icon('phone'); ?>
                    <?php echo '<a href="tel:'.esc_attr(get_field('kdw_footer_right_phone_link','options')).'">'.esc_attr(get_field('kdw_footer_right_phone','options')).'</a>'; ?>
                </li>
                <li id="footer-email-link">
                    <?php echo kdw_return_theme_icon('email'); ?>
                    <?php echo hide_email( esc_attr(get_field('kdw_footer_right_email','options')) ); ?>
                </li>
            </ul>


        </div>

        <div id="footer-main-right">




        </div>


    </div>

    <div id="footer-bottom" class="wrapper-main clearfix">

        <div id="footer-bottom-left">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo/min/logo-icon-white.svg" alt="<?php echo get_bloginfo('name'); ?>" />
        </div>

        <div id="footer-bottom-right">
            <ul id="footer-bottom-menu">
                <?php wp_nav_menu( array( 'theme_location' => 'footer-menu-bottom', 'container' => false, 'items_wrap' => '%3$s' ) ); ?>
            </ul>

            <ul id="footer-social-buttons">
                <?php
                
                $twitter = esc_url( get_field('kdw_footer_social_twitter','options') );
                if( $twitter && $twitter != '' ){
                    echo '<li><a href="'.$twitter.'" target="_blank">'.kdw_return_svg_icon('twitter').'</a></li>';   
                }
                
                $facebook = esc_url( get_field('kdw_footer_social_facebook','options') );
                if( $facebook && $facebook != '' ){
                    echo '<li><a href="'.$facebook.'" target="_blank">'.kdw_return_svg_icon('facebook').'</a></li>';
                }
                
                $instagram = esc_url( get_field('kdw_footer_social_instagram','options') );
                if( $instagram && $instagram != '' ){
                    echo '<li><a href="'.$instagram.'" target="_blank">'.kdw_return_svg_icon('instagram').'</a></li>';
                }
                
                $linkedin = esc_url( get_field('kdw_footer_social_linkedin','options') );
                if( $linkedin && $linkedin != '' ){
                    echo '<li><a href="'.$linkedin.'" target="_blank">'.kdw_return_svg_icon('linkedin').'</a></li>';
                }
                
                ?>
            </ul>

        </div>

    </div>

</footer>

<?php wp_footer(); ?>

<?php if ( get_field('kdw_options_admin_scripts_footer','options') ) { echo get_field('kdw_options_admin_scripts_footer','options'); 	} ?>

</body>

</html>
