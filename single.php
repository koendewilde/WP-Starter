<?php get_header(); ?>

<main>

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

    <section id="section-single">

        <div id="page-content" class="clearfix wrapper-outer">

            <div class="wrapper-small clearfix">

                <div class="wrapper-content">

                    <header>

                        <h2 class="title--top small"><a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Nieuws</a></h2>

                        <h1 class="title--main">
                            <?php the_title(); ?>
                        </h1>

                        <div class="single-post-meta ">
                            <div class="single-post-meta-date">
                                <?php the_date(); ?>
                            </div>
                        </div>

                    </header>

                    <div class="entry-content">
                        <?php the_content(); ?>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <?php endwhile; endif; ?>

</main>

<?php get_footer(); ?>
