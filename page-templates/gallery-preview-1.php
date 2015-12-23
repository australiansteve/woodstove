<?php
/**
 * Template Name: Gallery preview 1
 * 
 * @package woodstove
 */

?>

<?php

	get_header(); 

?>

<div class="small-12 columns"><!-- .columns start -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="row small-up-1 medium-up-2 large-up-3 austeve_gallery_preview">

				<?php dynamic_sidebar('austeve_gallery_1'); ?>
			
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

</div><!-- .columns end -->

<?php

	get_footer(); 

?>