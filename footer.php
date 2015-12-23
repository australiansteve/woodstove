<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Woodstove
 */
?>

		</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<div>

				<ul class="horizontal menu">

					<?php
					 	$args = array (
						 	'theme_location' 	=> 'secondary',
						 	'container' 		=> '',
						 	'menu_class' 		=> '',
						 	'menu_id' 			=> '',
						 	'items_wrap' 		=> '%3$s'
					 	);
						wp_nav_menu( $args );
					?>
				</ul>

			</div>

			<div class="site-info">
				<p><a href="http://australiansteve.com"><i class="fa fa-copyright"></i> AustralianSteve.com</a></p>
			</div><!-- .site-info -->

		</footer><!-- #colophon -->

	</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
