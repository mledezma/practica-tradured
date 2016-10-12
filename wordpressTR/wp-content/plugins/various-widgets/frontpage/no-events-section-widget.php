<div class="colorBox yellowBox pattern clearfix">
	<div class="wrapper">
		<div class="infoBox noEventBox">
			<h2><?php echo $noevent_title; ?></h2>
			<p><?php echo $noevent_txt; ?></p>
			<?php
		    // Get the ID of a given category
		    $category_id = get_cat_ID( 'eventos' );
		    // Get the URL of this category
		    $category_link = get_category_link( $category_id );
			?>
			<div class="buttonBox">
				<a href="<?php echo esc_url( $category_link ); ?>" class="mainButton">Ir a eventos</a>
			</div>
		</div>
		<img class="icon" src="<?php bloginfo('template_directory');?>/img/eventIcon.png" alt="Ícono de Eventos">
	</div>
</div>

