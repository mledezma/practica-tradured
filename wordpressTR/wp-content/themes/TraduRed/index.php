<?php
/*
 * Template Name: Blog Page
 */
?>


<?php get_header(); ?>
<div class="wrapperBlog">

	<div class="innerHeader"></div>

<div class="minWrapper">
 <!-- Start the Loop. -->
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 	<!-- Test if the current post is in category 3. -->
 	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
 	<!-- Otherwise, the div box is given the CSS class "post". -->

 	<?php if ( in_category( '3' ) ) : ?>
 		<div class="post-cat-three"></div>
 	<?php else : ?>
 		<div class="posts">
 	<?php endif; ?>

	<div class="ftImage">
	<?php the_post_thumbnail(); ?>
	</div>

	<div class="postBox">

 	<!-- Display the Title as a link to the Post's permalink. -->

 	<h3><a class="postTitle" href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>

	<div class="postInfo">

	 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->
	 	<small><?php the_time('j \d\e\ F \d\e\ Y \|\ g:i a '); ?> por <?php the_author_posts_link(); ?></small>
	 	 <!-- Display a comma separated list of the Post's Categories. -->
	 	<small class="postmetadata"><?php _e( 'Publicado en' ); ?> <?php the_category( ', ' ); ?></small>

 	</div>

 	<!-- Display the Post's content in a div box. -->

 	<div class="entry">
 		<?php the_content(); ?>
 	</div>


 	</div> <!-- closes the first div box -->
 	</div>


 	<!-- Stop The Loop (but note the "else:" - see next line). -->

 <?php endwhile; else : ?>


 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Lo sentimos. No se encontraron posts' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>

</div>
</div>

<?php get_footer();

