<?php
/*
 * Template Name: About Page
 */
?>

<?php get_header(); ?>

<div class="full-wrapper">
	<div class="inner-header">
		<div class="wrapper">
			<h2><?php the_title(); ?></h2>
		</div>
	</div>
	<div class="min-wrapper">
		<div class="paragraph-box">
			<p><?php the_field('full_intro'); ?></p>
		</div>
	</div>
	<div class="full-width yellow-box clearfix">
		<div class="wrapper">
			<div class="floating-block">
				<h3><?php the_field('mision_title'); ?></h3>
				<p><?php the_field('mision_txt'); ?></p>
			</div>
			<div class="floating-block">
				<h3><?php the_field('vision_title'); ?></h3>
				<p><?php the_field('vision_txt'); ?></p>
			</div>
		</div>
	</div>
	<div class="min-wrapper">
		<div class="paragraph-box">
			<div class="obj-content">
				<h3><?php the_field('obj_main_title'); ?></h3>
				<p><?php the_field('obj_main_txt'); ?></p>
			</div>
			<div class="obj-content">
				<h3><?php the_field('obj_esp_title'); ?></h3>
				<p><?php the_field('obj_esp_txt'); ?></p>
			</div>
		</div>
	</div>

	<!-- Custom type post: Team Members -->
	<?php
	the_post();
	$team_posts = get_posts( array(
	'post_type' => 'team',
	'posts_per_page' => -1,
	'orderby' => 'date',
	'order' => 'asc',
	) );

	if ( $team_posts ):
	?>

	<div class="last-box full-width cyan-box clearfix">
		<div class="wrapper">
			<h2 class="team-member-title"><?php the_field('team_title'); ?></h2>

			<?php
			foreach ( $team_posts as $post ):
			setup_postdata($post);

			?>
			<div class="member-box">

				<?php
				$photo = get_field('photo');
				if( !empty($photo) ): ?>
					<img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" />
				<?php endif; ?>

				<h4><?php the_field('full_name'); ?></h4>
				<p><?php the_field('job'); ?></p>
				<p><?php the_field('degree'); ?></p>
				<?php the_content(); ?>
			</div>

			<?php endforeach; ?>

		</div>
	</div>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
