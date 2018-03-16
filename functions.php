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
		'redirect'		=> false,
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

// PLUGIN - Yoast
function da_yoasttobottom() {
	return 'low';
}
add_filter( 'wpseo_metabox_prio', 'da_yoasttobottom');

?>
