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
 * @package MFID-Sandbox
 */

get_header();
?>

	
	<main id="main-custom-cursor" class="site-main main--custom-cursor">
		<div id="cc-project-list">
			<?php the_field('custom_cursor_project_list'); ?>
		</div>
	</main><!-- #main -->
	<div id="cursor" class="cursor--ready"></div>

<?php

get_footer();
