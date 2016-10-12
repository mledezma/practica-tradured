<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="full-wrapper">
        <div class="inner-header pattern">
            <div class="wrapper">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>

        <div class="wrapper">
            <div class="whiteBox last-box">
                <div class="post-info">
                    <p class="feature-text"> <?php the_content(); ?> </p>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; else : ?>

<?php endif; ?>

<?php get_footer(); ?>