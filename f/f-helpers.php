<?php


//
// PAGE INTRO
//
/* intro buttons */
function kdw_page_intro_buttons($acf1, $acf2){

    $class = 'button1';
    $button1 = get_field($acf1);
    $button2 = get_field($acf2);
    
    if ($button1 || $button2){

        echo '<div class="intro-buttons-wrapper buttons-wrapper">';  

        if( $button1 ){
            echo '<a class="button-green-solid" href="'. $button1['url'].'" target="'. $button1['target'].'">' . $button1['title'].'</a>';
        }

        if( $button2 ){
            echo '<a class="button-green-solid" href="'. $button2['url'].'" target="'. $button2['target'].'">' . $button2['title'].'</a>';
        }

        echo '</div>';
        
    }
    
}

//
// ROWS 
//

/* ROW - Image */
function kdw_row_img($i){ 
    
    if ($i == 'intro'){
        $options = get_field('kdw_page_intro_img_options'); 
        $imgID = get_field('kdw_page_intro_img'); 
    } else {
        $options = get_sub_field('options');
        $imgID = get_sub_field('img');
    }
    
    if ($options == 'large' ){
        $wrapper_class = 'row-inline-image-large';
        $size = 'wrapper-large';
        $img_size = 'large';
    
    } else if ( $options == 'medium'){
        $wrapper_class = 'row-inline-image-content';
        $size = 'wrapper-content';
         $img_size = 'medium';
    } else {
        // default = small
        $wrapper_class = 'row-inline-image-small';
        $size = 'wrapper-small';
        $img_size = 'medium';
    }
     
    if( $imgID && $options == 'bg1' || $options == 'bg2'){
        
        $bg_img = wp_get_attachment_image_src( $imgID , 'large' );
        
        // css styles for .row'$i'
        
        echo '<div class="row-bg-image row-bg-image-'.$options.' wrapper-outer row-margin row'.$i.' clearfix" style="background-image: url('.$bg_img[0].');">';
            echo '<div></div>';
        echo '</div>';
        
    } else if ($imgID){
    echo '<div class="row-inline-image  wrapper-outer '.$wrapper_class.' row'.$i.' clearfix row-padding">';
        echo '<div class="'.$wrapper_class.'">';
        echo wp_get_attachment_image($imgID, $img_size);
        echo '</div>';
    echo '</div>';
    }
}

/* ROW Editor */
function kdw_row_editor($i){
    
    $options = get_sub_field('options');
    if ( $options == 'xs'){
        $wrapper_class = 'row-editor-extra-small';
        $size = 'wrapper-extra-small';
    } else if ($options == 'large' ){
        $wrapper_class = 'row-editor-large';
        $size = 'wrapper-large';
    } else if ( $options == 'large_bg'){
        $wrapper_class = 'row-editor-large row-bg-grey row-margin';
        $size = 'wrapper-large';
    } else if ( $options == 'small_bg'){
        $wrapper_class = 'row-editor-small row-bg-grey row-margin';
        $size = 'wrapper-small';
    } else {
        // defaults 
        $wrapper_class = 'row-editor-small';
        $size = 'wrapper-small';
    }
     
    echo '<div class="row-editor wrapper-outer '.$wrapper_class.' row'.$i.' clearfix row-padding">';
        echo '<div class="wrapper-main">';  
            echo '<div class="'.$size.'">';

                echo '<h2 class="title--v1">'.get_sub_field('title').'</h2>';
                echo '<div class="entry-content">';
                    echo get_sub_field('content');
                echo '</div>';

            echo '</div>';
        echo '</div>';
    echo '</div>';
 
}

/* ROW Tiles */

/* Tiles without image (repeater: 1 tot 4 link  &&  options: title black/green + bg color + link button or tile */
function kdw_row_tiles_txt (){ 
     
}

/* Tiles with image (2 tot 4 + title black/green + link &&  options: title black/green + bg color + link button or tile */
function kdw_row_tiles_txt_img (){ 
     
}


//
// OLD OLD OLD 
//

