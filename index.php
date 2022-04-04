<?php 

get_header();

while (have_posts()) {
    the_post(); ?>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="hero">
                            <?php the_post_thumbnail();?>
                            <div class="text">
                                <h1><?php the_title(); ?></h1>
                                <p><?php the_content(); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php } ?>

    <?php get_footer(); ?>