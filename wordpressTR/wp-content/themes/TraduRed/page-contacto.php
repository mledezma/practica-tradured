<?php
/*
 * Template Name: Contact Page
 */
?>


<?php get_header(); ?>

<div class="full-wrapper">
	<div class="inner-header">
		<div class="wrapper">
			<h2><?php the_title(); ?></h2>
		</div>
	</div>
	<div class="wrapper clearfix">
		<div class="contact-box">
			<p><?php the_field('contact_txt'); ?></p>
			<div class="form-box">
				<?php echo do_shortcode( '[contact-form-7 id="74" title="Formulario de contacto"]' ); ?>
			</div>
		</div>
		<div class="contact-info">
			<span><strong><?php the_field('cont_name1'); ?></strong></span>
			<span><?php the_field('cont_info1'); ?></span>
			<span><strong><?php the_field('cont_name2'); ?></strong></span>
			<span><?php the_field('cont_info2'); ?></span>
		</div>
	</div>
</div>

<?php get_footer(); ?>