function kdw_get_post_tile($i=0){
    
    global $post;
    $cpt = $post->post_type;
    if ($cpt == 'post-stylists')
    {
         
    }  
    else 
    {
        // post
        echo '<a href="'.get_the_permalink().'" class="post-tile post-tile'.$i.' post-tile-'.$cpt.'">';

            if ( has_post_thumbnail() ) {
                $bg_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'medium');
                $tile_bg = 'background-image:url('.$bg_img[0].');';  
                echo '<div class="post-tile-bg" style="'.$tile_bg.'"><span></span></div>';
            } else {
                echo '<div class="post-tile-bg post-tile-bg-empty"><span></span></div>';
            }
            echo '<div class="post-tile-content">';
                echo '<h2 class="title--v2">'.get_the_title().'</h2>';
                echo '<p>'.excerpt(24).'</p>';
            echo '</div>';

        echo '</a>';
    }
}




//
// header image
//

// header image css
 function kdw_header_image_css(){
     
    global $post;
     
    $sizeM = 'medium';
    $sizeL = 'large';
    $sizeXL = 'extra-large';
     
    if ( is_category() ){
        
        $queried_object = get_queried_object();
        $catTerm = $queried_object->term_id;
        
        $bg_imgID = esc_attr( get_field('kdw_header_bg_image', 'term_'.$catTerm ) );

    } else if ( is_post_type_archive('post-stylists') || is_tax('category-stylists-region') ){
        
        $bg_imgID = esc_attr( get_field('kdw_archive_stylists_header_img', 'options' ) );
       
    } 
     
     
    // generate css
    
    if ( $bg_imgID ){

        echo '<style>';

            // size M  
            $bg_medium = wp_get_attachment_image_src( $bg_imgID, $sizeM );
            $bg_url_medium = $bg_medium[0];
            echo '.header-image{ background-image: url('.$bg_url_medium.');}';
        
            // size L
            echo '@media screen and (min-width: 540px) {';     
                $bg_large = wp_get_attachment_image_src( $bg_imgID, $sizeL );
                $bg_url_large = $bg_large[0];
                echo '.header-image{ background-image: url('.$bg_url_large.');}';
            echo '}';
        
            // size XL
            echo '@media screen and (min-width: 1280px) {';    
                $bg_xl = wp_get_attachment_image_src( $bg_imgID, $sizeXL );
                $bg_url_xl = $bg_xl[0];
                echo '.header-image{ background-image: url('.$bg_url_xl.');}';
            echo '}';
        
         echo '</style>';
    }  
   
}  


// yoast primary cat 
function kdw_the_primary_category_id( $postID, $tax, $return){
    
    // get all post categories
    $category = get_the_terms( $postID, $tax );
    
    // If post has a category assigned.
    if ($category){
         
        if ( class_exists('WPSEO_Primary_Term') )
        {
            // Show the post's 'Primary' category, if this Yoast feature is available, & one is set
            $wpseo_primary_term = new WPSEO_Primary_Term( $tax, $postID );
            $wpseo_primary_term = $wpseo_primary_term->get_primary_term();
            $term = get_term( $wpseo_primary_term );
            if (is_wp_error($term)) { 
                // Default, first category
                $catID = $category[0]->term_id;
                $catName = $category[0]->name;
            } else { 
                // Yoast Primary category
                $catID = $term->term_id;
                $catName = $term->name;
            }
        } 
        else {
            // Default, first category
            $catID = $category[0]->term_id;
            $catName = $category[0]->name;
        }
        
        if ($return == 'name'){ 
            return $catName; 
        } else if ($return == 'link'){ 
            return $catName; 
        } else { 
            return $catID; 
        } 
        
    }  

}








// homepage

