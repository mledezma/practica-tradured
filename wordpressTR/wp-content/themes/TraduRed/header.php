<!DOCTYPE html>
<html>
<head>
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<meta charset="utf-8">
	<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Paytone+One|Raleway:400,400i,700,700i" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>
	<div id="header" class="header clearfix">
		<div class="wrapper">
			<a href="<?php echo home_url(); ?>" class="logo"><img src="<?php bloginfo('template_directory');?>/img/logoLabelmin.png" alt="Logo de TraduRed"></a>
			<ul class="nav">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</ul>
		</div>
	</div>
