<?php get_header(); ?>

<main>

    <section id="section-page" class="section-404">

        <div id="page-intro" class="wrapper-outer intro-padding clearfix">
            <div class="wrapper-small">
                <header>
                    <h1 class="title--main">
                        <?php 
                            if( get_field('kdw_page404_title', 'options') ){ 
                                echo esc_attr( get_field('kdw_page404_title', 'options') ); 
                            } else { 
                                echo 'Pagina niet gevonden'; 
                            } 
                        ?>
                    </h1>
                </header>
            </div>
        </div>

        <div id="page-content" class="wrapper-outer clearfix row-padding">

            <div class="wrapper-small">
                <div class="entry-content">
                    <?php 
                        if( get_field('kdw_page404_content', 'options') ){ 
                            echo get_field('kdw_page404_content', 'options'); 
                        } 
                    ?>
                </div>
            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>