function kdw_get_row_three_posts(){
    
    global $post;
    
    if (get_sub_field('row_two_posts')){ 
        $count = 2;
    } else {
        $count = 3;
    }
    
    $choose = get_sub_field('row_choose_posts');
    
    if ($choose == 'recent'){    
        $catID = 'recent';
    } else if ( $choose == 'populair'){
        $catID = 'ppost';
    } else {
        $catID = get_sub_field('row_category');
    }
    
    $catName = get_sub_field('row_title');
    
    $catLinktitle = get_sub_field('row_title_link');
    
    
    // start 
    
    
    if ($catID == 'ppost'){
          
         
        $catLink = get_permalink(get_option('page_for_posts')).'?order=populair';
        
        $args = array(
            'meta_key' => 'views_monthly',
            'posts_per_page' => $count,
            'orderby' => 'meta_value_num',
            'post_type' => 'post'
        );

    } else if ( $catID == 'recent'){
        
        
        $catLink = get_permalink(get_option('page_for_posts'));
        
        $args = array( 
            'posts_per_page' => $count
        );
        
    } else {
        
        
        $catLink = get_category_link($catID);
        
        $args = array( 
            'posts_per_page' => $count, 
            'category' => $catID
        );
        
    }
    
    
    
    echo '<div class="row-three-posts row-posts-only'.$count.' wrapper-outer clearfix">';
    
        echo '<div class="wrapper-main">'; 
  
                echo '<div class="three-posts-intro clearfix">';
    
                    echo '<h3 class="serif">'.$catName.'</h3>';
                
                    echo '<a href="'.$catLink.'">'.$catLinktitle.'</a>';
                
                echo '</div>';
    
                echo '<div class="three-posts-wrapper post-tiles-wrapper">';
                
                $latestposts = get_posts($args);
                $i=0;
                foreach( $latestposts as $post ){
                        $i++;
                        
                        setup_postdata( $post ); 
                        echo '<a href="'.get_the_permalink().'" class="post-tile post-tile'.$i.'">';

                            if ( has_post_thumbnail() ) {
                                $bg_img = wp_get_attachment_image_src( get_post_thumbnail_id() , 'medium');
                                $tile_bg = 'background-image:url('.$bg_img[0].');';  
                                echo '<div class="post-tile-bg" style="'.$tile_bg.'"><span></span></div>';
                            } else {
                                echo '<div href="'.get_the_permalink().'" class="post-tile-bg post-tile-bg-empty"><span></span></div>';
                            }
                           
                            echo '<div class="post-tile-content">';
                                echo '<h2>'.get_the_title().'</h2>';

                                echo '<p class="serif">';
                                
                                    echo '<span class="excerpt-regular">'.excerpt(26).'</span>';
                                
                                    if ( $count == 2 && $i == 1){
                                        echo '<span class="excerpt-long">'.excerpt(48).'</span>';
                                    } 
                    
                                echo '</p>';

                            echo '</div>';
                            
                        echo '</a>';
                        wp_reset_postdata();   

                }    

                echo '</div>';  

        echo '</div>';
    
    echo '</div>';

}


