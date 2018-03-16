<?php 
/* Template Name: Homepage */
get_header(); ?>

<main>

    <section id="section-page-home">

        <header class="section-header-intro wrapper-outer">
            <div class="wrapper-large">
                <div class="wrapper-small">

                    <div id="header-intro-content">
                        <h2 class="title--top uppercase">
                            <?php echo esc_attr( get_field('kdw_home_toptitle') ); ?>
                        </h2>
                        <h1 class="title--main">
                            <?php echo esc_attr( get_field('kdw_home_title') ); ?>
                        </h1>
                        <div id="header-intro-content-buttons" class="buttons-wrapper">
                            <?php 
                            $button1_class = 'button-green-solid '. esc_attr(get_field('kdw_home_intro_button1_icon') );    
                            kdw_link_button('kdw_home_intro_button1',$button1_class); 

                            $button2_class = 'button-green-solid '. esc_attr(get_field('kdw_home_intro_button2_icon') );    
                            kdw_link_button('kdw_home_intro_button2',$button2_class); 
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </header>


        <div id="row-homepage-blocks" class="wrapper-outer">
            <div class="wrapper-medium">
                <div id="homepage-blocks-wrapper">
                    <?php
                    if( have_rows('kdw_home_blocks') ) : 
                        $i = 0;
                        while ( have_rows('kdw_home_blocks') ) : the_row();
                            
                            $i++;
                    
                            echo '<div class="home-block home-block'.$i.'">';

                                    $img = get_sub_field('img');
                                    if ($img){
                                        
                                       $bg_url = wp_get_attachment_image_src( $img, 'thumbnail_square' ); 
                                        echo '<div class="home-block-img" style="background-image: url('.$bg_url[0].')"><span></span></div>';
                                        
                                    } else {
                                        echo '<div class="home-block-img fallback"><span></span></div>';
                                    }
                    
                                echo '<div class="home-block-content">';
                                    echo '<h2 class="title--v1">'.esc_attr( get_sub_field('title') ).'</h2>'; 
                                    echo wpautop( get_sub_field('excerpt') ); 
                                    $link = get_sub_field('button');
                                    if( $link ){
                                       echo '<a class="button-green-solid" href="'. $link['url'].'" target="'. $link['target'].'">' . $link['title'].'</a>';
                                    } 
                                echo '</div>';
                    
                    
                            echo '</div>';
                    
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>


        <div id="row-homepage-rows" class="wrapper-outer">
            <div class="wrapper-medium">
                <div id="homepage-rows-wrapper">

                    <?php
                    if( have_rows('kdw_home_rows') ) : 
                        $i = 0;
                        while ( have_rows('kdw_home_rows') ) : the_row();
                            
                            $i++;
                    
                            echo '<div class="home-row home-row'.$i.' clearfix">';
                    
                    
                                echo '<div class="home-row-img">';
                                $img = get_sub_field('img');
                                $square = get_sub_field('img_option');
                                if ($img && $square){
                                        
                                   $bg_url = wp_get_attachment_image_src( $img, 'thumbnail_square' ); 
                                   echo '<div class="home-row-round-img" style="background-image: url('.$bg_url[0].')"><span></span></div>';
                                        
                                } else if ($img) {
                                    
                                    echo wp_get_attachment_image( $img, 'medium' ); 
                                    
                                }
                                    
                                echo '</div>';
                    
                    
                                echo '<div class="home-row-content">';
                                    echo '<div>';
                                    echo '<h2 class="title--v2">'.esc_attr( get_sub_field('title') ).'</h2>'; 
                                    echo wpautop( get_sub_field('excerpt') ); 
                                    $link = get_sub_field('button');
                                    if( $link ){
                                       echo '<a class="button-green-solid" href="'. $link['url'].'" target="'. $link['target'].'">' . $link['title'].'</a>';
                                    } 
                                    echo '</div>';
                                echo '</div>';
                    
                    
                            echo '</div>';
                    
                        endwhile;
                    endif;
                    ?>
                </div>
            </div>
        </div>


        <div id="row-homepage-contact" class="row-contact-cta">

            <div class="contact-cta-wrapper wrapper-main">

                <div class="contact-cta-left">
                    <h2 class="title--v2">
                        <?php echo esc_attr( get_field('kdw_home_contact_left_title') ); ?>
                    </h2>
                    <?php echo wpautop( get_field('kdw_home_contact_left_content') ); ?>
                    <?php
                    if( have_rows('kdw_home_contact_left_list') ) : 
                        echo '<ul class="contact-cta-left-list">';
                            while ( have_rows('kdw_home_contact_left_list') ) : the_row();
                                    echo '<li><span></span>' . esc_attr( get_sub_field('item') ) . '</li>';
                            endwhile;
                        echo '</ul>';
                    endif;
                    ?>
                </div>

                <div class="contact-cta-right">
                    <h2 class="title--v2">
                        <?php echo esc_attr( get_field('kdw_home_contact_right_title') ); ?>
                    </h2>
                    <?php echo wpautop( get_field('kdw_home_contact_right_content') ); ?>
                    <?php kdw_link_button('kdw_home_contact_right_button','button-green-solid'); ?>
                </div>

            </div>
        </div>


        <div id="row-homepage-usp">
            <div id="homepage-usp-wrapper">
                <ul class="wrapper-main">
                    <?php
             
            if( have_rows('kdw_home_usp_list') ) : 
                while ( have_rows('kdw_home_usp_list') ) : the_row();
                        echo '<li>' . esc_attr( get_sub_field('item') ) . '</li>';
                endwhile;
            endif;
            ?>
                </ul>
            </div>
        </div>


        <?php kdw_row_extra_page_content(); ?>

    </section>

</main>

<?php get_footer(); ?>
