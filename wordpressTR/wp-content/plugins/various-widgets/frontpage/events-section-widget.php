<div class="color-box yellow-box pattern clearfix">
	<div class="wrapper">
		<div class="info-box">
			<h2><?php the_field('event_title'); ?></h2>
			<p><strong><?php the_field('event_subtitle'); ?></strong></p>
			<div class="infoEvent">
				<h4>Día: </h4>
				<span><?php the_field('event_day'); ?></span>
				<h4>Hora: </h4>
				<span><?php the_field('event_time'); ?></span>
				<h4>Precio: </h4>
				<span><?php the_field('event_price'); ?></span>
				<h4>Descripción:</h4>
				<p><?php the_field('event_desc'); ?></p>
				<p><?php the_field('event_paypal'); ?></p>
				<div class="button-box">
					<?php the_content(); ?>
				</div>
			</div>
		</div>
		<img class="icon" src="<?php bloginfo('template_directory');?>/img/eventIcon.png" alt="Ícono de Eventos">
	</div>
</div>