function kdw_get_featured_tiles(){
    
    global $post;
    
    
    
    // intro 
    $rowName = get_sub_field('row_title');
    $rowLink = get_sub_field('row_title_link');
    
    // color
    $rowColor = get_sub_field('row_colors');
    
    // blocks
    $blocks = get_sub_field('row_blocks');
    
    
    echo '<div class="row-featured-tiles wrapper-outer clearfix color-'.$rowColor.'">';

            echo '<div class="wrapper-main">'; 

                echo '<div class="three-posts-intro clearfix">';
    
                    echo '<h3 class="serif">'.$rowName.'</h3>';
                
                    echo '<a href="'.$rowLink['url'].'" target="'.$rowLink['target'].'">'.$rowLink['title'].'</a>';
                
                echo '</div>';
    
                echo '<div class="featured-tiles-wrapper">';
                
                // start repeater
               
                kdw_create_custom_tile(1, $blocks[0]);
                kdw_create_custom_tile(2, $blocks[1]);
                kdw_create_custom_tile(3, $blocks[2]);
    
                // end repeater
    
                echo '</div>';  

        echo '</div>';
    
    echo '</div>';
    
   
    
}
// helper 
 function kdw_create_custom_tile($i, $block ){
     
        $tile = $block['row_choose_block'];
        $style = '';
        $tile_linked = false; 
        $tile_cta = false; 
        $tile_img = false; 
     
        if ($tile == 'cta'){
            $tile_cta = true;
        } else if ($tile == 'img'){
            $tile_img = $block['block_img'];
        } else {
            if ( $block['block_link'] ){
                $tile_linked = $block['block_link'];
            } 
            // bg color 
            $rowColor = get_sub_field('row_colors');
            if ($rowColor == 'picker' && $i == 1 ){
                $rowColorHex = get_sub_field('row_color_picker');  
                $style = 'style="background-color: '. $rowColorHex.'"';
            }  
            // content 
            $tile_title1 = $block['block_title1'];
            $tile_title2 = $block['block_title2'];
            $tile_content = $block['block_content'];
            $tile_content_link = $block['block_content_link'];

        }
     
        
        if ($tile_cta)
        {
           
            echo '<div class="fs-cta fs-block fs-block'.$i.'">';
                echo '<div>';
                    echo '<p class="serif">'.$block['block_content'].'</p>';
                    $link = $block['block_content_link'];
                    echo '<a href="'.$link['url'].'" target="'.$link['target'].'" class="button-yellow-outline">'.$link['title'].'</a>';
                
                    
                echo '</div>';
            echo '</div>'; 
        
        } 
        else if ($tile_img)
        {
            
            $imgURL = wp_get_attachment_image_src( $tile_img , 'medium');
                                  
            echo '<div class="fs-block fs-block-bgimg fs-block'.$i.'" style="background-image: url('.$imgURL[0].');">';
                echo '<div>';
                echo '</div>';
            echo '</div>';  
            
        } 
        else
        {
            
            // tile txt
            if ($tile_linked) {  
                echo '<a href="'.esc_url($tile_linked).'" class="fs-block fs-block'.$i. ' color-'.$rowColor.'" '.$style.'>'; 
            } else {  
                echo '<div class="fs-block fs-block'.$i.' color-'.$rowColor.'" '.$style.'>'; 
            }
       
                echo '<div>';
                    echo '<h4><span class="serif">'.$tile_title1.'</span> '.$tile_title2.'</h4>';
                    echo '<p class="serif">'.$tile_content.'</p>';
            
                    if (!$tile_linked && $tile_content_link ) {
                        echo '<a href="'.$tile_content_link['url'].'" target="'.$tile_content_link['target'].'" class="serif fs-block-link">'.$tile_content_link['title'].'</a>';
                    } else if ($tile_content_link){
                        echo '<span class="serif fs-block-link">'.$tile_content_link['title'].'</span>'; 
                    }
            
                    echo '</div>';
            
            if ($tile_linked) { echo '</a>'; } else { echo '</div>'; }
            
        }
}


function kdw_get_row_extra_content($id, $v){
    
    if ($v == 'page') { $acf_field = $id; $acf_id = $post->ID; }
    else if ($v == 'term'){ $acf_field = 'kdw_extra_content_repeater'; $acf_id = 'term_'.$id;}
    else if ($v == 'options'){ $acf_field = $id; $acf_id = 'options'; }
       
    $blocks = get_field($acf_field, $acf_id);
    
    if ($blocks){

        $count = count($blocks);
        $class = 'content-no'.$count;

        echo '<div class="row-extra-content wrapper-outer clearfix '.$class.'">';

            echo '<div class="wrapper-main">'; 

                    echo '<div class="divider clearfix"></div>';

                    echo '<div class="extra-content-wrapper">';

                        $i=0;

                        foreach($blocks as $block){ 

                            $i++;

                            echo '<div class="ec-block'.$i.'">';
                                 echo '<div>';
                                    echo '<h2>'.esc_attr($block['title']).'</h2>';
                                    echo '<div class="entry-content serif size15 grey">'.$block['content'].'</div>';
                                echo '</div>';
                            echo '</div>';  

                        }
                    echo '</div>';  

            echo '</div>';

        echo '</div>';
    }
    
}

