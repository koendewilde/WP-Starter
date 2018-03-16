<?php get_header(); ?>

<main>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section id="section-page">


        <div id="page-intro-wrapper" class="wrapper-outer clearfix">

            <header>
                <div class="wrapper-small">
                    <?php 
                    
                     $top_title = get_field('kdw_page_toptitle');
                     $main_title = get_field('kdw_page_title');
                     $intro_options = get_field('kdw_page_intro_opties'); 
                    
                    if ($top_title && $top_title != ''){ echo '<h2 class="title--top">'.$top_title.'</h2>'; } else { echo '<h2 class="title--top empty"></h2>'; }
                    if ($main_title && $main_title != ''){ echo '<h1 class="title--main">'.$top_title.'</h1>'; } else { echo '<h1 class="title--main">'.get_the_title().'</h1>'; }
                    
                    // if buttons_title
                    if( $intro_options && in_array('buttons_title', $intro_options) ) { 
                        kdw_page_intro_buttons('kdw_page_intro_button1', 'kdw_page_intro_button2'); 
                    }
                    ?>
                </div>
            </header>
        </div>

        <?php 
        // if image
        if( $intro_options && in_array('img', $intro_options) && !in_array('img_bottom', $intro_options) ) { 
            kdw_row_img('intro');
        }
        ?>

        <div id="page-content" class="wrapper-outer clearfix row-padding">

            <div class="wrapper-small">

                <div class="entry-content medium serif">
                    <?php the_content(); ?>
                </div>
                <?php 
                // if buttons_content
                 if( $intro_options && in_array('buttons_content', $intro_options) ) { 
                        kdw_page_intro_buttons('kdw_page_content_button1', 'kdw_page_content_button2'); 
                    }
                ?>
            </div>

        </div>

        <?php 
        // if image & bottom
        if( $intro_options && in_array('img', $intro_options) && in_array('img_bottom', $intro_options) ) { 
            kdw_row_img('intro');
        }
        ?>


        <!-- START FLEXIBLE CONTENT -->
        <?php

        // flexible content
        if( have_rows('kdw_page_flexible_content') ){
            
            $i = 0;  
        
            while ( have_rows('kdw_page_flexible_content') ) : the_row();
                
                $i++; 
        
                if( get_row_layout() == 'kdw_row_editor' ){
                   kdw_row_editor($i);
                } elseif( get_row_layout() == 'kdw_row_img' ){ 
                    kdw_row_img($i);
                }

            endwhile;
        }
        
        ?>
            <!-- END FLEXIBLE CONTENT -->







            <?php 
        // extra content not on flexible pages
        // kdw_row_extra_page_content(); 
        ?>

    </section>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
