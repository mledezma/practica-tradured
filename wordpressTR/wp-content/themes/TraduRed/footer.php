	<div id="footer">
		<div class="wrapper clearfix">
			<ul class="navSec">
				<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			</ul>
			<div class="socialMedia">
				<span>Síguenos</span>
				<a href="https://www.facebook.com/TraduRedCostaRica/"><img src="<?php bloginfo('template_directory');?>/img/fbIcon.png" alt="Ícono de FB"></a>
			</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>