function kdw_row_extra_page_content(){
      
    $block1 = get_field('kdw_extra_content_first_editor');
    $block2 = get_field('kdw_extra_content_second_editor');
    
    $class = false;
    
    if ( $block1 != '' && $block2 != ''  ){ 
        $class = 'col2';
    } else if ( $block1 != '' || $block2 != ''  ){
        $class = 'col1';
    }
        
      
                                                  
    if ( $class  ){

        
        echo '<div class="row-extra-page-content wrapper-outer clearfix">';
            echo '<div class="wrapper-main">'; 
                    echo '<div class="extra-page-content-wrapper '.$class.'">';
       
                        if ( $block1 != '') {
                            
                            $title1 = get_field('kdw_extra_content_first_title');
                            
                            if( get_field('kdw_extra_content_first_color') ){ $color1 = 'black'; } else { $color1 = ''; }
                            
                            echo '<div class="ec-block ec-block1">';
                                echo '<h2 class="title--v2 '.$color1.'">'.esc_attr($title1).'</h2>';
                                echo '<div class="entry-content">'.$block1.'</div>';
                            echo '</div>';  
                        }

                        if ( $block2 != '') {
                            
                            $title2 = get_field('kdw_extra_content_second_title');
                            
                            if( get_field('kdw_extra_content_second_color') ){ $color2 = 'black'; } else { $color2 = ''; }
                            
                            echo '<div class="ec-block ec-block2">';
                                echo '<h2 class="title--v2 '.$color2.'">'.esc_attr($title2).'</h2>';
                                echo '<div class="entry-content">'.$block2.'</div>';
                            echo '</div>';  
                        }
                                        
 
                    echo '</div>';  
            echo '</div>';
        echo '</div>';
        
    }
    
}

 
    
    
function kdw_row_cta_small( $postID ){
    
 $title = esc_attr(get_field('kdw_page_small_cta_title', $postID) );
 $content = esc_attr( get_field('kdw_page_small_cta_content', $postID) );
 
      
    if ($title || $content ){

        $list = get_field('kdw_page_small_cta_list', $postID );
        $link = get_field('kdw_page_small_cta_link', $postID );
 
        echo '<div class="row-cta-small wrapper-outer clearfix">';

            echo '<div class="wrapper-small">'; 

                echo '<div class="cta-small-wrapper">';

                    echo '<h2>'.$title.'</h2>';
                    echo '<div class="entry-content serif medium"><p>'.$content.'</p></div>';

                    if ($list){
                        echo '<ul class="cta-small-list">';
                        foreach($list as $l){ 

                                echo '<li>'.esc_attr($l['item']).'</li>';


                        }
                        echo '</ul>';  
                    }
                    if ($link){ 
                       echo '<a class="button-green-solid" href="'.$link['url'].'" target="'.$link['target'].'">'.$link['title'].'</a>';
                    }
        
                echo '</div>';
        
            echo '</div>';
        
        echo '</div>';
    }

}


/* the author info */
function kdw_the_author_info($id = ''){
    
    if ($id != ''){ 
        $userID = $id;
    } else { 
        $userID = get_the_author_meta('ID');
    }
    
    // do not show user if he opted out
    if ( get_field('kdw_user_hidden', 'user_'.$userID )){ return; }
    
    
    echo '<div class="author-info-wrapper">';
    
        $AuthorImgID = get_field('kdw_user_img', 'user_'.$userID );
        $InstagramURL = get_field('kdw_user_instagram', 'user_'.$userID );
        $FacebookURL = get_field('kdw_user_facebook', 'user_'.$userID );
        $TwitterURL = get_field('kdw_user_twitter', 'user_'.$userID );
        $PinterestURL = get_field('kdw_user_pinterest', 'user_'.$userID );
        
        if ($AuthorImgID){ 
            $bg_img = wp_get_attachment_image_src( $AuthorImgID , 'thumbnail-stylists');
            $tile_bg = 'background-image:url('.$bg_img[0].');';  
            echo '<a href="'.get_author_posts_url( $userID ).'" class="author-info-img" style="'.$tile_bg.'"></a>';
        } else {
            // empty avatar -> fallback?
            echo '<div class="author-info-img author-info-img-empty"></div>';   
        } 
    
        echo '<div class="author-info-content">';
    
            if (is_singular(array('post','page'))){
                echo '<h3><a href="'.get_author_posts_url( $userID ).'">'.get_the_author_meta('display_name',$userID).'</a></h3>'; 
                echo '<div class="entry-content small grey">';
                    echo wpautop(get_the_author_meta('description',$userID));
                echo '</div>'; 
             } else {
              echo '<h1>'.get_the_author_meta('display_name', $userID).'</h1>'; 
                echo '<div class="entry-content">';
                    echo wpautop(get_the_author_meta('description', $userID));                
                echo '</div>';
            }
            // social media_buttons
            echo '<ul class="user-social-media">';
            if($FacebookURL){
                echo '<li class="instagram"><a href="'.$InstagramURL.'">Instagram</a></li>';
            }
            if($FacebookURL){
                echo '<li class="facebook"><a href="'.$FacebookURL.'">Facebook</a></li>';
            }
            if($FacebookURL){
                echo '<li class="twitter"><a href="'.$TwitterURL.'">Twitter</a></li>';
            }
            if($FacebookURL){
                echo '<li class="pinterest"><a href="'.$PinterestURL.'">Pinterest</a></li>';
            }
            echo '</ul>';        
    
        echo '</div>';
    
    echo '</div>';
}

