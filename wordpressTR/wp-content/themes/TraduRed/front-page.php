<?php
/*
 * Template Name: Home Page
 */
?>

<?php get_header(); ?>

<div class="full-wrapper">
    <div class="feature-box">
        <h2 class="call-out"><?php the_field('ft_text'); ?></h2>
        <?php
            $photo = get_field('img_main');
            if( !empty($photo) ): ?>
                <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
        <?php endif; ?>
    </div>
    <div class="min-wrapper">
        <div class="paragraph-box intro-section clearfix">
            <img class="icon" src="<?php bloginfo('template_directory');?>/img/workIcon.png" alt="Ícono de aplicantes de trabajo">
            <p class="feature-text info-box"><?php the_field('intro_text'); ?></p>
        </div>
    </div>

    <?php
    $download_title = get_field( "download_title" );
    $copy_brochure = get_field( "copy_brochure" );
    $noevent_title = get_field( "noevent_title" );
    $noevent_txt = get_field( "noevent_txt" );
    ?>

    <!-- Custom type post: Events -->
    <?php
    the_post();
    $event_posts = get_posts( array(
    'post_type' => 'event',
    'posts_per_page' => 1,
    'orderby' => 'date',
    'order' => 'desc',
    ) );

    if ( $event_posts ):
    ?>

        <?php
        foreach ( $event_posts as $post ):
        setup_postdata($post);
        ?>

    <div id="events-section-content" class="full-width yellow-box clearfix events-section-content widget-area">
        <?php dynamic_sidebar( 'events_section_content' ); ?>
    </div><!-- #events-main-content -->

    <?php endforeach; ?>
    <?php endif; ?>


    <!-- Custom type post: Reviews -->
    <?php
    the_post();
    $review_posts = get_posts( array(
    'post_type' => 'review',
    'posts_per_page' => 4,
    'orderby' => 'date',
    'order' => 'desc',
    ) );

    if ( $review_posts ):
    ?>

    <div class="wrapper">
        <div class="paragraph-box clearfix">

            <?php
            foreach ( $review_posts as $post ):
            setup_postdata($post);
            ?>

            <div class="review">
                <p><?php the_field('review_txt'); ?></p>
                <span><?php the_field('review_name'); ?></span>
                <?php the_content(); ?>
            </div>

            <?php endforeach; ?>

        </div>
    </div>

    <?php endif; ?>

    <div class="download-form-box full-width cyan-box last-box">
        <div class="wrapper clearfix">
            <img class="icon" src="<?php bloginfo('template_directory');?>/img/brochureIcon.png" alt="Ícono de brochure">
            <div class="info-box">
                <h2><?php echo $download_title; ?></h2>
                <p><?php echo $copy_brochure; ?></p>
                <div class="download-form form-box">
                    <?php echo do_shortcode( '[email-download download_id="150" contact_form_id="133"]' ); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
