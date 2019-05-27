<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portals
 */

get_header();
?>

	<div id="sandbox-primary" class="content-area__sandbox">
		<div class="container">
			<div class="counter">
				<div class="current-count"></div>
				<div class="total-count"></div>
			</div>
			<div class="gallery-container">
				<div class="gallery-col">
					<?php 
					$images = get_field('special_gallery');
					if( $images ): ?>
					
					<p class="image-description"><?php echo $images['caption']; ?></p>
						<div class="slick-gallery">
							<?php foreach( $images as $image ): ?>
							
								<div class="gallery-item">
									
									<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									
								</div>
							<?php endforeach; ?>
						</div>
					<?php endif; ?>	
				</div>
			</div>
		</div>

		
	</div><!-- #primary -->

<?php
get_footer();