// HEADER + MENU

// submenu
function kdw_blog_submenu(){

echo '<ul class="submenu">';
    
    $cats = array( get_field('kdw_options_menu_cat1','options'), get_field('kdw_options_menu_cat2','options'), get_field('kdw_options_menu_cat3','options'), get_field('kdw_options_menu_cat4','options') );
     
    $terms = get_terms([
        'taxonomy' => 'category',
        'hide_empty' => false,
        'include' => $cats,
        'order_by' => 'include'
    ]);
    foreach ($terms as $term){
         echo '<li><a href="'.get_term_link( $term ).'">'.$term->name .'</a></li>'; 
    }
    echo '<li class="has-children">
    
            <a>'.esc_attr( get_field('kdw_options_menu_title_all', 'options') ).'</a>
            
            <ul class="sub-submenu">';
            $args = array( 
                'hide_empty'        => false,
                'depth'             => 1,
                'hierarchical'      => true,
                'title_li'              => '',
                'use_desc_for_title'    => false
            );
            wp_list_categories($args);  
            echo '</ul>';
    
    echo '</li>';  
echo '</ul>';
    
}

// post slider 
function kdw_get_posts_slider( $post_categories ){
    
    
echo '<div id="row-single-post-footer-slider" class="clearfix wrapper-outer">';
    
    echo '<div class="divider wrapper-main"></div>';
    
    echo '<div class="wrapper-main">';
    
                echo '<h3 class="curtain row-title-serif-italic">Doorlezen</h3>';
    
                echo '<div id="footer-slider" class="slick-slider">';
                global $post;
                $args = array( 
                    'posts_per_page' => 8,
                    'exclude' => $post->ID,
                    'category' => $post_categories 
                );

                $posts = get_posts( $args );
                
                foreach ( $posts as $post ){
                    if ( has_post_thumbnail() ){
                    setup_postdata( $post ); 

                    echo '<a href="'. get_the_permalink().'">';
                    
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id() , 'thumbnail-16x10' );
                   
                        echo '<img data-lazy="'.esc_url($image[0]).'"/>';
                     
                    echo  '<h4>'.get_the_title().'</h4>';

                    echo '</a>';

                    }
                }
                wp_reset_postdata();
    
                echo '</div>';
    
     echo '</div>';
    echo '</div>'; 
 
}



