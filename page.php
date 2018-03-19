<?php get_header(); ?>

<main>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section id="section-page">

        <div id="page-intro" class="wrapper-outer intro-padding clearfix">
            <div class="wrapper-small">
                <header>
                    <h1 class="title--main">
                        <?php the_title(); ?>
                    </h1>
                </header>
            </div>
        </div>

        <div id="page-content" class="wrapper-outer clearfix row-padding">

            <div class="wrapper-small">
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </div>

        </div>

    </section>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
