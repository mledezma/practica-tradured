<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="fullWrapper">
        <div class="innerHeader pattern">
            <div class="wrapper">
                <h2><?php the_title(); ?></h2>
            </div>
        </div>

        <div class="wrapper">
            <div class="whiteBox lastBox">
                <div class="postInfo">
                    <p class="featureText"> <?php the_content(); ?> </p>
                </div>
            </div>
        </div>
    </div>

<?php endwhile; else : ?>

<?php endif; ?>

<?php get_footer(); ?>