// Archives 
function kdw_dropdown_cats($tax_name,$version = false ){
 
    if ( $version == 'region' ){
        $dropTitle1 = 'Heel Nederland';
        $dropTitle2_pre = 'Heel ';
    } else if ( $version == 'blog-all') {
        $dropTitle1 = '';
        $dropTitle2_pre = 'Categorieën ';
    } else if ( $version == 'blog-cat') {
        $dropTitle1 = 'Alle categorieën';
        $dropTitle2_pre = 'Subcategorieën ';
    } else {
        $dropTitle1 = 'Alle categorieën';
        $dropTitle2_pre = 'Alle ';
    }
    
    
    
    if( is_post_type_archive() ){ 

        if ($tax_name == 'category-stylists-region' ){ echo '<div id="breadcrumbs" class="empty-bc"></div>'; }

        $dropTitle = $dropTitle1;

        $args = array( 
            'taxonomy' => $tax_name,
            'parent'   => 0,
            'hide_empty' => 1
        );
        
    } else {

        if ( function_exists('yoast_breadcrumb') && $tax_name == 'category-stylists-region'  ) { yoast_breadcrumb('<div id="breadcrumbs">','</div>'); } 

        $queried_object = get_queried_object();
        
        if ($version == 'region'){   
            $dropTitle = $dropTitle2_pre . $queried_object->name;
        } else {
            $dropTitle = $dropTitle2_pre;
        }
        
        $args = array( 
            'taxonomy' => $tax_name,
            'parent'   => $queried_object->term_id,
            'hide_empty' => 1
        );
        
    } 

    $terms = get_terms( $args );
    if ($terms){


         echo '<div class="nice-select linked" tabindex="0">';

                         
                        echo '<span class="current">'.$dropTitle.'</span>';
                         
                        echo '<ul class="list">';

                        foreach($terms as $term ){
                            $link = get_term_link( $term );
                            echo '<li class="option"><a href="'.$link.'">'.$term->name.'</a></li>';
                        }
                        echo '</ul>';

                    echo '</div>';


    }

}


// archive filter
function kdw_dropdown_filters( $current, $filter = false){
    
    if ($current == 'blog-all'){
        $link = get_permalink( get_option( 'page_for_posts' ) );
    } else { 
        $link = get_category_link( get_queried_object_id() );
    }
      
    
    if (!$filter){
        $dropTitle = ' Nieuwste';
    } else {
        $filtered = ' Nieuwste';
        if ($filter == 'oudste'){ $filtered = ' Oudste'; }
        else if ($filter == 'populair'){ $filtered = ' Populairste'; }
        else if ($filter == 'reacties'){ $filtered = ' Aantal reacties'; }
        $dropTitle = $filtered;
    }
    
        echo '<div class="nice-select linked blog-filter" tabindex="0">';
            echo '<span class="current">'.$dropTitle.'</span>';
            echo '<ul class="list">';
                echo '<li class="option"><a href="'.$link.'">Nieuwste</a></li>';
                echo '<li class="option"><a href="'.$link.'?order=oudste">Oudste</a></li>';
                echo '<li class="option"><a href="'.$link.'?order=populair">Populairste</a></li>';
                echo '<li class="option"><a href="'.$link.'?order=reacties">Aantal reacties</a></li>';
            echo '</ul>';

        echo '</div>';
        
    
    
}
 





// SHOPS 

// row media
function kdw_shops_extra_media($acf){
    
    $images = get_field($acf);

    if( $images ){
        $c = count($images);
        echo '<div id="row-media-gallery" class="clearfix wrapper-outer images'.$c.'">';
            echo '<div class="wrapper-main clearfix">';
        
                echo '<ul>';
                   foreach( $images as $image ){
                    $popupURL = wp_get_attachment_image_src( $image['ID'],'large');
                    echo '<li>';
                       echo '<a href="#" data-href="'.esc_url($popupURL[0]).'" data-gall="post-gallery" class="popup">';
                        echo wp_get_attachment_image( $image['ID'], 'thumbnail-16x10' ); 
                       echo '</a>';
                    echo '</li>';
                    }
                echo '</ul>';
        
            echo '</div>';
        echo '</div>';
        ?>
    <script>
        jQuery(document).ready(function($) {
            $('.popup').venobox({
                overlayColor: 'rgba(0, 0, 0,0.7)',
                titlePosition: 'bottom'
            });
        });

    </script>
    <?php
    }
    
}


// timetable
function kdw_shops_timetable(){
    $week = get_field('kdw_shops_timetable');
    $extra = get_field('kdw_shops_timetable_extra');
     
    if ( get_field('kdw_shops_timetable_Dinsdag') != '' ){
        
        echo '<div id="shoping-timetable">';
            echo '<h4>Openingstijden</h4>';
            echo '<ul>';
            foreach($week as $key => $value){
                echo '<li><span class="day">'.$key.'</span><span class="time">'.$value.'</span></li>';
            }
            echo '</ul>';
        
            if ($extra){ 
                echo '<p class="timetable-extra-info">'.$extra.'</p>'; 
            }
        
        echo '</div>';
    }

}
