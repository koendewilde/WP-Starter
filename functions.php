<?php
require get_template_directory() . '/f/f-kdw.php';
require get_template_directory() . '/f/f-header.php';
require get_template_directory() . '/f/f-content.php';
require get_template_directory() . '/f/f-admin.php';
require get_template_directory() . '/f/f-helpers.php';

/* PLUGINS */

// PLUGIN - ACF
if( function_exists('acf_add_options_page') ) {
    
	// main options
	acf_add_options_page(array(
		'page_title' 	=> 'Opties',
		'menu_title'	=> 'Opties',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> true,
		'position' 		=> 9
	));
    
    acf_add_options_sub_page(
        array(
            'page_title' 	=> 'Footer',
            'menu_title'	=> 'Footer',
            'parent_slug'	=> 'theme-general-settings',
        )
    ); 
    
    acf_add_options_sub_page(
        array(
            'page_title' 	=> 'Extra',
            'menu_title'	=> 'Extra',
            'parent_slug'	=> 'theme-general-settings',
        )
    );
    
}

// Gravity Forms

add_filter( 'gform_ajax_spinner_url', 'kdw_spinner_url', 10, 2 );
function kdw_spinner_url( $image_src, $form ) {
    return get_template_directory_uri().'/img/icons/loader40x40.gif';
}

add_filter( 'gform_pre_render', 'kdw_first_error_focus' );
function kdw_first_error_focus( $form ) { 
    add_filter( 'gform_confirmation_anchor_' . $form['id'], '__return_false' );
    ?>
    <script type="text/javascript">
        if (window['jQuery']) {
            (function($) {
                $(document).bind('gform_post_render', function() {
                    var $firstError = $('li.gfield.gfield_error:first');
                    if ($firstError.length > 0) {
                        $firstError.find('input, select, textarea').eq(0).focus();
                        document.body.scrollTop = $firstError.offset().top;
                    }
                });
            })(jQuery);
        }

    </script>
    <?php 
    return $form;
}

// PLUGIN - Yoast
function da_yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'da_yoasttobottom');

?>
